@extends('template')

@section('content')
    @auth
        <h1 style="font-weight: normal">Welcome Darwis Johan</h1>
    @endauth
    <div class="articles">
        @foreach ($articles as $item)
            <div class="item">
                <div class="judul">
                    {{$item->title}}
                </div>
                <div class="deskripsi">
                    @php
                        $string = $item->description;
                        $array = explode(' ', $string, 40);

                        $count = 17;
                        $end = false;
                        $word_count = str_word_count($item->description);
                        if($count > $word_count){
                            $count = $word_count;
                            $end = true;
                        }
                    @endphp 
                    
                    @for ($i = 0; $i < $count ; $i++)
                        {{$array[$i]}}
                    @endfor
                    @if (!$end)
                        ......
                    @endif
                    <a href="{{url('/article/'.$item->id)}}">full story</a>
                </div>
                <div class="category">
                Category: <a href="{{url('/category/'.$item->Category->name)}}">{{$item->Category->name}}</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="navigation">
        {{$articles->links()}}
    </div>
@endsection