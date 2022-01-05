<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public static function getLeaderboardEasy()
    {
        //Select nama tabel.nama kolom, SUM -> akumulasi jumlah skor , AS agar menjadi ranked_point

        //FROM nama tabel (menggabungkan leaderboard dan student)

        // WHERE memisahkan level (id-level easy = 2), (id-level hard = 3)

        // ORDER BY untuk sorting (DESC = Besar ke kecil , ASC = kecil ke besar)
        $leaderboards = DB::select(
        'SELECT students.username, sej12_leaderboards.id_level, SUM(sej12_leaderboards.ranked_point) AS ranked_point
        FROM sej12_leaderboards , students
        WHERE sej12_leaderboards.id_level = 2 AND students.id = sej12_leaderboards.id_student
        GROUP BY students.username, sej12_leaderboards.id_level
        ORDER BY ranked_point DESC'
        );

        return $leaderboards;
    }

    public static function getLeaderboardHard()
    {
        $leaderboards = DB::select(
        'SELECT students.username, sej12_leaderboards.id_level, SUM(sej12_leaderboards.ranked_point) AS ranked_point
        FROM sej12_leaderboards , students
        WHERE sej12_leaderboards.id_level = 3 and students.id = sej12_leaderboards.id_student
        GROUP BY students.username, sej12_leaderboards.id_level
        ORDER BY ranked_point DESC'
        );

        return $leaderboards;
    }
}