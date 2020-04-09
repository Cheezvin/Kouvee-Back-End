<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPP extends Model
{
    protected $table = "transaksipenjualanproduk";
    protected $fillable = [ 'id_transaksi',
                            'nama_produk',
                            'jumlah',
                            'harga',
                            'subtotal',
                            'tanggal',
                            'status',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                       
                            
}
