<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
      return view('auths.login');
    }

    public function postlogin(Request $request){
      // NIK : 12020101011234

      if (Auth::attempt($request->only('nik'))) {
        return redirect('/homeUser');
      }
      return redirect('/login');
    }
}
