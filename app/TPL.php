<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPL extends Model
{
    protected $table = "transaksipenjualanlayanan";
    protected $fillable = [ 'id_transaksi',
                            'id_produk',
                            'nama_layanan',
                            'jumlah',
                            'harga',
                            'subtotal',
                            'nama_hewan',
                            'ukuranHewan',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                       
                            
}
