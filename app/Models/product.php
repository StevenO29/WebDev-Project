<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
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
