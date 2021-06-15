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
    
                    return redirect('/admin-profile/'.$id);
                }
    
            }else{
                $updateAdmin = User::where('id', $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
    
                if($updateAdmin){
                    Toastr::success('Berhasil update profile', 'Info');
    
                    return redirect('/admin-profile/'.$id);
                }
            }
        }else{

            $image = time().'.'.$request->image->extension();

            $request->image->move(public_path('img/profile/admin'), $image);

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
    
                    return redirect('/admin-profile/'.$id);
                }
    
            }else{
                $updateAdmin = User::where('id', $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'image' => $image,
                ]);
    
                if($updateAdmin){
                    Toastr::success('Berhasil update profile', 'Info');
    
                    return redirect('/admin-profile/'.$id);
                }
            }
        }
    }
}
