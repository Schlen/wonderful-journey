<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    //
    public function home(){

        $var = Article::paginate(12);

        return view('home',[
            'articles' => $var
        ]);
    }

    public function aboutUs(){
        return view('about-us');
    }
}
