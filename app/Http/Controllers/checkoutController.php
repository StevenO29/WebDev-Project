<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\checkoutModel;

class checkoutController extends Controller
{
    //

    public function tabelCart(Request $req){

        $input = $req->all();
        $pindahCart = new checkoutModel();
        $listCheckout = $pindahCart->tabelCart();
        $pindahCart->P_Name = $req->input('name');
        $pindahCart->P_Price = $req->input('price');


        return view('checkout', compact('listCheckout'));
}
}