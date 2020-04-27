<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPL extends Model
{
    protected $table = "transaksipenjualanlayanan";
    protected $fillable = [ 'id_transaksi',
                            'nama_layanan',
                            'jumlah',
                            'harga',
                            'subtotal',
                            'nama_hewan',
                            'jenisHewan',
                            'ukuranHewan',
                            'logAktor',
                            'status',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                       
                            
}
