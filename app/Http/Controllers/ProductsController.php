<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function create()
    {
        return view('pages.san-pham', [
            'products' => Product::paginate(12)
        ]);
    }

    public function detail($id)
    {
        $p = Product::firstWhere('id', '=', $id);
        return view('pages.detail-product', [
            'product' => $p,
            'related' => Product::all()->where('collection', $p->collection)->take(4)
        ]);
    }
}