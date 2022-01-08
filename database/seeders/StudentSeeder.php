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
        //* Admin account
        DB::table('students')->insert([
            'email' => 'vanthony@student.ciputra.ac.id',
            'password' => Hash::make('va123456'),
            'username' => 'vanthony010',
            'name' => 'Vanness Zhong Anthony',
            'school' => '',
            'city' => '',
            'birthyear' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('students')->insert([
            'email' => 'narianto@student.ciputra.ac.id',
            'password' => Hash::make('nathabel2762'),
            'username' => 'narianto029',
            'name' => 'Nathanael Abel Arianto',
            'school' => '',
            'city' => '',
            'birthyear' => 0,
            'created_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('students')->insert([
            'email' => 'pkrishnacahya@student.ciputra.ac.id',
            'password' => Hash::make('pk025758'),
            'username' => 'pkrishnacahya039',
            'name' => 'Probo Krishnacahya',
            'school' => '',
            'city' => '',
            'birthyear' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('students')->insert([
            'email' => 'mchandra05@student.ciputra.ac.id',
            'password' => Hash::make('mc112233'),
            'username' => 'mchandra052',
            'name' => 'Michael Chandra',
            'school' => '',
            'city' => '',
            'birthyear' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        //* User account
        DB::table('students')->insert([
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('12345678'),
            'username' => 'johndoe',
            'name' => 'John Doe',
            'school' => 'Ciputra',
            'city' => 'Surabaya',
            'birthyear' => 2004,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('students')->insert([
            'email' => 'willsmith@gmail.com',
            'password' => Hash::make('12345678'),
            'username' => 'willsmith',
            'name' => 'Will Smith',
            'school' => 'Citra Berkat',
            'city' => 'Surabaya',
            'birthyear' => 2004,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('students')->insert([
            'email' => 'jamesappleseed@gmail.com',
            'password' => Hash::make('12345678'),
            'username' => 'jamesapple',
            'name' => 'James Appleseed',
            'school' => 'Citra Kasih',
            'city' => 'Surabaya',
            'birthyear' => 2005,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
