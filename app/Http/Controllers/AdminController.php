<?php

namespace App\Http\Controllers;

use App\Models\LogApps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('home', compact('user'));
    }

    public function show()
    {
        $user = Auth::user();
        $logs = LogApps::all();

        return view('admin.log', compact('user', 'logs'));
    }

    public function edit()
    {
        $user = Auth::user();

        return view('admin.profile');
    }
}
