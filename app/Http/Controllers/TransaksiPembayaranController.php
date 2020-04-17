<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TransaksiPembayaran;

class TransaksiPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TransaksiPembayaran::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return TransaksiPembayaran::create($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_transaksi
     * @return \Illuminate\Http\Response
     */
    public function search($id_transaksi)
    {
        return $pembayaran = TransaksiPembayaran::where('id_transaksi', '=', $id_transaksi)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_transaksi
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function update($id_transaksi, Request $request)
    {
        $pembayaran = TransaksiPembayaran::where('id_transaksi', '=', $id_transaksi)->firstOrFail();
        $pembayaran->update($request->all());
        return $pembayaran;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pembayaran = TransaksiPembayaran::find($id);
        $pembayaran->delete();
        return "The data was deleted";
    }
}
