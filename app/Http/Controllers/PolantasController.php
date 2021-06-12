<?php

namespace App\Http\Controllers;

use App\Perempatan;
use App\User as AppUser;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class PolantasController extends Controller
{
    public function index()
    {
        $perempatans = Perempatan::all();

        return view('polantas.polantas-home', compact('perempatans'));
    }

    public function userPolantas()
    {
        $users = User::where('role_id', 2)->get();


        Toastr::success('Berhasil tambah polantas', 'Info');

        return view('admin.admin-users', compact('users'));
    }
}
