<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([StudentSeeder::class, RoleSeeder::class, LevelSeeder::class, QuestionSeeder::class, PlayingHistorySeeder::class, LeaderboardSeeder::class]);
    }
}
