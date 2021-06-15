<?php

namespace App\Http\Controllers;

use App\Perempatan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $time = Carbon::now();

        $date = $time->format('Y-m-d');

        $perempatans = Perempatan::all();

        return view('index',compact('date','perempatans'));
    }
    
    public function about()
    {
        $time = Carbon::now();

        $date = $time->format('Y-m-d');

        return view('about',compact('date'));
    }

    public function detailPerempatan($id)
    {
        $perempatan = Perempatan::find($id);

        $time = Carbon::now();

        $date = $time->format('Y-m-d');

        return view('detail-perempatan',compact('perempatan','date'));
    }
}
