<?php

namespace App\Http\Controllers;

use App\Models\prodModel;
use Illuminate\Http\Request;
use App\Models\newProdModel;
use Illuminate\Support\Facades\DB;


class newProdController extends Controller
{
    //
    public function newproduct(){


        return view('newproduct');
    }
    public function updatebarang(Request $req){
        $kategoribarang = $req->input('categoryList');
        $input = $req->all();
        if($kategoribarang == "opp")
        {
            $produkbaru = new newProdModel();
            $produkbaru->P_Name = $req->input('p_name');
            $produkbaru->P_Category = 'OPP';
            $produkbaru->P_Brand = $req->input('P_Brand');
            $produkbaru->P_Stock = $req->input('P_Stock');
            $produkbaru->P_Desc = $req->input('P_Desc');
            $produkbaru->P_Price = $req->input('P_Price');
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $user = new prodModel();
            $tabel = $user->tableproduk();
            return view('opp',compact(['tabel']));
            
        }
    }
    public function tabelprod(){
       
        $user = new prodModel();
        $tabel = $user->tableproduk();
        return view('opp',compact(['tabel']));
    }


}
