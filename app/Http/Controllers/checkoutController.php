<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\checkoutModel;

class checkoutController extends Controller
{
    //

    public function tabelCart(){
    
        $user = new checkoutModel();
        $listCheckout = $user->tabelCart();
       

        return view('checkout', compact('listCheckout'));
}
}