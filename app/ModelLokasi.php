<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelLokasi extends Model
{
  protected $table = "lokasi";
  protected $primaryKey = 'id';
  public $timestamps = false;
  protected $fillable = [
    "nama_lokasi",
  ];
}
