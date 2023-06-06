<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class checkoutModel extends Model
{
    use HasFactory;
    protected $table = 'Cart';
    protected $primaryKey = 'order_id';
    public function tabelCart(){
        $value = "SELECT p.product_image as `product_image`, c.Cart_Qty as `qty`, p.p_name as `name`, p.P_Price as `price`, SUM(p.p_price*c.cart_qty) as `subtotal`
        FROM product p, cart_coba c
        WHERE c.product_id = p.product_id AND c.cust_id = 
        GROUP BY p.product_image, c.Cart_Qty, p.p_name, p.P_Price,p.product_id;";
        
        $selectorder = DB::select($value);
        return collect($selectorder);
    }
}
