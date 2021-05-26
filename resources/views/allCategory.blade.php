@extends('template')

@section('content')

    @foreach ($categories as $category)
        @if ($category->Article->count() != 0)
            <div class="judul-category">
                {{$category->name}}
            </div>
            
            <div class="articles">
                @php
                    $j = 1;
                @endphp
                @foreach ($category->Article as $item)
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
                    </div>
                    @php
                        $j += 1;
                        if($j==3)break;
                    @endphp
                @endforeach
            </div>           
        @endif
    @endforeach

@endsection