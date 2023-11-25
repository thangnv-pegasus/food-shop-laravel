<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class TabCollection extends Component
{
    public $thisTab = 'vegetable';

    public function setTabCollection($collectionName = 'vegetable')
    {
        $this->thisTab = $collectionName;
    }
    public function render()
    {
        return view('livewire.tab-collection', ['products' => Product::all()->where('collection','=', $this->thisTab)->take(8)]);
    }
}