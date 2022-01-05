<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\LogApps;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\InternetProtocolAddressController;
use App\Models\Role;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
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
        $student = Student::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'name' => $data['name'],
            'school' => $data['school'],
            'city' => $data['city'],
            'birthyear' => $data['birthyear'],
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        Role::create([
            'id_student' => Student::firstWhere('email', $data['email'])['id'],
        ]);

        $ip = new InternetProtocolAddressController;
        LogApps::create([
            "id_user" => Student::firstWhere('email', $data['email'])['id'],
            "log_table" => "students",
            "log_path" => "RegisterController@create",
            "log_desc" => "Register New Student",
            "log_ip" => $ip->getIPAddress()
        ]);

        return $student;
    }
}
