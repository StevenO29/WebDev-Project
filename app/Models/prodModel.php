<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class prodModel extends Model
{
    use HasFactory;
    public function tableprodukOPP(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`
        FROM product where p_category = 'OPP'; ;        ";

        $produk = DB::select($value);
        return $produk;
    }
    public function tableprodukHDPE(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`
        FROM product where p_category = 'HDPE';        ";

        $produkHDPE = DB::select($value);
        return $produkHDPE;
    }
    public function tableprodukPE(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`
        FROM product where p_category = 'PE';        ";

        $produk = DB::select($value);
        return $produk;
    }
    public function tableprodukKresek(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`
        FROM product where p_category = 'kresek';        ";

        $produk = DB::select($value);
        return $produk;
    }
    public function tableprodukGelas(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`
        FROM product where p_category = 'gelas';        ";

        $produk = DB::select($value);
        return $produk;
    }

    public function tableprodukKertas(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`
        FROM product where p_category = 'kertas';        ";

        $produk = DB::select($value);
        return $produk;
    }
}