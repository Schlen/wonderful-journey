<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;

class Article extends Model
{

    public static function store(Request $request){
        $article = new \App\Article;

        if($request->category == "-"){
            $category = \App\Category::where('name',$request->other)->first();
            if($category == null){
                $category = new \App\Category;
                $category->name = $request->other;
                $category->save();
            }
        }else{
            $category = \App\Category::where('name',$request->category)->first();
        }
        
        $article->user_id = Auth::id();
        $article->category_id = $category->id;
        $article->title = $request->title;
        $article->description = $request->story;

        $path = $request->file('articleImage')->store('/image/', 'public');
        $article->image = "storage/".$path;

        $article->save();

        return $article;
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
