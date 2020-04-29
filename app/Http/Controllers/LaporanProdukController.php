<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LaporanProduk;

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
    public function searchBulan($bulan)
    {
        return LaporanProduk::where('bulan', '=', $bulan)->get();
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
        $data = ["Aselole"];
        for ($x = 0; $x < 12; $x++) {
            $were=['bulan' => $bulan[$x],'jumlah_terjual' => LaporanProduk::where('tahun', '=', $tahun)->orWhere('bulan', '=', $bulan[$x])->max('jumlah_terjual')];
            array_push($data, LaporanProduk::where('tahun', '=', $tahun)->orWhere($were)->firstOrFail());
        }
        $were=['bulan' => $bulan[3],'jumlah_terjual' => LaporanProduk::where('tahun', '=', $tahun)->orWhere('bulan', '=', $bulan[3])->max('jumlah_terjual')];
        return LaporanProduk::where('tahun', '=', $tahun)->orWhere($were)->get();
        
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
