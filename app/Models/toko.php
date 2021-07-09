<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    protected $table = "toko";
    protected $primaryKey = "id";
    protected $fillable = [
        'email','password','nama_toko','nama_pemilik','no_telp','alamat_toko'
    ];
}
