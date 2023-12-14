<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class CartBtn extends Component
{

    public function render()
    {
        $size = 0;
        if(Auth::check()){
            $size = Auth::user()->id;
        }
        return view('livewire.cart-btn', [
            'size' => $size
        ]);
    }
}
