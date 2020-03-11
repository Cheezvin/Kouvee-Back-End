<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPP extends Model
{
    protected $table = "transaksipenjualanproduk";
    protected $fillable = [ 'idCustomer',
                            'idProduk',
                            'jumlah',
                            'totalHarga',
                            'idPegawai',
                            'tanggal',
                            'status'];
    public $timestamps = false;                       
                            
}
