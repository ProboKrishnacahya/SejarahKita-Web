<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayingHistory extends Model
{
    use HasFactory;

    protected $table = 'sej12_playing_history';
    
    protected $primaryKey = 'id_playing_history';

    protected $fillable = [
        'id_student',
        'id_level',
        'skor'
    ];

    public function students()
    {
        return $this->belongsTo(Student::class, 'id_student', 'id');
    }

    public function levels()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id_level');
    }
}
