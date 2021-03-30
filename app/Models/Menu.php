<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Menu as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    protected $table = "menus";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id']; 
    protected $incerement = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillabel = [
        'id',
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty'
    ];
}
