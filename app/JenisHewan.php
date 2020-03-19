<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisHewan extends Model
{
    protected $table = "jenishewan";
    protected $fillable = [ 'nama',
                            'logAktor',
                            'logAksi',
                            'logWaktu'];
    public $timestamps = false;                                          
}
