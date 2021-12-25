<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\LogApps;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $user = Student::find(Auth::user()->id);

        return view('home', compact('user'));
    }

    public function show()
    {
        $user = Student::find(Auth::user()->id);

        return view('playingHistory', compact('user'));
    }

    public function edit()
    {
        $user = Student::find(Auth::user()->id);
        $createdAt = Carbon::parse($user['created_at'])->format('d/m/Y');

        return view('profile', compact('user', 'createdAt'));
    }
}
