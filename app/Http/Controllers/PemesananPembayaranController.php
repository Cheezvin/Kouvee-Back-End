<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PemesananPembayaran;
use App\TransaksiPemesanan;
use \PDF;

class PemesananPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PemesananPembayaran::where('logAksi', '!=', "Dihapus")->get();
    }

    public function deletedItem() {
        return PemesananPembayaran::where('logAksi', '=', "Dihapus")->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return PemesananPembayaran::create($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($id_transaksi)
    {
        return PemesananPembayaran::where('id_transaksi', '=', $id_transaksi)->get();
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
        $pemesanan = PemesananPembayaran::find($id);
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
        $pemesanan = PemesananPembayaran::find($id);
        $pemesanan->delete();
        return "The data was deleted";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_transaksi
     */
    public function downloadPDFPemesanan($id_transaksi){
        $data = TransaksiPemesanan::where('id_transaksi', '=', $id_transaksi)->get();
        $no = 0;
        $pemesanan = PemesananPembayaran::where('id_transaksi', '=', $id_transaksi)->firstOrFail();
        $pdf = PDF::loadView('pdfPemesanan', compact('data','no','pemesanan'));
        return $pdf->download("invoiceTransaksiPemesanan.pdf");
    }
}
