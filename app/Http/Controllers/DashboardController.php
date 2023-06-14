<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
   
    public function index()
    {
        return view('Dashboard.index');
    }

    

    // public function index()
    // {
    //     $item = Barang::all();
    //     return view('dashboard', compact('barangs'));
    // }
}




