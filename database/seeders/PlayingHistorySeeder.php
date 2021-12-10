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
            'id_student' => 9,
            'id_level' => 2,
            'skor' => 100,
            'created_at' => \Carbon\Carbon::now(),
            'submitted_at' => \Carbon\Carbon::now()
        ]);
    }
}
