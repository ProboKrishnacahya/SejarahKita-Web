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
            'jenis_level' => 'Casual',
            'created_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_levels')->insert([
            'jenis_level' => 'Easy',
            'created_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_levels')->insert([
            'jenis_level' => 'Hard',
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
