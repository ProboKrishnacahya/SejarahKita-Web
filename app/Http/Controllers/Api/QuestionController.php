<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return ['questions' => QuestionResource::collection($questions)];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Question::findOrFail($id);
        return ['questions' => QuestionResource::collection($questions)];
    }

    //* Redirect ke /countdown/{level} kemudian ke playing-game/{level}
    // public function countdown($level)
    // {
    //     return view('countdown', compact('level'));
    // }

    //* Inisialisasi Countdown
    public function playingGame($level)
    {
        $match = [
            'casual' => 1,
            'easy' => 2,
            'hard' => 3,
        ];

        $temp = array();
        $getSoal = Question::where('id_level', $match[$level])->get()->random(1);
        $soal = $getSoal[0];
        array_push($temp, $soal);

        //* Inisialisasi Session
        $data = [
            'level' => $level,
            'answeredQuestion' => [],
            'wrongAnswer' => 0
        ];
        array_push($temp, $data);

        Session::put('game', $data);

        return ['getSoal' => $temp];
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

            $result = [
                'message' => $this->messageResult($soalSalah, $soalDikerjakan, $idLevel),
                'skor' => $this->isRanked($idLevel) ? $scoreRanked : $scoreCasual,
                'level' => $data['level']
            ];

            Session::forget('game');

            return response([
                'message' => 'checkAnswer is working.'
            ]);
        }

        Session::forget('game');
        Session::put('game', $data);

        $getSoal = Question::where('id_level', $match[$data['level']])->whereNotIn('id_question', $data['answeredQuestion'])->get()->random(1);
        $soal = $getSoal[0];
        $level = $data['level'];

        // return response([
        //     'message' => 'checkAnswer is working.'
        // ]);
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
        //? Game Over - Easy Match
        if ($soalSalah >= 5 && $level == 2) {
            return true;
            //? Game Over - Hard Match
        } else if ($soalSalah >= 3 && $level == 3) {
            return true;
            //? Permainan Selesai - Ranked Match
        } else if ($soalDikerjakan == 20 && ($level == 2 || $level == 3)) {
            return true;
            //? Permainan Selesai - Casual Match
        } else if ($soalDikerjakan == 10 && $level == 1) {
            return true;
        }
        return false;
    }

    private function messageResult($soalSalah, $soalDikerjakan, $level)
    {
        //? Game Over - Easy Match
        if ($soalSalah >= 5 && $level == 2) {
            return 'Game Over';
            //? Game Over - Hard Match
        } else if ($soalSalah >= 3 && $level == 3) {
            return 'Game Over';
            //? Permainan Selesai - Ranked Match
        } else if ($soalDikerjakan == 20 && ($level == 2 || $level == 3)) {
            return 'Permainan Selesai';
            //? Permainan Selesai - Casual Match
        } else if ($soalDikerjakan == 10 && $level == 1) {
            return 'Permainan Selesai';
        }
        return false;
    }

    public function exitGame()
    {
        Session::forget('game');

        return redirect(url('game'));

        return response([
            'message' => 'exitGame is working.'
        ]);
    }
}
