<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\newCartModel;
use App\Models\checkoutModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function OPP(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new product();
        $tabelOPP = $user->tableprodukOPP();

        // Use LengthAwarePaginator to create a paginator instance
        $paginatorOPP = new LengthAwarePaginator(
            $tabelOPP->forPage($currentPage, $perPage),
            $tabelOPP->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('opp', compact('paginatorOPP'));
        
    }

    public function HDPE(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new product();
        $tabelHDPE = $user->tableprodukHDPE();

        // Use LengthAwarePaginator to create a paginator instance
        $paginatorHDPE = new LengthAwarePaginator(
            $tabelHDPE->forPage($currentPage, $perPage),
            $tabelHDPE->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('HDPE', compact('paginatorHDPE'));
    }
    public function PE(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new product();
        $tabelPE = $user->tableprodukPE();

        // Use LengthAwarePaginator to create a paginator instance
        $paginatorPE = new LengthAwarePaginator(
            $tabelPE->forPage($currentPage, $perPage),
            $tabelPE->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('pe', compact('paginatorPE'));
    }

    public function Kresek(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new product();
        $tabelKresek = $user->tableprodukKresek();

        // Use LengthAwarePaginator to create a paginator instance
        $paginatorKresek = new LengthAwarePaginator(
            $tabelKresek->forPage($currentPage, $perPage),
            $tabelKresek->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('kresek', compact('paginatorKresek'));
    }

    public function Gelas(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new product();
        $tabelGelas = $user->tableprodukGelas();

        // Use LengthAwarePaginator to create a paginator instance
        $paginatorGelas = new LengthAwarePaginator(
            $tabelGelas->forPage($currentPage, $perPage),
            $tabelGelas->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('gelas', compact('paginatorGelas'));
    }

    public function Kertas(){
       
        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new product();
        $tabelKertas = $user->tableprodukKertas();

        // Use LengthAwarePaginator to create a paginator instance
        $paginatorKertas = new LengthAwarePaginator(
            $tabelKertas->forPage($currentPage, $perPage),
            $tabelKertas->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('Kertas', compact('paginatorKertas'));
    }

    public function newCart()
    {

        return view('checkout');
    }
    public function addToCart(Request $request)
    {
        $input = $request->all();
        $cartBaru = new newCartModel();
        // $Product_ID = $request->Product_ID;
        // $request->validate([
        //     'Product_ID' => 'required|numeric',
        // ]);
        // $cart = session("checkout");
//        $cartBaru->cart_id = session('cart_id');
        // $cartBaru->c_email = session('c_email');
        $cartBaru->cart_id  = 'CT001';
        $cartBaru->product_id  = $request->input('Product_ID');
        $cartBaru->Cart_Qty  = $request->input('Cart_Qty');
        $cartBaru->save();
       // $Product = Product::detail_product($Product_ID);

        // $cart["Product_ID"] = [
        //     "P_Name" => $Product->P_Name,
        //     "P_Category" => $Product->P_Category,
        //     "P_Brand" => $Product->P_Brand,
        //     "P_Stock" => $Product->P_Stock,
        //     "P_Desc" => $Product->P_Desc,
        //     "P_Price" => $Product->P_Price,
        //     "Status_Del" => $Product->Status_Del,
        //     "product_image" => $Product->product_image,
        //     "total" => 1
        // ];



       // session(["checkout" => $cart]);
        return redirect("/checkout");
    }

    public static function detail_product($Product_ID)
    {
        $data = Product::where("Product_ID", $Product_ID)->first();
        return $data;
    }

    public function cart()
    {
        $cart = session("checkout");
        return view("checkout")->with("checkout", $cart);
    }
    public function tabelCart(Request $req){

        $pindahCart = new checkoutModel();
        $listCheckout = $pindahCart->tabelCart();

        return view('checkout', compact('listCheckout'));
}
    public function EditCart(Request $req)
    {
       
        $quantities = $req->input('qty');

        foreach($quantities as $product_id => $qty) {
             $databaru = DB::table('cart_coba')
            ->where('product_ID', $product_id)
            ->update([
                'Cart_Qty' => $qty,
            ]);

        }

        $user = new checkoutModel();
        $listCheckout = $user->tabelCart();

        return view('checkout', compact('listCheckout'));

    }
}
