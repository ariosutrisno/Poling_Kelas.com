<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolingController extends Controller
{
    public function index()
    {
        return view('poling.poling');
    }
    public function show()
    {
        return view('poling.poling');
    }
}
