<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TransaksiPemesanan;

class TransaksiPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TransaksiPemesanan::where('logAksi', '!=', "Dihapus")->get();
    }

    public function deletedItem() {
        return TransaksiPemesanan::where('logAksi', '=', "Dihapus")->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return TransaksiPemesanan::create($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($id_transaksi)
    {
        return TransaksiPemesanan::where('id_transaksi', '=', $id_transaksi)->get();
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
        $pemesanan = TransaksiPemesanan::find($id);
        $pemesanan->update($request->all());
        return $pemesanan;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pemesanan = TransaksiPemesanan::find($id);
        $pemesanan->delete();
        return "The data was deleted";
    }
}
