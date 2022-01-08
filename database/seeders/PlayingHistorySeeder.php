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
            'id_student' => 5,
            'id_level' => 1,
            'skor' => 100,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_student' => 5,
            'id_level' => 2,
            'skor' => 90,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_student' => 5,
            'id_level' => 3,
            'skor' => 85,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_student' => 6,
            'id_level' => 1,
            'skor' => 60,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_student' => 6,
            'id_level' => 2,
            'skor' => 85,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_student' => 6,
            'id_level' => 3,
            'skor' => 90,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_student' => 7,
            'id_level' => 1,
            'skor' => 80,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_student' => 7,
            'id_level' => 2,
            'skor' => 95,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_playing_history')->insert([
            'id_student' => 7,
            'id_level' => 3,
            'skor' => 75,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
