<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function create(){
        return view('pages.san-pham',[
            'products' => Product::paginate(12)
        ]);
    }
}
