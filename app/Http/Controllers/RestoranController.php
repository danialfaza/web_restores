<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restoran;
use App\Http\Controllers\Controller;
use DB;

class RestoranController extends Controller
{
    public function index()
    {
    	$data_restoran = \App\Restoran::all();
    	return view ('restoran.index', ['data_restoran' => $data_restoran]);
    }

    public function create(Request $request)
    {
    	 Restoran::create([
            'nama_restoran'=> $request->nama_restoran,
            'deskripsi'=> $request->deskripsi,
            'alamat'=> $request->alamat,
            'jam_buka'=> $request->jam_buka,
            'telfon'=> $request->telfon

        ]);

    	return redirect('/restoran')->with('sukses','Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
    	$restoran = \App\Restoran::find($id);
    	return view('restoran/edit', ['restoran'=> $restoran]);
    	
    }
    public function update(Request $request, $id)
    {
        //dd($request->all());
    	$restoran = \App\Restoran::find($id);
    	$restoran->update($request->all());
       
    	return redirect('/restoran')->with('sukses','Data berhasil diubah');
    }
    public function delete($id)
    {
    	$restoran = \App\Restoran::find($id);
    	$restoran->delete();
    	return redirect('/Restoran')->with('sukses','Data berhasil dihapus');
    }

    public function indexAPI(){
       $restoran = Restoran::select('nama_restoran', 'deskripsi', 'jam_buka', 'alamat', 'telfon')->get();
        $json = response()->json(array('result' => $restoran));
        return $json;
    }


}
