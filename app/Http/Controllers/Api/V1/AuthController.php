<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('user_token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response,201);
    }
    public function login(LoginRequest $request)
    {
        $user = User::where('email',$request->email)->first();
        if (!$user->email || !Hash::check($request->password,$user->password))
        {
            return response()->json([
                'error' => 'The Provided Credentials are incorrect'
            ],422);
        }
        $token = $user->createToken('user_token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response,201);
    }
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return [
            'message' => 'User Logged out'
        ];
    }
}
