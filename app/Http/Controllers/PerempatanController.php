<?php

namespace App\Http\Controllers;

use App\Perempatan;
use Illuminate\Http\Request;

class PerempatanController extends Controller
{
    public function index()
    {
        $perempatans = Perempatan::all();
        // dd($perempatans);
        return view('polantas.polantas-peta', compact('perempatans'));
    }

    public function detail($id)
    {
        $perempatan = Perempatan::find($id);

        // dd($perempatan->lengans);

        return view('polantas.detail-peta', compact('perempatan'));
    }
}
