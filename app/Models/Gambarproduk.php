<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambarproduk extends Model
{
    protected $table = "Gambarproduks";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama_gambar','gambar'
    ];
}
