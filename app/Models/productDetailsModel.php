<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class productDetailsModel extends Model
{
    protected $table = 'Product';
    protected $primaryKey = 'product_id';
    use HasFactory;
    public function tableproduk($id){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where product_id LIKE '%".$id."%';       ";

        $produk = DB::select($value);
        return $produk;
    }
   
}