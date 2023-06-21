<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function halamanprofil(){
        return view('profil.profil');
    }
}
