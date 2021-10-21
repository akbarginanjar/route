<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function pembeli() 
    {
        $data = Pembeli::all();
        return view('akbar/pembeli', compact('data'));
    }
}
