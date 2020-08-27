<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProduk extends Model
{
  protected $table = "tb_produk";
  protected $primaryKey = 'id_produk';
  public $incrementing = false;
  public $timestamps = false;
  protected $fillable = [
    "nm_produk",
    "harga_jual",
    "harga_beli",
    "stok"
  ];
}
