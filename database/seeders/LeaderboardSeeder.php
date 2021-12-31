<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaderboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sej12_leaderboards')->insert([
            'id_student' => 5,
            'id_level' => 2,
            'ranked_point' => 100,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_leaderboards')->insert([
            'id_student' => 7,
            'id_level' => 2,
            'ranked_point' => 95,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_leaderboards')->insert([
            'id_student' => 6,
            'id_level' => 2,
            'ranked_point' => 87,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_leaderboards')->insert([
            'id_student' => 6,
            'id_level' => 3,
            'ranked_point' => 93,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_leaderboards')->insert([
            'id_student' => 7,
            'id_level' => 3,
            'ranked_point' => 75,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_leaderboards')->insert([
            'id_student' => 5,
            'id_level' => 3,
            'ranked_point' => 71,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
