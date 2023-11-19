<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(Request $request){
        return view('pages.trang-chu',[
            'banners' => Banner::all(),
            'aboutmes' => Aboutme::all(),
            'products' => isset($request->collectionName) ? Product::all()->where('collection','=', $request->collectionName)->take(8) : Product::all()->where('collection','=','vegetable')->take(8),
            'bestSeller' => Product::all()
                    ->sortByDesc('sold')
                    ->take(4),
            'blogs' => Blog::all()->take(3)
        ]);
    }
}
