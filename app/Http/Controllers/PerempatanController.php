<?php

namespace App\Http\Controllers;

use App\Lengan;
use App\Perempatan;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
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

    public function adminIndex()
    {
        $perempatan = Perempatan::all();

        $count = Perempatan::count();

        $polantas = User::where('role_id', 2)->count();

        return view('admin.admin-home', compact('perempatan','count','polantas'));
    }

    public function adminPeta()
    {
        $perempatan = Perempatan::all();

        $lengan = Lengan::all();

        return view('admin.admin-peta', compact('perempatan','lengan'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'src' => 'required',
            "youtube" => 'required'
        ]);

        Perempatan::insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'src' => $request->src,
            'youtube' => $request->youtube
        ]);

        Toastr::success('Berhasil tambah perempatan', 'Info');

        return redirect('/admin-peta');

    }

    public function destroy($id)
    {
        $perempatan = Perempatan::where('id', $id);

        // $perempatan->lengans()->delete();
        
        $perempatan->delete();

        Toastr::success('Berhasil hapus perempatan', 'Info');

        return redirect('/admin-peta');
    }

    public function edit($id)
    {
        $peta = Perempatan::find($id);

        return view('admin.edit-peta', compact('peta'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'src' => 'required',
            "youtube" => 'required'
        ]);

        Perempatan::where('id', $id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'src' => $request->src,
            'youtube' => $request->youtube
        ]);

        Toastr::success('Berhasil update perempatan', 'Info');

        return redirect('/admin-peta');
    }

    public function editLengan($id)
    {
        $peta = Perempatan::find($id);

        return view('admin.tambah-lengan', compact('peta'));
    }

    public function storeLengan(Request $request)
    {   
        $validateData = $request->validate([
            'lengan' => 'required|numeric'
        ]);

        Lengan::insert([
            'perempatan_id' => $request->perempatan_id,
            'lengan' => $request->lengan
        ]);

        Toastr::success('Berhasil tambah lengan', 'Info');

        return redirect('/admin-peta');

    }

}
