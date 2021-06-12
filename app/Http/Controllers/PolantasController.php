<?php

namespace App\Http\Controllers;

use App\Perempatan;
use App\User as AppUser;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PolantasController extends Controller
{
    public function index()
    {
        $perempatans = Perempatan::all();

        return view('polantas.polantas-home', compact('perempatans'));
    }

    public function storeUser(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required',
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            "created_at" => Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);

        Toastr::success('Berhasil tambah User', 'Info');

        return redirect('/admin-users');
    }

    public function userPolantas()
    {
        $users = User::where('role_id', 2)->get();

        return view('admin.admin-users', compact('users'));
    }

    public function destroyUser($id)
    {
        User::find($id)->delete();

        Toastr::success('Berhasil delete user', 'Info');

        return redirect('/admin-users');
    }

    public function editUser($id)
    {
        $user = User::find($id);

        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        Toastr::success('Berhasil update User', 'Info');

        return redirect('/admin-users');
    }
}
