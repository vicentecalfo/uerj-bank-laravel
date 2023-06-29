<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request){
        $title = "Dashboard";
        return view('dashboard/index',[
            'activePath' => $request->path()
        ]);
    }

    public function testDB(Request $request){
        $data = DB::select('select * from user');
        //$data = DB::select('select * from user where id = :id', ['id' => 1]);
        //var_dump($data);
        return $data;
    }
}
