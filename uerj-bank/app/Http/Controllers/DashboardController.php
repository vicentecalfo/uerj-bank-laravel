<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UseCases\AccountUseCase;
use App\UseCases\UserUseCase;

class DashboardController extends Controller
{

    public function __construct(
        private AccountUseCase $accountUseCase,
        private UserUseCase $userUseCase
    ){}

    public function index(Request $request){
        $title = "Dashboard";
        $account = $this->accountUseCase->getByUserId(1);
        $user = $this->userUseCase->getById(1);
        return view('dashboard/index',  array(
            'activePath' => $request->path(),
            'account' => $account,
            'user' => $user
        ));
    }

}
