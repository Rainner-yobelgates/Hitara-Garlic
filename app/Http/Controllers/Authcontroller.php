<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function postlogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            if(Auth()->User()->role_id == 1){
                return redirect('/backend-panel/auth');
            }else if(Auth()->user()->role_id == 2){
                return redirect('#');
            }
        }else{
            return redirect('/backend-panel');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/backend-panel');
    }
}
