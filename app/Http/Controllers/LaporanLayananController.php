<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LaporanLayanan;
use \PDF;

class LaporanLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LaporanLayanan::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return LaporanLayanan::create($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($id)
    {
        return LaporanLayanan::find($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tahun
     * @return \Illuminate\Http\Response
     */
    public function searchTahun($tahun)
    {
        return LaporanLayanan::where('tahun', '=', $tahun)->get();
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
        $JH = LaporanLayanan::find($id);
        $JH->update($request->all());
        return $JH;
    }

    public function Laris($tahun)
    {
        $bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        $data = [];
        for ($x = 0; $x < 12; $x++) {
            $max = ['tahun' => $tahun,'bulan' => $bulan[$x]];
            $temp = LaporanLayanan::where($max)->max('jumlah_terjual');
            if($temp != null) {
                $where=['tahun' => $tahun, 'bulan' => $bulan[$x],'jumlah_terjual' => LaporanLayanan::where($max)->max('jumlah_terjual')];
                array_push($data,LaporanLayanan::where($where)->firstOrFail());
            }
        }
        $no = 0;
        $total = 0;
        $pdf = PDF::loadView('pdfLayananTerlaris', compact('data','no','total','tahun'));
        return $pdf->download("invoiceLaporanLayananTerlaris.pdf");
        
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
        $data2 = [];
        for ($j = 0; $j < 12; $j++) {
            $max2 = ['tahun' => $tahun,'bulan' => $bulan[$j]];
            $temp2 = LaporanLayanan::where($max2)->sum('total_penjualan');
            if($temp2 != 0) {
                array_push($data2,['bulan' => $bulan[$j], 'total' => $temp2]);
            }
        }
        $no = 0;
        $total = 0;
        $pdf = PDF::loadView('pdfPendapatanTahunan', compact('data','data2','no','total','tahun'));
        return $pdf->download("invoiceLaporanPendapatanTahunan.pdf");
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $JH = LaporanLayanan::find($id);
        $JH->delete();
        return "The data was deleted";
    }
}
