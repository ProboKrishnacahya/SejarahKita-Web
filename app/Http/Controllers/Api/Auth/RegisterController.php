<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        dd($request->all());
        $this->validate($request, [
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:8|max:20|confirmed',
            'username' => 'required|string|min:4|max:20',
            'name' => 'required|string|max:255',
            'school' => '-',
            'city' => '-',
            'birthyear' => '-'
        ]);

        $user = $this->newUser($request->all());

        if (empty($user)) {
            return response([
                'message' => 'Failed to create account. Please try again later.',
            ]);
        } else {
            return response([
                'message' => 'Success to create account.'
            ]);
        }
    }

    private function newUser(array $data)
    {
        return Student::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'name' => $data['name'],
            'school' => $data['school'],
            'city' => $data['city'],
            'birthyear' => $data['birthyear'],
            'role' => 'user',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
