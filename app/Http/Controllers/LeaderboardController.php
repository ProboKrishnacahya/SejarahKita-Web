<?php

namespace App\Http\Controllers;

use App\Models\LogApps;
use App\Models\Student;
use App\Models\Leaderboard;
use Illuminate\Http\Request;
use App\Models\PlayingHistory;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\InternetProtocolAddressController;

class LeaderboardController extends Controller
{
    public function index()
    {
        $user = Student::find(Auth::user()->id);
        $students = Student::all();
        $leaderboards = Leaderboard::all();

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Auth::user()->id,
            "log_table" => "sej12_leaderboard",
            "log_path" => "LeaderboardController@index",
            "log_desc" => "Index of Leaderboard",
            "log_ip" =>  $ip->getIPAddress()
        ]);

        return view('leaderboard', [
            "easy" => PlayingHistory::where('id_level', 2)->get()->sortByDesc('ranked_point'),
            "hard" => PlayingHistory::where('id_level', 3)->get()->sortByDesc('ranked_point'),
            'active_leaderboard' => "active",
            compact('user', 'students', 'leaderboards')
        ]);
    }
}
