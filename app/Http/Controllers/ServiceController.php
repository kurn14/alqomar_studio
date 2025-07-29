<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    

    function index()
    {
        $data = [
            'title' => 'Services',
            // Add any other data you want to pass to the view
        ];
        
        return view('services.index', $data);
    }
}
