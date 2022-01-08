<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\LogApps;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Auth\InternetProtocolAddressController;

//* Controller untuk melakukan CRUD yang hanya bisa diakses oleh Admin.

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
        $levels = Level::all();

        return view('admin.question', compact('questions', 'levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questionCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pertanyaan_path_gambar' => 'image|mimes:jpg,jpeg,png,svg,gif|file'
        ]);

        Question::create([
            'id_level' => $request->id_level,
            'pertanyaan_kalimat' => $request->pertanyaan_kalimat,
            'pertanyaan_path_gambar' => $request->pertanyaan_path_gambar != null ? $request->file('pertanyaan_path_gambar')->store('pertanyaan_path_gambar') : null,
            'kunci_jawaban' => $request->kunci_jawaban
        ]);

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Auth::user()->id,
            "log_table" => "sej12_question",
            "log_path" => "QuestionController@store",
            "log_desc" => "Create New Question",
            "log_ip" => $ip->getIPAddress()
        ]);

        return redirect(url('admin/profile/question'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Auth::user()->id,
            "log_table" => "sej12_question",
            "log_path" => "QuestionController@show",
            "log_desc" => "Show Details of id_question: " . $id,
            "log_ip" => $ip->getIPAddress()
        ]);

        return view('admin.questionView', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::findOrFail($id);
        $levels = Level::all();

        return view('admin.questionEdit', compact('questions', 'levels'));
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
        $this->validate($request, [
            'pertanyaan_path_gambar' => 'image|mimes:jpg,jpeg,png,svg,gif|file'
        ]);

        $questions = Question::findOrFail($id);

        if ($request->file('pertanyaan_path_gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
        }

        $questions->update([
            'id_level' => $request->id_level,
            'pertanyaan_kalimat' => $request->pertanyaan_kalimat,
            'pertanyaan_path_gambar' => $request->pertanyaan_path_gambar != null ? $request->file('pertanyaan_path_gambar')->store('pertanyaan_path_gambar') : null,
            'kunci_jawaban' => $request->kunci_jawaban
        ]);

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Auth::user()->id,
            "log_table" => "sej12_question",
            "log_path" => "QuestionController@update",
            "log_desc" => "Update id_question: " . $id,
            "log_ip" => $ip->getIPAddress()
        ]);

        return redirect(url('admin/profile/question'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questions = Question::findOrFail($id);

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Auth::user()->id,
            "log_table" => "sej12_question",
            "log_path" => "QuestionController@destroy",
            "log_desc" => "Delete id_question: " . $id,
            "log_ip" => $ip->getIPAddress()
        ]);

        $questions->delete();

        if ($questions->pertanyaan_path_gambar) {
            Storage::delete($questions->pertanyaan_path_gambar);
        }

        return redirect(url('admin/profile/question'));
    }
}
