<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;

    protected $table = 'sej12_leaderboards';

    protected $primaryKey = 'id_leaderboard';

    protected $fillable = [
        'id_student',
        'id_level',
        'ranked_point'
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
