<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Login berhasil'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Username atau password salah'
        ], 401);
    }

        public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'pengguna'
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Register berhasil',
            'user' => $user
        ]);
    }
}