<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $data = [
            'title' => 'Home',
            'projects' => Project::latest()->take(4)->get(),
            'testimonials' => Testimonial::latest()->take(5)->get(),
        ];
        // dd($data);
        return view('home.index', $data);
    }
}
