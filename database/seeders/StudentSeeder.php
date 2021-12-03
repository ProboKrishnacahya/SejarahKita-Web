<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin account
        DB::table('students')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'username' => 'admin',
            'name' => 'Admin',
            'school' => '',
            'city' => '',
            'birthyear' => '',
            'role' => 'admin',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);

        // User account
        DB::table('students')->insert([
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'username' => 'user',
            'name' => 'User',
            'school' => 'Ciputra School',
            'city' => 'Surabaya',
            'birthyear' => '2002',
            'role' => 'user',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        
    }
}
