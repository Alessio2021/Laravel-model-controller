<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index() 
    {
        $films = Movie::all();
        // dd($films);
        $data = ['films' => $films];
        return view('home', $data);
    }
}
