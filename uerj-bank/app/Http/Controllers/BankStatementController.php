<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankStatementController extends Controller
{
    public function index(Request $request){
        $title = "Extrato";
        return view('bankStatement/index',[
            'activePath' => $request->path()
        ]);
    }
}
