<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        $active_home = "active";

        return view('home', compact('active_home'));
    }
}
