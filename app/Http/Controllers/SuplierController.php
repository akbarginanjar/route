<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;

class SuplierController extends Controller
{
    public function suplier() 
    {
        $data = Suplier::all();
        return view('akbar/suplier', compact('data'));
    }
}
