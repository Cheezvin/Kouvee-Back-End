<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananPembayaran extends Model
{
    protected $table = "pemesananpembayaran";
    protected $fillable = [ 'id_transaksi',
                            'nama_supp',
                            'telp_supp',
                            'kota_supp',
                            'status',
                            'tanggal',];
    public $timestamps = false;                       
                            
}
