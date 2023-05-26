<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listOrder;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function tabelorder(){
       
        $user = new listOrder();
        $listOrderBarang = $user->tabelorder();
        return view('order',compact(['listOrderBarang']));
    }
}
