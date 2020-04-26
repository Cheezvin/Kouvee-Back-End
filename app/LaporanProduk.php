<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanProduk extends Model
{
    protected $table = "laporanproduk";
    protected $fillable = [ 'nama_produk',
                            'bulan',
                            'tahun',
                            'jumlah_terjual',
                            'total_penjualan'];
    public $timestamps = false;                                          
}
