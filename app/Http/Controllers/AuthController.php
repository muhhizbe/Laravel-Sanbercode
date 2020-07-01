<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){
        $data = $request;
        // dd($data);
        return view('welcome', ['data' => $data]);
    }
}
