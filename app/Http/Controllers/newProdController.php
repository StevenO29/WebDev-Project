<?php

namespace App\Http\Controllers;

use App\Models\EditProductModel;
use App\Models\prodModel;
use Illuminate\Http\Request;
use App\Models\newProdModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class newProdController extends Controller
{
    //
    public function newproduct(){

        return view('newproduct');
    }
    public function Addbarang(Request $req){
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
            if($req -> hasFile('product_image'))
            {
                $file = $req->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path("public/uploads"), $filename);
                $produkbaru->product_image = $filename;
            }
            
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

           
            return redirect('/opp');
            
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
            if($req -> hasFile('product_image'))
            {
                $file = $req->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path("public/uploads"), $filename);
                $produkbaru->product_image = $filename;
            }
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            return redirect('/HDPE');
            
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
            if($req -> hasFile('product_image'))
            {
                $file = $req->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path("public/uploads"), $filename);
                $produkbaru->product_image = $filename;
            }
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

          
            return redirect('/pe');
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
            if($req -> hasFile('product_image'))
            {
                $file = $req->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path("public/uploads"), $filename);
                $produkbaru->product_image = $filename;
            }
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            return redirect('/kresek');
            
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
            if($req -> hasFile('product_image'))
            {
                $file = $req->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path("public/uploads"), $filename);
                $produkbaru->product_image = $filename;
            }
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            return redirect('/gelas');

            
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
            if($req -> hasFile('product_image'))
            {
                $file = $req->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path("public/uploads"), $filename);
                $produkbaru->product_image = $filename;
            }
            $produkbaru->Status_Del = '0';
            $produkbaru->save();

            $server = "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));";

            $run = DB::select($server);

            
            return redirect('/kertas');
            
        }
    }
    public function tabelprodOPP(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new prodModel();
        $tabelOPP = $user->tableprodukOPP();

        // Use LengthAwarePaginator to create a paginator instance
        $paginator = new LengthAwarePaginator(
            $tabelOPP->forPage($currentPage, $perPage),
            $tabelOPP->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('opp', compact('paginator'));
        
   
    }
    public function tabelprodHDPE(){
       
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new prodModel();
        $tabelHDPE = $user->tableprodukHDPE();

        // Use LengthAwarePaginator to create a paginator instance
        $paginator = new LengthAwarePaginator(
            $tabelHDPE->forPage($currentPage, $perPage),
            $tabelHDPE->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('HDPE', compact('paginator'));
    }
    public function tabelprodPE(){
       
      
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new prodModel();
        $tabelPE = $user->tableprodukPE();

        // Use LengthAwarePaginator to create a paginator instance
        $paginator = new LengthAwarePaginator(
            $tabelPE->forPage($currentPage, $perPage),
            $tabelPE->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('pe', compact('paginator'));
    }

    public function tabelprodKresek(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new prodModel();
        $tabelKresek = $user->tableprodukKresek();

        // Use LengthAwarePaginator to create a paginator instance
        $paginator = new LengthAwarePaginator(
            $tabelKresek->forPage($currentPage, $perPage),
            $tabelKresek->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('kresek', compact('paginator'));
    }

    public function tabelprodGelas(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new prodModel();
        $tabelGelas = $user->tableprodukGelas();

        // Use LengthAwarePaginator to create a paginator instance
        $paginator = new LengthAwarePaginator(
            $tabelGelas->forPage($currentPage, $perPage),
            $tabelGelas->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('gelas', compact('paginator'));
    }

    public function tabelprodKertas(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new prodModel();
        $tabelKertas = $user->tableprodukKertas();

        // Use LengthAwarePaginator to create a paginator instance
        $paginator = new LengthAwarePaginator(
            $tabelKertas->forPage($currentPage, $perPage),
            $tabelKertas->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('kertas', compact('paginator'));
    }

    public function EditBarang($id, Request $req){
        
        $user = new EditProductModel();
        $tabel = $user->tableprodukOPP($id);
        
        
           
            return view('editproduct', compact('tabel'));
            
        }
        
        
    }



