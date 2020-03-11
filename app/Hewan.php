<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    protected $table = "hewan";
    protected $fillable = [ 'nama',
                            'tglLahir',
                            'idJenisHewan',
                            'idCustomer'];
    public $timestamps = false;                                          
}
