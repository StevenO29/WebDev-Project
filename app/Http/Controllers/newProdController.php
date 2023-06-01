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
            $tabelOPP = $user->tableprodukOPP();
            return view('opp',compact(['tabelOPP']));
            
        }
        elseif($kategoribarang == "hdpe")
        {
            $produkbaru = new newProdModel();
            $produkbaru->P_Name = $req->input('p_name');
            $produkbaru->P_Category = 'HDPE';
            $produkbaru->P_Brand = $req->input('P_Brand');
            $produkbaru->P_Stock = $req->input('P_Stock');
            $produkbaru->P_Desc = $req->input('P_Desc');
            $produkbaru->P_Price = $req->input('P_Price');
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $user = new prodModel();
            $tabelHDPE = $user->tableprodukHDPE();
            return view('HDPE',compact(['tabelHDPE']));
            
        }
        elseif($kategoribarang == "pe")
        {
            $produkbaru = new newProdModel();
            $produkbaru->P_Name = $req->input('p_name');
            $produkbaru->P_Category = 'PE';
            $produkbaru->P_Brand = $req->input('P_Brand');
            $produkbaru->P_Stock = $req->input('P_Stock');
            $produkbaru->P_Desc = $req->input('P_Desc');
            $produkbaru->P_Price = $req->input('P_Price');
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $user = new prodModel();
            $tabelPE = $user->tableprodukPE();
            return view('PE',compact(['tabelPE']));
            
        }
        if($kategoribarang == "kresek")
        {
            $produkbaru = new newProdModel();
            $produkbaru->P_Name = $req->input('p_name');
            $produkbaru->P_Category = 'Kresek';
            $produkbaru->P_Brand = $req->input('P_Brand');
            $produkbaru->P_Stock = $req->input('P_Stock');
            $produkbaru->P_Desc = $req->input('P_Desc');
            $produkbaru->P_Price = $req->input('P_Price');
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $user = new prodModel();
            $tabelKresek = $user->tableprodukKresek();
            return view('Kresek',compact(['tabelKresek']));
            
        }
        elseif($kategoribarang == "gelas")
        {
            $produkbaru = new newProdModel();
            $produkbaru->P_Name = $req->input('p_name');
            $produkbaru->P_Category = 'Gelas';
            $produkbaru->P_Brand = $req->input('P_Brand');
            $produkbaru->P_Stock = $req->input('P_Stock');
            $produkbaru->P_Desc = $req->input('P_Desc');
            $produkbaru->P_Price = $req->input('P_Price');
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $user = new prodModel();
            $tabelGelas = $user->tableprodukGelas();
            return view('Gelas',compact(['tabelGelas']));
            
        }
        elseif($kategoribarang == "kertas")
        {
            $produkbaru = new newProdModel();
            $produkbaru->P_Name = $req->input('p_name');
            $produkbaru->P_Category = 'Kertas';
            $produkbaru->P_Brand = $req->input('P_Brand');
            $produkbaru->P_Stock = $req->input('P_Stock');
            $produkbaru->P_Desc = $req->input('P_Desc');
            $produkbaru->P_Price = $req->input('P_Price');
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            $user = new prodModel();
            $tabelKertas = $user->tableprodukKertas();
            return view('Kertas',compact(['tabelKertas']));
            
        }
    }
    public function tabelprodOPP(){
       
        $user = new prodModel();
        $tabelOPP = $user->tableprodukOPP();
        return view('opp',compact(['tabelOPP']));
    }
    public function tabelprodHDPE(){
       
        $user = new prodModel();
        $tabelHDPE = $user->tableprodukHDPE();
        return view('hdpe',compact(['tabelHDPE']));
    }
    public function tabelprodPE(){
       
        $user = new prodModel();
        $tabelPE = $user->tableprodukPE();
        return view('pe',compact(['tabelPE']));
    }

    public function tabelprodKresek(){
       
        $user = new prodModel();
        $tabelKresek = $user->tableprodukKresek();
        return view('kresek',compact(['tabelKresek']));
    }

    public function tabelprodGelas(){
       
        $user = new prodModel();
        $tabelGelas = $user->tableprodukGelas();
        return view('gelas',compact(['tabelGelas']));
    }

    public function tabelprodKertas(){
       
        $user = new prodModel();
        $tabelKertas = $user->tableprodukKertas();
        return view('kertas',compact(['tabelKertas']));
    }


}
