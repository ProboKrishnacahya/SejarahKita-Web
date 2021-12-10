<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_level';

    protected $fillable = [
        'jenis_level'
    ];

    public function playingHistories()
    {
        return $this->hasMany(PlayingHistory::class, 'id_level', 'id_level');
    }
}
