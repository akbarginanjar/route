<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function pesanan() 
    {
        $data = Pesanan::all();
        return view('akbar/pesanan', compact('data'));
    }
}
