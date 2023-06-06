<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    public function tableprodukOPP(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'OPP';       ";

        $produk = DB::select($value);
        
        return collect($produk);
    }

    public function tableprodukHDPE(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'HDPE';       ";

        $produk = DB::select($value);
        
        return collect($produk);
    }

    public function tableprodukPE(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'PE';       ";

        $produk = DB::select($value);
        
        return collect($produk);
    }

    public function tableprodukKresek(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'KRESEK';       ";

        $produk = DB::select($value);
        
        return collect($produk);
    }

    public function tableprodukGelas(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'GELAS';       ";

        $produk = DB::select($value);
        
        return collect($produk);
    }

    public function tableprodukKertas(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT product_id AS `ID`,p_name AS `Nama`, p_category AS `Kategori`,
        p_brand AS `Brand`, p_stock AS `Stock`, p_desc AS `Deskripsi`, p_price AS `Harga`, product_image AS `product_image`
        FROM Product where p_category = 'KERTAS';       ";

        $produk = DB::select($value);
        
        return collect($produk);
    }
    
    use HasFactory;
    protected $table = "Product";
    protected $primaryKey = "Product_ID";

    protected $fillable = [
        'P_Name',
        'P_Category',
        'P_Brand',
        'P_Stock',
        'P_Desc',
        'P_Price',
        'Status_Del',
        'product_image',
    ];

    static function list_product()
    {
        $data = Product::all();
        return $data;
    }

    static function add_product($P_Name, $P_Price)
    {
        Product::create([
            "P_Name" => $P_Name,
            "P_Price" => $P_Price,
        ]);
    }

    public static function detail_product($Product_ID)
    {
        $data = Product::where("Product_ID", $Product_ID)->first();
        return $data;
    }
}
