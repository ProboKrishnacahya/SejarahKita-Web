<?php

namespace App\Http\Controllers;

use App\Models\LogApps;
use App\Models\Student;
use App\Models\Leaderboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\InternetProtocolAddressController;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            "easy" => Leaderboard::where('id_level', 2)->get()->sortByDesc('ranked_point'),
            "hard" => Leaderboard::where('id_level', 3)->get()->sortByDesc('ranked_point'),
            'active_leaderboard' => "active",
            compact('user', 'students', 'leaderboards')
        ]);
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

        if ($request->id_level == 2) {

            // Leaderboard::create([
            //     'id_student' => Auth::user()->id,
            //     'id_level' => 2,
            //     'ranked_point' => $this->getEasy()
            // ]);

            DB::table('sej12_leaderboards')->insert([
                'id_student' => Auth::user()->id,
                'id_level' => 2,
                'ranked_point' => $this->getEasy(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        } else if ($request->id_level == 3) {

            // Leaderboard::create([
            //     'id_student' => Auth::user()->id,
            //     'id_level' => 3,
            //     'ranked_point' => $this->getHard()
            // ]);

            DB::table('sej12_leaderboards')->insert([
                'id_student' => Auth::user()->id,
                'id_level' => 3,
                'ranked_point' => $this->getHard(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        } else {
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    //* Simpan perolehan skor Level Easy ke Playing History & akumulasi ke Leaderboard
    public function getEasy()
    {
        $user = Student::find(Auth::user()->id);

        $playingHistory = DB::table('sej12_playing_history')
            ->where('id_student', $user)
            ->where('id_level', 2)->get();

        $count = 0;
        foreach ($playingHistory as $ph) {
            $count += $ph->skor;
        }
        return $count;

        // return view('leaderboard', compact('count'));
    }

    //* Simpan perolehan skor Level Hard ke Playing History & akumulasi ke Leaderboard
    public function getHard()
    {
        $user = Student::find(Auth::user()->id);
        
        $playingHistory = DB::table('sej12_playing_history')
            ->where('id_student', $user)
            ->where('id_level', 3)->get();

        $count = 0;
        foreach ($playingHistory as $ph) {
            $count += $ph->skor;
        }
        return $count;

        // return view('leaderboard', compact('count'));
    }
}
