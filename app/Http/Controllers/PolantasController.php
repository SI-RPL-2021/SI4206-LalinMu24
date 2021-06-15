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

        $user = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            "created_at" => Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);

        if($user){
            Toastr::success('Berhasil tambah User', 'Info');

            return redirect('/admin-users');
        }
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

    public function profile($id)
    {
        $polantas = User::find($id);

        return view('polantas.polantas-profile', compact('polantas'));
    }

    public function editProfile($id)
    {
        $polantas = User::find($id);

        return view('polantas.polantas-edit-profile', compact('polantas'));
    }

    public function updateProfile($id, Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        
        $checkPassword = $request->password;

        if ($request->image == null)
        {
            if($checkPassword != null){
                $updateAdmin = User::where('id', $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
    
                if($updateAdmin){
                    Toastr::success('Berhasil update profile', 'Info');
    
                    return redirect('/polantas-profile/'.$id);
                }
    
            }else{
                $updateAdmin = User::where('id', $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
    
                if($updateAdmin){
                    Toastr::success('Berhasil update profile', 'Info');
    
                    return redirect('/polantas-profile/'.$id);
                }
            }
        }else{

            $image = time().'.'.$request->image->extension();

            $request->image->move(public_path('img/profile/polantas'), $image);

            $request->image = $image;

            if($checkPassword != null){
                $updateAdmin = User::where('id', $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'image' => $image
                ]);
    
                if($updateAdmin){
                    Toastr::success('Berhasil update profile', 'Info');
    
                    return redirect('/polantas-profile/'.$id);
                }
    
            }else{
                $updateAdmin = User::where('id', $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'image' => $image,
                ]);
    
                if($updateAdmin){
                    Toastr::success('Berhasil update profile', 'Info');
    
                    return redirect('/polantas-profile/'.$id);
                }
            }
        }
    }
}
