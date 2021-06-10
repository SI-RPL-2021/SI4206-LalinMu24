<?php

namespace App\Http\Controllers;

use App\Lengan;
use App\Perempatan;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LampuController extends Controller
{
    public function index()
    {
        $lampus = Perempatan::all();
        return view('polantas.polantas-lampu', compact('lampus'));
    }

    public function detailLampu($id)
    {
        $lampu = Perempatan::find($id);

        return view('polantas.detail-lampu', compact('lampu'));
    }

    public function editLampu($lengan_id)
    {
        $lengan = Lengan::find($lengan_id);

        return view('polantas.update-lampu', compact('lengan'));
    }

    public function update($perempatan_id, Request $request)
    {

        $validateData = $request->validate([
            'merah' => 'required|numeric',
            'kuning' => 'required|numeric',
            'hijau' => 'required|numeric'
        ]);

        Lengan::where('perempatan_id', $perempatan_id)->update([
            'merah' => $request->merah,
            'kuning' => $request->kuning,
            'hijau' => $request->hijau
        ]);
        
        Toastr::success('Berhasil update data lengan', 'Title');

        return redirect('/polantas-lampu');


    }

    public function destroy($perempatan_id)
    {
        Lengan::where('perempatan_id', $perempatan_id)->delete();

        Toastr::success('Berhasil hapus Lengan', 'Info');

        return redirect('/admin-peta');
    }

}
