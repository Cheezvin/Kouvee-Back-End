<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TPL;

class TPLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TPL::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return TPL::create($request->all());    
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id_transaksi
     * @return \Illuminate\Http\Response
     */
    public function search($id_transaksi)
    {
         return TPL::where('id_transaksi', '=', $id_transaksi)->firstOrFail();
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
        $tpl = TPL::find($id);
        $tpl->update($request->all());
        return $tpl;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tpl = TPL::find($id);
        $tpl->delete();
        return "The data was deleted";
    }
}
