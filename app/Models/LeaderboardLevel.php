<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaderboardLevel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_leaderboard_level';

    protected $fillable = [
        'id_leaderboard',
        'id_level'
    ];
}
