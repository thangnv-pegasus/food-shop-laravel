<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function create($collection)
    {
        if($collection === 'all'){
            $product = Product::paginate(12);
        }else{
            $product = Product::where('collection','=',$collection)->paginate(12);
        }
        return view('pages.san-pham', [
            'products' => $product
        ]);
    }

    public function detail($id)
    {
        // dd($id);
        $p = Product::firstWhere('id', '=', $id);
        return view('pages.detail-product', [
            'product' => $p,
            'related' => Product::all()->where('collection', $p->collection)->take(4)
        ]);
    }

    public function addStore(){
        $req = request()->input('quantity');
        echo 'request: '. $req;
    }
}