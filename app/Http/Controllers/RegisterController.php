<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function check_register(Request $req)
    {
        $rules = [
            'name' => 'required|min:6|max:20',
            'email' =>'required|email|max:255',
            'password' =>'required|min:6',
            'confirmpassword' => 'required|min:6|same:password',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
        ];

        $messages = [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 6 characters',
            'name.max' => 'Name must be at max 20 characters',
            'email.required' => 'Email is required.',
            'email.email' => 'Email is not valid.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters.',
            'confirmpassword.required' => 'Confirm password is required.',
            'confirmpassword.min' => 'Confirm password must be at least 6 characters.',
            'confirmpassword.same' => 'Confirm password failed.',
            'image.required' => 'Image is required',
            'image.mimes' => 'Images must be JPG, JPEG, PNG or GIF',
        ];

        $req->validate($rules, $messages);
        
        $name = $req->image->getClientOriginalName();
        $filename = time(). $name;

        $req->image->move(public_path('uploads'), $filename);

        return view('index');
    }
}