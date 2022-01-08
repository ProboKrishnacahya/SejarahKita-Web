<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sej12_roles')->insert([
            'id_student' => 1,
            'role' => 'admin',
            'first_login' => \Carbon\Carbon::now(),
            'last_login' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_roles')->insert([
            'id_student' => 2,
            'role' => 'admin',
            'first_login' => \Carbon\Carbon::now(),
            'last_login' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_roles')->insert([
            'id_student' => 3,
            'role' => 'admin',
            'first_login' => \Carbon\Carbon::now(),
            'last_login' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_roles')->insert([
            'id_student' => 4,
            'role' => 'admin',
            'first_login' => \Carbon\Carbon::now(),
            'last_login' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_roles')->insert([
            'id_student' => 5,
            'role' => 'user',
            'first_login' => \Carbon\Carbon::now(),
            'last_login' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_roles')->insert([
            'id_student' => 6,
            'role' => 'user',
            'first_login' => \Carbon\Carbon::now(),
            'last_login' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('sej12_roles')->insert([
            'id_student' => 7,
            'role' => 'user',
            'first_login' => \Carbon\Carbon::now(),
            'last_login' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
