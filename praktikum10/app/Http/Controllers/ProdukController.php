<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
//panggil model produk


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
       $produk = Produk::join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
       ->select('produk.*', 'kategori_produk.nama as nama_kategori')
       ->get();

        //kirim ke view
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::all();

        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Membuat tambah data / Validasi tambah data 
        $produk = new Produk;
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        //simoen data nya
        $produk->save();
        //tampilin view produk-
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::where('id', $id)->get();

        return view('admin.produk.edit', compact('kategori_produk', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //Fitur edit data / Validasi ediut data 
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        //simoen data nya
        $produk->save();
        //tampilin view produk-
        return redirect('produk');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Fitur Delete Data
        $produk = Produk::find($id);
        $produk->delete();

        //Balikin ke halaman produk
        return redirect('produk')->with('success', 'Produk berhasil dihapus');
    }
}
