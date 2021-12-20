<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_game = "active";

        return view('game', compact('active_game'));
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

    //* Redirect ke /countdown/{level} kemudian ke playing-game/{level}
    public function countdown($level)
    {
        return view('countdown', compact('level'));
    }

    //* Inisialisasi Countdown
    public function playingGame($level)
    {
        $match = [
            'casual' => 1,
            'easy' => 2,
            'hard' => 3,
        ];

        $getSoal = Question::where('id_level', $match[$level])->get()->random(1);
        $soal = $getSoal[0];

        //* Inisialisasi Session
        $data = [
            'level' => $level,
            'answeredQuestion' => [],
            'wrongAnswer' => 0
        ];
        Session::put('game', $data);

        return view('playingGame', compact('soal', 'level'));
    }

    public function checkAnswer(Request $request)
    {
        $match = [
            'casual' => 1,
            'easy' => 2,
            'hard' => 3,
        ];

        $jawaban = $request->input_jawaban;
        $id = $request->id;
        $data = Session::get('game');
        $idLevel = $match[$data['level']];

        $soal = Question::find($id);
        if (strtoupper($jawaban) == strtoupper($soal->kunci_jawaban)) {
            array_push($data['answeredQuestion'], $id);
        } else {
            array_push($data['answeredQuestion'], $id);
            $data['wrongAnswer']++;
        }

        $soalDikerjakan = sizeof($data['answeredQuestion']);
        $soalSalah = $data['wrongAnswer'];
        $scoreRanked = ($soalDikerjakan - $soalSalah) * 5;
        $scoreCasual = ($soalDikerjakan - $soalSalah) * 10;

        if ($this->isGameOver($soalSalah, $soalDikerjakan, $idLevel)) {
            DB::table('sej12_playing_history')->insert([
                'id_student' => Auth::user()->id,
                'id_level' => $idLevel,
                'skor' => $this->isRanked($idLevel) ? $scoreRanked : $scoreCasual,
                'created_at' => Carbon::now()
            ]);
            Session::forget('game');

            return redirect(url('game'));
        }

        Session::forget('game');
        Session::put('game', $data);

        $getSoal = Question::where('id_level', $match[$data['level']])->whereNotIn('id_question', $data['answeredQuestion'])->get()->random(1);
        $soal = $getSoal[0];
        $level = $data['level'];

        return view('playingGame', compact('soal', 'level'));
    }

    private function isRanked($level)
    {
        if ($level == 2 || $level == 3) {
            return true;
        } else {
            return false;
        }
    }

    private function isGameOver($soalSalah, $soalDikerjakan, $level)
    {
        //? Game Over Easy Match
        if ($soalSalah >= 5 && $level == 2) {
            return true;
            //? Game Over Hard Match
        } else if ($soalSalah >= 3 && $level == 3) {
            return true;
            //? Win Ranked Match
        } else if ($soalDikerjakan == 20 && ($level == 3  || $level == 2)) {
            return true;
            //? Win Casual Match
        } else if ($soalDikerjakan == 10 && $level == 1) {
            return true;
        }
        return false;
    }

    public function exitGame()
    {
        Session::forget('game');
        
        return redirect(url('game'));
    }
}
