<?php

namespace App\Http\Controllers\Api;

use App\Models\LogApps;
use App\Models\Leaderboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\LeaderboardResource;
use App\Http\Controllers\Auth\InternetProtocolAddressController;

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

        $ip = new InternetProtocolAddressController;

        LogApps::create([
            "id_user" => Auth::user()->id,
            "log_table" => "sej12_leaderboard",
            "log_path" => "LeaderboardController@show",
            "log_desc" => "Index of Leaderboard",
            "log_ip" =>  $ip->getIPAddress()
        ]);

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
            'id_level' => $request->id_level,
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
            'id_level' => $request->id_level,
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

    public function indexEasy()
    {
        // $leaderboards = Leaderboard::select()->where(['id_level' => 2, 'id_student' => Auth::user()->id])->get();

        $leaderboards = DB::select(
            'SELECT sej12_leaderboards.id_student, sej12_leaderboards.id_level, SUM(sej12_leaderboards.ranked_point) AS ranked_point
            FROM sej12_leaderboards
            WHERE sej12_leaderboards.id_level = 2
            GROUP BY sej12_leaderboards.id_student, sej12_leaderboards.id_level
            ORDER BY sej12_leaderboards.ranked_point DESC'
        );

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Auth::user()->id,
            "log_table" => "sej12_leaderboard",
            "log_path" => "LeaderboardController@show",
            "log_desc" => "Index of Leaderboard",
            "log_ip" =>  $ip->getIPAddress()
        ]);

        return ['leaderboards' => LeaderboardResource::collection(Leaderboard::hydrate($leaderboards))];
    }

    public function indexHard()
    {
        $leaderboards = DB::select(
            'SELECT sej12_leaderboards.id_student, sej12_leaderboards.id_level, SUM(sej12_leaderboards.ranked_point) AS ranked_point
            FROM sej12_leaderboards
            WHERE sej12_leaderboards.id_level = 3
            GROUP BY sej12_leaderboards.id_student, sej12_leaderboards.id_level
            ORDER BY sej12_leaderboards.ranked_point DESC'
        );

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Auth::user()->id,
            "log_table" => "sej12_leaderboard",
            "log_path" => "LeaderboardController@show",
            "log_desc" => "Index of Leaderboard",
            "log_ip" =>  $ip->getIPAddress()
        ]);

        return ['leaderboards' => LeaderboardResource::collection(Leaderboard::hydrate($leaderboards))];
    }
}
