<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanLayanan extends Model
{
    protected $table = "laporanlayanan";
    protected $fillable = [ 'nama_layanan',
                            'bulan',
                            'tahun',
                            'jumlah_terjual',
                            'total_penjualan'];
    public $timestamps = false;                                          
}
