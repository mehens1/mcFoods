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

        return view('webpage', compact('data'));
    }
}
