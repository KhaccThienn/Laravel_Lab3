<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function check_login(Request $req)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        
        $message = [
            'email.required' => 'Email is Required',
            'email.email'    => 'Invalid Email Address Format',
            'password.required' => 'Password is Required'
        ];
        
        $req->validate($rules, $message);
    }
}