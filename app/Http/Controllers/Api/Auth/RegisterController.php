<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|unique:students',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'required',
            'name' => 'required',
            'school' => '',
            'city' => '',
            'birthyear' => '',
        ]);

        $user = $this->newUser($request->all());

        if (empty($user)) {
            return response([
                'message' => 'Failed to create account'
            ]);
        } else {
            return response([
                'message' => 'Success to create account'
            ]);
        }
    }

    private function newUser(array $data) {
        return Student::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'name' => $data['name'],
            'role' => 'admin',
            'created_at' => \Carbon\Carbon::now(),
        ]);

    }
    
}
