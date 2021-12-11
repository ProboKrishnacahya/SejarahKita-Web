<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_question';

    protected $fillable = [
        'id_level',
        'pertanyaan_kalimat',
        'pertanyaan_path_gambar',
        'kunci_jawaban'
    ];

    public function levels()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id_level');
    }
}
