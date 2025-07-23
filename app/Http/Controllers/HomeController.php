<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $data = [
            'title' => 'Home',
            'description' => 'Welcome to our homepage!'
        ];
        return view('home.index', $data);
    }
}
