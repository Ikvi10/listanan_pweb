<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listbelanjaController extends Controller
{
    public function halamanlist(){
        return view('listbelanja.list');
    }
}
