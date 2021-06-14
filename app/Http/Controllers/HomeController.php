<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // if ($request->user()->hasRole('polantas')) {
        //     return redirect('polantas-home');
        // }else if($request->user()->hasRole('admin')){
        //     return redirect('admin-home');
        // }else{
        //     return redirect('/');
        // }
        return view('home');
    }
}
