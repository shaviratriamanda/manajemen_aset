<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelAset;
use App\ModelKondisiAset;

class Aset extends Controller
{
    public function index(Request $request)
    {
		return response()->json(ModelAset::all());
    }
	
	public function show($id, Request $request)
    {
        $data_aset = ModelAset::where("kode_aset", $id)->first();
        $data_aset['kondisi'] = ModelKondisiAset::where("id_aset", $data_aset->id);
		return response()->json($data_aset);	
    }

    public function store(Request $request)
    {
        $data_aset = $request->all();
		$data_aset['created_at'] = date("Y-m-d"); 
        ModelAset::create($data_aset);
        return response()->json("oke");
    }

    public function edit(Request $request, $id)
    {
        $edit = ModelAset::find($id);
		$edit->kode_aset = $request->input("kode_aset");
		$edit->nama_aset = $request->input("nama_aset");
		$edit->lokasi = $request->input("id_lokasi");
		$edit->deskripsi = $request->input("deskripsi");
		$edit->id_kategori = $request->input("id_kategori");
		$edit->save();
		return response()->json("oke");
    }

    public function destroy(Request $request, $id)
    {
        ModelAset::find($id)->delete();
        return response()->json("oke");
    }
    
}