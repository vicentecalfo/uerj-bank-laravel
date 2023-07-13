<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UseCases\BankStatementUseCase;

class BankStatementController extends Controller
{


    public function __construct(
        private BankStatementUseCase $bankStatementUseCase,
    ){}

    public function index(Request $request){
        $title = "Extrato";
        $bankStatement = $this->bankStatementUseCase->getByUserId(1);
        return view('bankStatement/index',[
            'activePath' => $request->path(),
            'bankStatement' => $bankStatement
        ]);
    }
}
