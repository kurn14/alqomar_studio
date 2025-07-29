<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    function index() {
        $data = [
            'title' => 'About Us',
            // Add any other data you want to pass to the view
        ];

        return view('about.index', $data);
    }
}
