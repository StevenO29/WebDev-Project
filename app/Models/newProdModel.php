<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class newProdModel extends Model
{
    use HasFactory;
    protected $table = "product";

    public $primaryKey = "product_id";

    public $incrementing = false;

    public $timestamps = false;
}

