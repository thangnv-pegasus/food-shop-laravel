<?php

namespace App\Livewire;

use Livewire\Component;

class FormAddStore extends Component
{
    public $quantity = 1;
    public $id;

    public function increase(){
        $this->quantity++;
    }

    public function decrease(){
        if($this->quantity > 1){
            $this->quantity--;
        }
    }
    public function render()
    {
        return view('livewire.form-add-store', [
            'quantity' => $this->quantity,
            'id' => $this->id
        ]);
    }

    public function addStore(){
        $request = request()->all();
        $req = json_decode($request['components'][0]['snapshot']);
        dd($req->data);
    }
}
