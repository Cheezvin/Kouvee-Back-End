<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPemesanan extends Model
{
    protected $table = "transaksipemesanan";
    protected $fillable = [ 'idSupp',
                            'idProduk',
                            'namaSupp',
                            'namaProduk',
                            'jumlah',
                            'satuan',
                            'status',
                            'tanggal'];
    public $timestamps = false;                       
                            
}
