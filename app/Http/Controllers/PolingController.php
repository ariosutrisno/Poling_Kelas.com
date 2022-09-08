<?php

namespace App\Http\Controllers;

use App\Poling;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PolingController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('poling-user');
    // }
    public function index()
    {
        $poling_user = Poling::with('user')->get();
        return view('poling.poling');
    }
    public function save_poling(Request $request)
    {
        $user = Auth::id();
        // Poling::insert([
        //     // 'user_id' => $user,
        //     'menu' => $request->bar_one_hidden,
        //     // 'persentase' => $request->persentase,
        //     // 'pilih' => $request->pilih
        // ]);
        return response()->json([
            'message' => true,
            'save' => 'data berhasil disimpan'
        ], 200);
    }
    public function show()
    {
        return view('poling.polingshow');
    }
}
