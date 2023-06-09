<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class prodModel extends Model
{
    protected $table = 'Product';
    protected $primaryKey = 'product_id';
    use HasFactory;

    public function tableprodukSemua(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product;       ";

        $produk = DB::select($value);
        
        return collect($produk);
    }

    public function tableprodukOPP(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'OPP' and status_del = 0;       ";

        $produk = DB::select($value);
        return collect($produk);
    }
    public function tableprodukHDPE(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'HDPE' and status_del = 0;        ";

        $produkHDPE = DB::select($value);
        return collect($produkHDPE);
    }
    public function tableprodukPE(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'PE' and status_del = 0;        ";

        $produk = DB::select($value);
        return collect($produk);
    }
    
    public function getKresekProducts()
    {
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        
        $query = $this->where('p_category', 'kresek');
        
        return $query;
    }
    
    public function tableprodukKresek(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'kresek' and status_del = 0;        ";

        $produk = DB::select($value);
        return collect($produk);
    }
    public function tableprodukGelas(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'gelas' and status_del = 0;        ";

        $produk = DB::select($value);
        return collect($produk);
    }

    public function tableprodukKertas(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'kertas' and status_del = 0;        ";

        $produk = DB::select($value);
        return collect($produk);
    }
}