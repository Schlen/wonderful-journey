<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function allCategory(){
        $var = Category::all();

        return view('allCategory',[
            'categories' => $var
        ]);
    }

    public function category($category){
        
        $category = Category::where('name', $category)->first();

        dd($category);
        dd($category->getName());

        return view('category',[
            'category' => $category
        ]);
    }
}
