<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'sej12_levels';

    protected $primaryKey = 'id_level';

    protected $fillable = [
        'jenis_level'
    ];

    public function playingHistories()
    {
        return $this->hasMany(PlayingHistory::class, 'id_level', 'id_level');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'id_level', 'id_level');
    }

    public function leaderboards()
    {
        return $this->belongsToMany(Leaderboard::class, 'sej12_leaderboards_levels', 'id_level', 'id_leaderboard');
    }
}
