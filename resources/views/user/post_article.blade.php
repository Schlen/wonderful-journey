@extends('template')

@section('content')

    
<div class="box">
    <h1 style="font-weight: normal">New Blog</h1>
    <form role="form" method="POST" action="{{ url('/create') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
        
        <div class="label">Title</div>
        <div class="input"><input type="text" name="title" id=""></div>

        <div class="label">Category</div>
        <div class="input">
            <select name="category">
                @foreach (\App\Category::all() as $item)
                    <option value="{{$item->name}}">{{$item->name}}</option> 
                @endforeach
                <option value="-">others</option>
            </select>
        </div>

        <div class="input">
            <input type="text" id="others" name="other" placeholder="Insert new category if you choose 'others' in category">
        </div>

        <div class="label">Image</div>
        <div class="input">
            <input type="file" name="articleImage" accept="image/*">
        </div>

        <div class="label">Story</div>
        <div class="input"><textarea name="story" id="" cols="45" rows="15"></textarea></div>
    
        <div style="color:red; margin-bottom:15px;">
            @if($errors->any())
                {{$errors->first()}}
            @endif
        </div>

        <button type="submit" value="post" class="button">Post</Button>  

    </form>
</div>

@endsection