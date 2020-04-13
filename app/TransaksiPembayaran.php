<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPembayaran extends Model
{
    protected $table = "transaksipembayaran";
    protected $fillable = [ 'id_transaksi',
                            'tanggal',
                            'total_harga',
                            'nama_customer',
                            'status',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                       
                            
}
