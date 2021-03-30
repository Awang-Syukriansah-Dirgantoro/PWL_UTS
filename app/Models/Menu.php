<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table="menus"; 
    public $timestamps= false;

    protected $fillabel = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty'
    ];
}
