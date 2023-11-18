<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function setCollection($collectionName){
        return $collectionName;
    }
}
