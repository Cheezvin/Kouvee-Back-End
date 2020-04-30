<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LaporanPemesanan;
use \PDF;

class LaporanPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LaporanPemesanan::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return LaporanPemesanan::create($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($id)
    {
        return LaporanPemesanan::find($id);
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
        $data = LaporanPemesanan::where($where)->get();
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
        return LaporanPemesanan::where('tahun', '=', $tahun)->get();
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
            $temp = LaporanPemesanan::where($max)->max('jumlah_terjual');
            if($temp != null) {
                $where=['tahun' => $tahun, 'bulan' => $bulan[$x],'jumlah_terjual' => LaporanPemesanan::where($max)->max('jumlah_terjual')];
                array_push($data,LaporanPemesanan::where($where)->firstOrFail());
            }
        }
        $no = 0;
        $total = 0;
        $pdf = PDF::loadView('pdfPemesananTerlaris', compact('data','no','total','tahun'));
        return $pdf->download("invoiceLaporanPemesananTerlaris.pdf");
        
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
        $JH = LaporanPemesanan::find($id);
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
        $JH = LaporanPemesanan::find($id);
        $JH->delete();
        return "The data was deleted";
    }
}