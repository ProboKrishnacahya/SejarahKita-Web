<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use App\Models\Question;
use App\Models\Student;
use App\Models\LogApps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_leaderboard = "active";
        $user = Student::find(Auth::user()->id);
        $leaderboards = Leaderboard::all();
        return view('leaderboard', compact('active_leaderboard', 'user', 'leaderboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Menunjukkan pertanyaan kepada student untuk dijawab
        $questions = Question::findOrFail($id);

        LogApps::create([
            "table" => "Leaderboard",
            "id_user" => Auth::user()->id,
            "log_path" => "LeaderboardController@show",
            "log_desc" => "Show Leaderboard",
            "log_ip" => "192.178.1.1",
        ]);

        return view('questionView', compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
