<?php

namespace App\Http\Controllers;


use App\Models\item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   
    public function index()
    {
       $item = item::all();

        return view('dashboard.index', compact('item'));

        Route::post('/listbelanja', function (Request $request) {
            $itemId = $request->input('itemId');
        
            // Ambil item dari database berdasarkan ID
            $item = Item::find($itemId);
        
            // Lakukan logika untuk menambahkan item ke daftar belanja, seperti menyimpan ke sesi atau database
        
            // Contoh: Simpan ke sesi
            $shoppingList = session('shoppingList', []);
            $shoppingList[] = $item;
            session(['shoppingList' => $shoppingList]);
        
            return response()->json(['message' => 'Item berhasil ditambahkan ke daftar belanja']);
        });
    }

    

    // public function index()
    // {
    //     $item = Barang::all();
    //     return view('dashboard', compact('barangs'));
    // }
}




