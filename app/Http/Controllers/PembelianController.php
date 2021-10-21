<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function pembelian() 
    {
        $data = Pembelian::all();
        return view('akbar/pembelian', compact('data'));
    }
}
