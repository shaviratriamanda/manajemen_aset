<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKondisiAset extends Model
{
  protected $table = "kondisi_aset";
  protected $primaryKey = 'id';
  public $timestamps = false;
  protected $fillable = [
    "kondisi",
    "tanggal_kondisi",
    "id_aset",
    "deskripsi",
	"gambar"
  ];
  public function hitungAsetBerdasarkanKondisi($kondisi)
  {
    return $this->where("kondisi", $kondisi)->count();
  }
}
