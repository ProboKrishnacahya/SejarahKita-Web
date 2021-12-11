<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_leaderboard';

    protected $fillable = [
        'id_student',
        'ranked_point'
    ];

    public function students()
    {
        return $this->belongsTo(Student::class, 'id_student', 'id');
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'sej12_leaderboards_levels', 'id_leaderboard', 'id_level');
    }
}
