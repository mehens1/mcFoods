<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    //
    public function home()
    {
        $data = [
            'page' => 'Home'
        ];

        return view('home', compact('data'));
    }

    public function login()
    {
        $data = [
            'page' => 'Login'
        ];

        return view('login', compact('data'));
    }

    public function register()
    {
        $data = [
            'page' => 'Register'
        ];

        return view('register', compact('data'));
    }

    public function forgotPassword()
    {
        $data = [
            'page' => 'Forgot Password'
        ];

        return view('forgotPassword', compact('data'));
    }
}
