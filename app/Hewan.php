<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    protected $table = "hewan";
    protected $fillable = [ 'nama',
                            'tglLahir',
                            'jenisHewan',
                            'ukuranHewan',
                            'customer',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                                          
}