<?php

namespace App\Http\Controllers;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function indexProfile($id)
    {
        $admin = User::find($id);

        return view('admin.admin-profile', compact('admin'));
    }

    public function editProfile($id)
    {
        $admin =  User::find($id);

        return view('admin.admin-edit-profile', compact('admin'));
    }

    public function updateProfile(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $extension = $request->image->extension();
        $image = $request->image+'.'+$extension;
        $request->move(public_path('img/profile/'), $image);

        $checkPassword = $request->password;

        if($checkPassword != null){
            $updateAdmin = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'image' => $image
            ]);

            if($updateAdmin){
                Toastr::success('Berhasil update profile', 'Info');

                return redirect('/admin-profile');
            }

        }else{
            $updateAdmin = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $image,
            ]);

            if($updateAdmin){
                Toastr::success('Berhasil update profile', 'Info');

                return redirect('/admin-profile');
            }
        }
    }
}
