<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\newCartModel;
use App\Models\newOrderModel;
use App\Models\checkoutModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function indexHome(){
       

        $perPage = 9; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new product();
        $tabelProduk = $user->tableprodukSemua();

        // Use LengthAwarePaginator to create a paginator instance
        $tabelProdukSemua = new LengthAwarePaginator(
            $tabelProduk->forPage($currentPage, $perPage),
            $tabelProduk->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('index', compact('tabelProdukSemua'));
        
    }
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
        // $cartBaru->cart_id = session('cart_id');
        // $cartBaru->c_email = session('c_email');
        $cartBaru->cart_id  = 'CT004';
        $cartBaru->product_id  = $request->input('Product_ID');
        $cartBaru->Cart_Qty  = $request->input('Cart_Qty');
        $cartBaru->save();
       // $Product = Product::detail_product($Product_ID);

   


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

    // public function addToOrder(Request $request)
    // {

    //     $input = $request->all();
    //     $orderBaru = new newOrderModel();
    //     $orderBaru->Order_Date = now();
    //     $orderBaru->Order_Status = 'Pending';
    //     $orderBaru->Order_Qty  = $request->input('qty');
    //     $orderBaru->Status_Del = 0;
    //     $orderBaru->save();

    // }

    public function addToOrder(Request $request)
{
    $c_email = 'sophia.lee@email.com';
    $product_id = $request->input('prod_id');
    // $customerID = DB::table('Customer')
    //     ->where('Cust_Email', $customerEmail)
    //     ->value('Cust_ID');
    // $customerID = $customerID->Cust_ID;

    $id = DB::select('select Cust_ID as Cust_ID from Customer where Cust_Email = ?', [$c_email]);
    $id = $id[0]->Cust_ID;
    

    $productName = DB::select('select P_Name as P_Name from Product where Product_ID = ?', [$product_id]);
    $productName = $productName[0]->P_Name;

    // Retrieve other necessary input values
    $productID = $request->input('Product_ID');
    $quantity = $request->input('Order_Qty');
    $price = $request->input('price');
    $prod_id = $request->input('prod_id');

    // Retrieve the product details based on the product ID
    $product = DB::table('Product')
        ->where('Product_ID', $productID)
        ->first();

    // Calculate the subtotal based on the product price and quantity

    // Insert the order record into the database
    DB::table('order2')->insert([
        'Cust_ID' => $id,
        'Order_Date' => now(),
        'Order_Status' => 'Pending',
        'Order_Qty' => $quantity,
        'Status_Del' => 0    ]);
    

        DB::table('Order_Details')->insert([
            'Order_ID' => "O026",
            'P_Name' => $productName,
            'Product_ID' => $prod_id,
            'P_price' => $price,
            'O_Qty' => $quantity,
            'Status_Del' => 0    ]);
    return redirect("/index");
    // Redirect or return a response as needed
}

}
