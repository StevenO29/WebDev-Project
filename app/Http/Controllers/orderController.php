<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class orderController extends Controller
{
    public function tabelorder(){
        $perPage = 5; // Number of items per page
        $currentPage = Paginator::resolveCurrentPage();

        $user = new listOrder();
        $listOrderBarang = $user->tabelorder();

        // Use LengthAwarePaginator to create a paginator instance
        $paginator = new LengthAwarePaginator(
            $listOrderBarang->forPage($currentPage, $perPage),
            $listOrderBarang->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('order', compact('paginator'));
}
}
