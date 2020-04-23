<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPemesanan extends Model
{
    protected $table = "transaksipemesanan";
    protected $fillable = [ 'id_transaksi',
                            'idProduk',
                            'namaProduk',
                            'jumlah',
                            'satuan',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                       
                            
}
