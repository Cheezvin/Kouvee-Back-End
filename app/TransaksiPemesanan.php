<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPemesanan extends Model
{
    protected $table = "transaksipemesanan";
    protected $fillable = [ 'idSupp',
                            'idProduk',
                            'jumlah',
                            'satuan',
                            'status'];
    public $timestamps = false;                       
                            
}
