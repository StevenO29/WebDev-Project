<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Transaction extends Model
{
    // use HasFactory;
    protected $table = "detail_transaction";
    protected $primaryKey = "id_detail_transaction";

    protected $fillable = [
        'Product_ID',
        'id_header_transaction',
        'total',
    ];

    static function add_detail_transaction($Product_ID, $id_header_transaction, $total)
    {
        Product::create([
            "Product_ID" => $Product_ID,
            "id_header_transaction" => $id_header_transaction,
            "total" => $total,
        ]);
    }
}
