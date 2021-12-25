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

        LogApps::create([
            "table" => "Student",
            "id_user" => Auth::user()->id,
            "log_path" => "StudentController@show",
            "log_desc" => "Show Student",
            "log_ip" => "192.178.1.1",
        ]);
        
        return view('playingHistory', compact('user'));
    }

    public function edit()
    {
        $user = Student::find(Auth::user()->id);
        $createdAt = Carbon::parse($user['created_at'])->format('d/m/Y');

        return view('profile', compact('user', 'createdAt'));
    }
}
