<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\ModelAset;
use App\ModelKategoriAset;
use App\ModelLokasi;

class Aset extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("aset_read");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		// mengambil data kategori aset
		$data['kategori_aset'] = ModelKategoriAset::all();
		$data['lokasi_aset'] = ModelLokasi::all();
        
		// menampilkan HTML ke browser 
		return view("aset_add", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_aset = $request->all();
        $nama_lokasi = ModelLokasi::find($data_aset['id_lokasi'], ["nama_lokasi"])->nama_lokasi;
        $nama_kategori = ModelKategoriAset::find($data_aset['id_kategori'], ["kode_kategori"])->kode_kategori;
        $urutan = ModelAset::count();
        $kode_urutan = "1001".str_pad(($urutan+1), 3, "0", STR_PAD_LEFT);
        $data_aset['kode_aset'] = $nama_lokasi."-TI-".$nama_kategori."-".$kode_urutan;
        $data_aset['created_at'] = date("Y-m-d"); 
        ModelAset::create($data_aset);
        return redirect("aset");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		// mengambil data kategori aset
		$data['kategori_aset'] = ModelKategoriAset::all();
		$data['lokasi_aset'] = ModelLokasi::all();
		
		// mengambil data aset yang akan diedit
        $data['detail'] = ModelAset::find($id);
        return view("aset_edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_aset = $request->all();
        unset($data_aset['_token']);
        $nama_lokasi = ModelLokasi::find($data_aset['id_lokasi'], ["nama_lokasi"])->nama_lokasi;
        $nama_kategori = ModelKategoriAset::find($data_aset['id_kategori'], ["kode_kategori"])->kode_kategori;
        $urutan = substr($data_aset['kode_aset'], 4);
        $kode_urutan = "1001".$urutan;
        $data_aset['kode_aset'] = $nama_lokasi."-TI-"."-".$nama_kategori."-".$kode_urutan;
        ModelAset::where("id", $id)->update($data_aset);
        return redirect("aset");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelAset::find($id)->delete();
        return redirect("aset");
    }
    
    public function datatable(Request $request)
    {
      $aset = new ModelAset();
      return datatables()->of($aset->with(["kategori", "lokasi"])->select("*"))->toJson();
    }
    public function qrcode_aset()
    {
      return view("qrcode_aset");
    }
    public function cetak_qrcode(Request $request)
    {
      $aset_terpilih = $request->input("id_aset");
      $data['data_aset'] = ModelAset::find($aset_terpilih);
      return view("cetak_qrcode_aset", $data);
    }
}
