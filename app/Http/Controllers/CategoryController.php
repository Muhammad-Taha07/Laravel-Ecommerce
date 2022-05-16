<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Viewing Category Page
    public function index()
    {
        $data = Category::all();
        return view('admin.categories.categories', ['data'=>$data]);
    }


}
