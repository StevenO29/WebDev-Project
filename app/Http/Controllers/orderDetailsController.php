<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listOrder;
use Illuminate\Support\Facades\DB;

class orderDetailsController extends Controller
{
    public function tabelorder(){
       
        $user = new listOrder();
         $listOrderBarang = $user->tabelorder();
        return view('orderdetails',compact(['listOrderBarang']));
    }
   
}
