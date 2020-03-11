<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPembayaran extends Model
{
    protected $table = "transaksipembayaran";
    protected $fillable = [ 'idTPP',
                            'idTPL',
                            'tanggal',
                            'totalHarga',
                            'idCustomer',
                            'idPegawai'];
    public $timestamps = false;                       
                            
}
