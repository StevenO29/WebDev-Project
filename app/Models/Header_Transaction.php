<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header_Transaction extends Model
{
    use HasFactory;
    protected $table = "header_transaction";
    protected $primaryKey = "id_header_transaction";

    protected $fillable = [
        'date_transaction',
    ];

    static function add_header_transaction()
    {
        Product::create([
            "date_transaction" => data("Y-m-d"),
        ]);
    }
}
