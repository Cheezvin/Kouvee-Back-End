<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UkuranHewan extends Model
{
    protected $table = "ukuranhewan";
    protected $fillable = ['nama',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                       
                            
}
