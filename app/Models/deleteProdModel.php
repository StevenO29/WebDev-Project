<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class deleteProdModel extends Model
{
    use HasFactory;
    protected $table = 'Product';
    protected $primaryKey = 'product_id';
    public function tableproduk($id){
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`,
        status_del AS `status_del`
        FROM Product where product_id LIKE '%".$id."%';       ";

        $produk = DB::select($value);
        return collect($produk);
    }
}
