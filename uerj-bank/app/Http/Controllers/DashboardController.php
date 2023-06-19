<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $title = "Dashboard";
        return view('dashboard/index',[
            'activePath' => $request->path()
        ]);
    }
}
