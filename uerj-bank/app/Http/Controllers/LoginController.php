<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
        $title = "Entrar";
        return view('login/index',[
            'activePath' => $request->path()
        ]);
    }

}
