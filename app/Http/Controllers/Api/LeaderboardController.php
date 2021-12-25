<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LeaderboardResource;
use App\Models\Leaderboard;
use App\Models\LogApps;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaderboards = Leaderboard::all();
        return ['leaderboards' => LeaderboardResource::collection($leaderboards)];
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
        Leaderboard::create([
            'id_student' => $request->id_student,
            'ranked_point' => $request->ranked_point
        ]);

        return ['message' => 'data has been saved'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leaderboards = Leaderboard::findOrFail($id);
        LogApps::create([
            "table" => "Leaderboard",
            "id_user" => Auth::user()->id,
            "log_path" => "LeaderboardController@show",
            "log_desc" => "Show Leaderboard",
            "log_ip" => "192.178.1.1",
        ]);
        return ['leaderboards' => LeaderboardResource::collection($leaderboards)];
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
        $leaderboards = Leaderboard::findOrFail($id);

        $leaderboards->update([
            'id_student' => $request->id_student,
            'ranked_point' => $request->ranked_point
        ]);

        return ['message' => 'data has been updated'];
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
