<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('admin.profile');
    }
}
