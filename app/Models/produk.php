<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id_barang";
    protected $fillable = [
        'nama_barang','harga','stok','berat','deskripsi','review','variasi'
    ];
}
