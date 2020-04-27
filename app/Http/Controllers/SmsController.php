<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {
       
        return Nexmo::message()->send([
            'to' => $request->mobile,
            'from' => 'Kouvee Petshop',
            'text' => 'Bisa Bosque'
        ]);
    }
}