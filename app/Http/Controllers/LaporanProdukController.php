<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LaporanProduk;
use App\LaporanLayanan;
use \PDF;

class LaporanProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LaporanProduk::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return LaporanProduk::create($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($id)
    {
        return LaporanProduk::find($id);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $tahun
     * @return \Illuminate\Http\Response
     */
    public function reportPerbulan()
    {
        $bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        $where = ['bulan' => $bulan[date('n')-1], 'tahun' => date("Y")];
        $data = LaporanProduk::where($where)->get();
        $no = 0;
        $total = 0;
        $no2 = 0;
        $total2 = 0;
        $data2 = LaporanLayanan::where($where)->get();
        $pdf = PDF::loadView('pdfReportBulanan', compact('data','no','no2','data2','total','total2'));
        return $pdf->download("invoiceLaporanPendapatanBulanan.pdf");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tahun
     * @return \Illuminate\Http\Response
     */
    public function searchTahun($tahun)
    {
        return LaporanProduk::where('tahun', '=', $tahun)->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tahun
     * @return \Illuminate\Http\Response
     */
    public function Laris($tahun)
    {
        $bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        $data = [];
        for ($x = 0; $x < 12; $x++) {
            $max = ['tahun' => $tahun,'bulan' => $bulan[$x]];
            $temp = LaporanProduk::where($max)->max('jumlah_terjual');
            if($temp != null) {
                $where=['tahun' => $tahun, 'bulan' => $bulan[$x],'jumlah_terjual' => LaporanProduk::where($max)->max('jumlah_terjual')];
                array_push($data,LaporanProduk::where($where)->firstOrFail());
            }
        }
        $pdf = PDF::loadView('pdfProdukTerlaris', compact('data','no','total','tahun'));
        return $pdf->download("invoiceLaporanProdukTerlaris.pdf");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tahun
     * @return \Illuminate\Http\Response
     */
    public function totalPenjualan($tahun)
    {
        $bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        $data = [];
        for ($x = 0; $x < 12; $x++) {
            $max = ['tahun' => $tahun,'bulan' => $bulan[$x]];
            $temp = LaporanProduk::where($max)->sum('total_penjualan');
            if($temp != 0) {
                array_push($data,['bulan' => $bulan[$x], 'total' => $temp]);
            }
        }
        return $data;
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
        $JH = LaporanProduk::find($id);
        $JH->update($request->all());
        return $JH;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $JH = LaporanProduk::find($id);
        $JH->delete();
        return "The data was deleted";
    }
}
