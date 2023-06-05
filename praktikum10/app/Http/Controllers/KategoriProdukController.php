<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;


class KategoriProdukController extends Controller
{
    public function index()
    {
       // Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
       $kategoriproduk = KategoriProduk::select('kategori_produk.nama')
       ->get();

        //kirim ke view
        return view('admin.produk.kategori', compact('kategoriproduk'));
    }
}
