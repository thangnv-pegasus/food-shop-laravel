<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Http\Client\Request;
use Livewire\Attributes\Url;
use Livewire\Component;
use Route;

class Products extends Component
{

    public $thisOption = 'default';

    public function filter($filter)
    {
        $this->thisOption = $filter;
    }

    public function render()
    {
        $collection = Route::current()->parameter('collection');

        switch ($this->thisOption) {
            case 'atoz':
                if ($collection === 'all') {
                    $products = Product::orderBy('name', 'desc')->paginate(12);
                } else {
                    $products = Product::where('collection', '=', $collection)->orderBy('name', 'desc')->paginate(12);
                }
                break;
            case 'ztoa':
                if ($collection === 'all') {
                    $products = Product::orderBy('name', 'desc')->paginate(12);
                } else {
                    $products = Product::where('collection', '=', $collection)->orderBy('name', 'asc')->paginate(12);
                }
                break;
            case 'maxtomin':
                if ($collection === 'all') {
                    $products = Product::orderBy('price', 'desc')->paginate(12);
                } else {
                    $products = Product::where('collection', '=', $collection)->orderBy('price', 'desc')->paginate(12);
                }
                break;
            case 'mintomax':
                if ($collection === 'all') {
                    $products = Product::orderBy('price', 'asc')->paginate(12);
                } else {
                    $products = Product::where('collection', '=', $collection)->orderBy('price', 'asc')->paginate(12);
                }
                break;
            default:
                if ($collection === 'all') {
                    $products = Product::paginate(12);
                } else {
                    $products = Product::where('collection', '=', $collection)->paginate(12);
                }
        }
        return view('livewire.products', [
            'products' => $products
        ]);
    }
}