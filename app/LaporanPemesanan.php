<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPemesanan extends Model
{
    protected $table = "laporanpemesanan";
    protected $fillable = [ 'nama_produk',
                            'bulan',
                            'tahun',
                            'jumlah_dipesan',
                            'total_pemesanan'];
    public $timestamps = false;                                          
}
