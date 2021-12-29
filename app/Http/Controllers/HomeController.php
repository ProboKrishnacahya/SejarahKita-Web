<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $role = Auth::user()->role;
        if ($role == "admin") {
            return redirect()->route('admin');
        } else if ($role == "user") {
            return redirect()->route('user');
        } else {
            return redirect()->to('logout');
        }
    }

    public function adminHome()
    {
        $user = Student::find(Auth::user()->id);
        return view('home', compact('user'));
    }
}
