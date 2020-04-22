<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TPP;
use \PDF;

class TPPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TPP::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return TPP::create($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_transaksi
     * @return \Illuminate\Http\Response
     */
    public function search($id_transaksi)
    {
         return TPP::where('id_transaksi', '=', $id_transaksi)->get();
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchbyid($id)
    {
        return TPP::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $tpp = TPP::find($id);
        $tpp->update($request->all());
        return $tpp;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tpp = TPP::find($id);
        $tpp->delete();
        return "The data was deleted";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function downloadPDF($id){
        $user = TPP::find($id);
        $pdf = PDF::loadView('pdf', compact('user'));
        return $pdf->download('invoice.pdf');
    }
}
