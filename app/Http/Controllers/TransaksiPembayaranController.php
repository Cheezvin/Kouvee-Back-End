<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TransaksiPembayaran;
use App\TPP;
use App\TPL;
use \PDF;

class TransaksiPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TransaksiPembayaran::where('logAksi', '!=', "Dihapus")->get();
    }

    public function deletedItem() {
        return TransaksiPembayaran::where('logAksi', '=', "Dihapus")->get();
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_transaksi
     */
    public function downloadPDFTPP($id_transaksi){
        $data = TPP::where('id_transaksi', '=', $id_transaksi)->get();
        $no = 0;
        $pembayaran = TransaksiPembayaran::where('id_transaksi', '=', $id_transaksi)->firstOrFail();
        $pdf = PDF::loadView('pdfTPP', compact('data','no','pembayaran'));
        return $pdf->download("invoiceTransaksiProduk.pdf");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_transaksi
     */
    public function downloadPDFTPL($id_transaksi){
        $data = TPL::where('id_transaksi', '=', $id_transaksi)->get();
        $no = 0;
        $pembayaran = TransaksiPembayaran::where('id_transaksi', '=', $id_transaksi)->firstOrFail();
        $pdf = PDF::loadView('pdfTPL', compact('data','no','pembayaran'));
        return $pdf->download("invoiceTransaksiLayanan.pdf");
    }
}
