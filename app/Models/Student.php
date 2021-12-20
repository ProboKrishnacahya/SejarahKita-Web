<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = 'students';

    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'password',
        'username',
        'name',
        'school',
        'city',
        'birthyear',
        'role',
        'is_login',
        'is_active'
    ];

    public function playingHistories()
    {
        return $this->hasMany(PlayingHistory::class, 'id_student', 'id');
    }

    public function leaderboards()
    {
        return $this->hasMany(Leaderboard::class, 'id_student', 'id');
    }

    public function students()
    {
        return $this->hasOne(LogApps::class, 'id_user', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $phidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //* Simpan perolehan skor Level Easy ke Playing History & akumulasi ke Leaderboard
    public function getEasyRankedPoint()
    {
        $playingHistory = DB::table('sej12_playing_history')
            ->where('id_student', $this->id)
            ->where('id_level', 2)->get();

        $count = 0;
        foreach ($playingHistory as $ph) {
            $count += $ph->skor;
        }
        return $count;
    }

    //* Simpan perolehan skor Level Hard ke Playing History & akumulasi ke Leaderboard
    public function getHardRankedPoint()
    {
        $playingHistory = DB::table('sej12_playing_history')
            ->where('id_student', $this->id)
            ->where('id_level', 3)->get();

        $count = 0;
        foreach ($playingHistory as $ph) {
            $count += $ph->skor;
        }
        return $count;
    }
}
