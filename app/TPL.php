<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPL extends Model
{
    protected $table = "transaksipenjualanlayanan";
    protected $fillable = [ 'idCustomer',
                            'idLayanan',
                            'jumlah',
                            'totalHarga',
                            'idPegawai',
                            'tanggal',
                            'status',
                            'idHewan',
                            'idUkuranHewan'];
    public $timestamps = false;                       
                            
}
