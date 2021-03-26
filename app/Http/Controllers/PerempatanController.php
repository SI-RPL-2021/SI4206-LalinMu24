<?php

namespace App\Http\Controllers;

use App\Perempatan;
use Illuminate\Http\Request;

class PerempatanController extends Controller
{
    public function indexPeta()
    {
        $perempatans = Perempatan::all();
        // dd($perempatans);
        return view('polantas.polantas-peta', compact('perempatans'));
    }

    public function indexLampu()
    {
        $lampus = Perempatan::all();
        return view('polantas.polantas-lampu', compact('lampus'));
    }
}
