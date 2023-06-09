<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\productDetailsModel;
use Illuminate\Support\Facades\DB;

class productDetailsController extends Controller
{
    public function tableproduk($id)
    {
        $user = new productDetailsModel();
        $prodDetail = $user->tableproduk($id);
        return view('single', compact('prodDetail'));
    }
   

}

