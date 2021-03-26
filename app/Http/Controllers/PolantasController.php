<?php

namespace App\Http\Controllers;

use App\Perempatan;
use Illuminate\Http\Request;

class PolantasController extends Controller
{
    public function index()
    {
        $perempatans = Perempatan::all();

        return view('polantas.polantas-home', compact('perempatans'));
    }
}
