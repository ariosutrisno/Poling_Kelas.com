<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthRegisterController extends Controller
{
    use RegistersUsers;
    public function register()
    {
        return view('poling.Auth_Poling.register');
    }
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function registerRequest(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required|min:8',
                'password_confirm' => 'required|min:8',
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_user' => 'required|numeric|min:12',
            ],
            [
                'first_name.required' => 'Isi Nama Depan',
                'last_name.required' => 'Isi Nama Belakang',
                'phone_user.required' => 'Tuliskan Nomor Telpon Anda',
                'email.required' => 'Isikan Email Anda',
                'email.email' => 'Masukan alamat Email dengan @',
                'password.required' => 'Masukkan Password Anda',
                'password.min' => 'Masukkan Password Anda Minimal 8',
                'password_confirm.required' => 'Ulangi Password Anda',
                'password_confirm.min' => 'Masukkan Password Anda Minimal 8',
            ]
        );
        if ($request === false) {
            # code...
            return response()->json([
                'success' => false,
                'message' => 'Register Gagal',
            ]);
        } else {
            # code...
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'password_confirm' => Hash::make($request->password_confirm),
                'name' => $request->first_name,
                'name_last' => $request->last_name,
                'phone_user' => $request->phone_user,
            ]);
            $this->guard()->login($user);
            return response()->json([
                'success' => true,
                'message' => 'Register Berhasil'
            ]);
        }
    }
}
