<?php

use App\Models\item;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Fungsi untuk menampilkan semua barang
    public function index()
    {
        $barangs = item::all();
        return view('item.index', compact('barangs'));
    }

    // Fungsi untuk menampilkan detail barang
    public function show(item $barang)
    {
        return view('item.show', compact('barang'));
    }

    // Fungsi untuk menambahkan barang ke keranjang
    public function addToCart(item $barang)
    {
        // Logika untuk menambahkan barang ke keranjang
    }
}

