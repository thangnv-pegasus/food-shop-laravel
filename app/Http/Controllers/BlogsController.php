<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //

    public function create(){
        return view('pages.blogs',[
            'blogs' => Blog::paginate(6)
        ]);
    }
}
