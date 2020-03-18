<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = "layanan";
    protected $fillable = [ 'nama',
                            'harga',
                            'gambar'];
    public $timestamps = false;                       
                            
}
