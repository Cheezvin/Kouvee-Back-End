<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $fillable = [ 'nama',
                            'harga',
                            'stok',
                            'gambar'];
    public $timestamps = false;                       
                            
}

