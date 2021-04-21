<?php

namespace App\Http\Controllers;

use App\Lengan;
use App\Perempatan;
use Illuminate\Http\Request;

class LampuController extends Controller
{
    public function index()
    {
        $lampus = Perempatan::all();
        return view('polantas.polantas-lampu', compact('lampus'));
    }

    public function edit($id)
    {
        $lampu = Perempatan::find($id);

        return view('polantas.edit-lampu', compact('lampu'));
    }
}
