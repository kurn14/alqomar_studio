<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Contact Us',
            // Add any other data you want to pass to the view
        ];
        
        return view('contact.index', $data);
    }
}
