@extends('template')

@section('content')
    <div class="article-content">
        <div class="judul">
            {{$article->title}}
            @if (Auth::user())
                @if (Auth::user()->role == "Admin" || Auth::id() == $article->User->id)
                    <a href="/article/delete/{{$article->id}}" class="link">
                        <button class="button" style="float: right;"> 
                            Delete
                        </button> 
                    </a> 
                @endif
            @endif
        </div>
        <div class="category">
            Category: <a href="{{url('/category/'.$article->Category->name)}}">{{$article->Category->name}}</a>
            </div>
        <div class="image">
            <img src="{{asset($article->image)}}" alt="">
        </div>
        <div class="description">
            {{$article->description}}    
        </div>
        <button class="button"><a href="{{url()->previous()}}" class="link">Back</a></button>
    </div>
@endsection