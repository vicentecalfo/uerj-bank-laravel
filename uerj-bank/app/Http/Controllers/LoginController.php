<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $title = "Entrar";
        return view('login/index',[
            'activePath' => $request->path()
        ]);
    }
}
