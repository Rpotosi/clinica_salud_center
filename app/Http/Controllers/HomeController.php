<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function __invoke()
    {
        return view('Home.home');
    }

    public function show()
    {
        return view('home.home-show');
    }

}


