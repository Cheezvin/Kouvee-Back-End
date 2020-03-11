<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $fillable = [ 'nama',
                            'alamat',
                            'tglLahir',
                            'noTelp',
                            'member'];
    public $timestamps = false;                                          
}
