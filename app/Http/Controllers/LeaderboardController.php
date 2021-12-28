<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use App\Models\PlayingHistory;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index()
    {
        $students = Student::all();
    $leaderboards = Leaderboard::all();
        return view('leaderboard', [
            'active_leaderboard' => "active",
            "easy" => PlayingHistory::where('id_level', 2)->get()->sortByDesc('skor')->take(5),
            "hard" => PlayingHistory::where('id_level', 3)->get()->sortByDesc('ranked_point')->take(5),
            compact('leaderboards', 'students')
        ]);
    }
}
