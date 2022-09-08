<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login()
    {
        return view('poling.Auth_Poling.login');
    }
    public function loginRequest(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ],
            [
                'email.required' => 'Isikan Email Anda',
                'email.email' => 'Isikan Dengan Alamat Email',
                'password.required' => 'Masukkan Password Anda',
                'password.min' => 'Masukkan Pasword Anda Minimal 8'
            ]
        );
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            # code...
            return response()->json([
                'success' => true,
                'message' => 'berhasil login',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Gagal'
            ], 401);
        }
    }
}
