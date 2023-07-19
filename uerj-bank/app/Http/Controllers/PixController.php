<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PixController extends Controller
{
    public function index(Request $request, string $name = ''){
        $title = "PIX";
        return view('pix/index',[
            'activePath' => $request->path(),
            'name' => $name
        ]);
    }
}
