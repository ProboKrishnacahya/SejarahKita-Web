<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayingHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sej12_playing_history')->insert([
            'id_playing_history' => 1,
            'id_student' => 5,
            'id_level' => 1,
            'skor' => 100,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_playing_history' => 2,
            'id_student' => 5,
            'id_level' => 2,
            'skor' => 92,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
