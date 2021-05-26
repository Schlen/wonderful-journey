<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Storage;
use App\Article;

class ArticleController extends Controller
{
    //
    public function article(Article $article){
        return view('article',[
            'article' => $article
        ]);
    }

    public function postArticleForm(){
        if(Auth::user() == null)
            return redirect()->route('home');
        return view ('user.post_article');
    }

    public function postArticle(Request $request){
        if(Auth::user() == null)
            return redirect()->route('home');

        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'articleImage' => 'required',
            'story' => 'required'
        ]);

        
        $article = Article::store($request);
        
        return view ('article',[
            'article'=>$article
        ])->with('alert','Post Article Success!!');
    }

    public function deleteArticle (Article $article){
        if(Auth::user() == null)
            return redirect()->route('home');

        Storage::disk('public')->delete($article->image);
        $article->delete();

        return redirect()->route('blog')->with('alert','Delete Article Success!!');
    }
}
