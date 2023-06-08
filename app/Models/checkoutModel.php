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
        //$c_email = session()->get('email');
        //$cart_id = session()->get('cart_id');
        $cart_id = 'CT001';
        $c_email = 'sophia.lee@email.com';
        $value = "SELECT p.Product_ID as `Product_ID`, cu.cust_name as `cust_name`,
        p.product_image as `product_image`, 
        c.Cart_Qty as `qty`, p.p_name as `name`, 
        p.P_Price as `price`, SUM(p.p_price*c.cart_qty) as `subtotal`
        FROM product p, cart_coba c, customer cu
        WHERE c.product_id = p.product_id  AND cu.cust_email = '$c_email' AND c.cart_id = '$cart_id'
        GROUP BY p.product_image, c.Cart_Qty, p.p_name, p.P_Price,p.product_id, cu.cust_name;";
        
        $selectorder = DB::select($value);
        return collect($selectorder);
    }
}
