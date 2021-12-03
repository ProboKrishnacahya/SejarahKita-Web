<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laravel\Passport\Bridge\AccessToken;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin',
            'is_login' => '0',
            'is_active' => '1',
        ];

        $check = DB::table('students')->where('email', $request->email)->first();

        if ($check->is_active == '1') {
            if ($check->is_login == '0') {
                if (Auth::attempt($user)) {
                    $this->isLogin(Auth::id());

                    $response = Http::asForm()->post('http://sejarahkita.test/oauth/token', [
                        'grant_type' => 'password',
                        'client_id' => $this->client->id,
                        'client_secret' => $this->client->secret,
                        'username' => $request->email,
                        'password' => $request->password,
                        'scope' => '*',
                    ]);

                    return $response->json();
                } else {
                    return response([
                        'message' => 'Login Failed'
                    ]);
                }
            } else {
                return response([
                    'message' => 'Account is used'
                ]);
            }
        } else {
            return response([
                'message' => 'Account is suspended'
            ]);
        }
    }

    private function isLogin(int $id)
    {
        $user = Student::findorFail($id);
        return $user->update([
            'is_login' => '1',
        ]);
    }

    public function refresh(Request $request)
    {
        $this->validate($request, [
            'refresh_token' => 'required',
        ], [
            'refresh_token' => 'refresh token is required'
        ]);

        $response = Http::asForm()->post('http://sejarahkita.test/oauth/token', [
            'grant_type' => 'refresh_token',
            'refresh_token' => $request->refresh_token,
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'scope' => '*',
        ]);

        return $response->json();
    }

    public function logout()
    {
        /** @var \App\Models\Student $user */
        $user = Auth::user();
        $accessToken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked' => true]);

        $user->update([
            'is_login' => '0',
        ]);

        $accessToken->revoke();

        return response([
            'message' => 'Logged out',
        ]);
    }
}
