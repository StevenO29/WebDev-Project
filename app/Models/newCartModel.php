<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class newCartModel extends Model
{
    use HasFactory;
    protected $table = "Cart_coba";

    public $incrementing = false;

    public $timestamps = false;
}
