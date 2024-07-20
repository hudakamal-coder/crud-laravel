<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $my_array = ['huda','bawan','dyam'];
        return view('home',['my_array'=>$my_array]);
    }

    public function login(){
        return view('login');
    }
    public function may(){
        return view('may');
    }
}
