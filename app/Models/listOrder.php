<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class listOrder extends Model
{
    use HasFactory;
    public function tabelorder(){
        $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";
        $run = DB::select($server);
        $value = "SELECT o.order_id AS `ID`,c.cust_name AS `name`,sum(od.o_qty*od.p_price) AS `subtotal`,
        o.order_status AS `status`,s.Carrier_Name AS `carrier`,s.Tracking_Num AS `tracking`,
        od.p_name AS `prod_name`, od.p_price AS `price`, od.o_qty AS `qty`
         FROM order2 o, Customer c, Order_Details od, Shipping s 
         where o.cust_id = c.cust_id and o.order_id = od.order_id and s.order_id = o.order_id and o.status_del = '0'
             group by o.order_id;       ";
        
        $selectorder = DB::select($value);
        return $selectorder;
    }
}
