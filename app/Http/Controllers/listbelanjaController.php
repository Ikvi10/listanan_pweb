<?php

namespace App\Http\Controllers;

use App\Models\lists;
use Illuminate\Http\Request;

class listbelanjaController extends Controller
{
    public function halamanlist(){
        $data = lists::all();
        return view('listbelanja.list', compact('data'));
    }

    
    // public function haldata()
    // {
    //     $data = items::all();

    //     return view('listbelanja.list', compact('data'));
    // }


    

  

}
