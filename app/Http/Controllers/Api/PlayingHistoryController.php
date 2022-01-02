<?php

namespace App\Http\Controllers\Api;

use App\Models\LogApps;
use Illuminate\Http\Request;
use App\Models\PlayingHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PlayingHistoryResource;
use App\Http\Controllers\Auth\InternetProtocolAddressController;
use App\Models\Leaderboard;

class PlayingHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playinghistories = PlayingHistory::all();
        return ['playinghistories' => PlayingHistoryResource::collection($playinghistories)];
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
        PlayingHistory::create($request->all());
        Leaderboard::create($request->all());

        return response()->json(['pesan' => 'Data berhasil masuk', 'status' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $playinghistories = PlayingHistory::findOrFail($id);

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Auth::user()->id,
            "table" => "sej12_playing_history",
            "log_path" => "PlayingHistoryController@show",
            "log_desc" => "Show Playing History",
            "log_ip" => $ip->getIPAddress()
        ]);

        return ['playinghistories' => PlayingHistoryResource::collection($playinghistories)];
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
