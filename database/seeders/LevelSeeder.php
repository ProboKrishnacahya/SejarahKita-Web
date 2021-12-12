<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sej12_levels')->insert([
            'id_level' => 1,
            'jenis_level' => 'Casual',
            'created_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_levels')->insert([
            'id_level' => 2,
            'jenis_level' => 'Easy',
            'created_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_levels')->insert([
            'id_level' => 3,
            'jenis_level' => 'Hard',
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
