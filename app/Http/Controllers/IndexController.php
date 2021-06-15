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
}
