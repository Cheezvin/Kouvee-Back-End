<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pegawai;
use JWTFactory;
use JWTAuth;
use Validator;
use Response;

class PegawaiController extends Controller
{
    private $user;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pegawai::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Pegawai::create($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($id)
    {
        return Pegawai::find($id);
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
        $pgw = Pegawai::find($id);
        $pgw->update($request->all());
        return $pgw;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pgw = Pegawai::find($id);
        $pgw->delete();
        return "The data was deleted";
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'tglLahir' => 'required',
            'noTelp' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        Pegawai::create([
            'nama' => $request->get('nama'),
            'password' => bcrypt($request->get('password')),
            'alamat' => $request->get('alamat'),
            'tglLahir' => $request->get('tglLahir'),
            'noTelp' => $request->get('noTelp'),
            'role' => $request->get('role')
        ]);
        $user = Pegawai::first();
        $token = JWTAuth::fromUser($user);
        
        return Response::json(compact('token'));
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'password'=> 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        
        $credentials = $request->only('nama','password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Nama atau Password Salah'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
            $token = JWTAuth::attempt($credentials);
            return auth()->user();
    }
}
