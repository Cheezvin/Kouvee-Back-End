<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPP extends Model
{
    protected $table = "transaksipenjualanproduk";
    protected $fillable = [ 'id_transaksi',
                            'id_produk',
                            'nama_produk',
                            'jumlah',
                            'harga',
                            'subtotal',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                       
                            
}
