<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //

    public function create(){
        return view('pages.blogs');
    }
}
