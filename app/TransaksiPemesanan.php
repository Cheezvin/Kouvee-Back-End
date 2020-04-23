<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPemesanan extends Model
{
    protected $table = "transaksipemesanan";
    protected $fillable = [ 'idSupp',
                            'id_transaksi',
                            'idProduk',
                            'namaSupp',
                            'namaProduk',
                            'jumlah',
                            'satuan',
                            'status',
                            'tanggal',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                       
                            
}
