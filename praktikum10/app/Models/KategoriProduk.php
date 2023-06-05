<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    //tabel kategori
    protected $table = 'kategori_produk';

    // bikin kolom yang bisa di isi
    protected $fillable = [
        'nama'
    ];

    //relasi funsgi produk untuk relasi has many

}
