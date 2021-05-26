@extends('template')

@section('content')
    <div class="box">
        <a href="/create" class="link">
            <button class="button create-button" style="outline: none"> + Create Blog</button>  
        </a>

        <table class="userTable">
            <thead>
                <tr>
                    <th> <label for="" class="table-header">Title</label> </th>
                    <th> <label for="" class="table-header">Action</label> </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($article as $item)
                    <tr>
                        <td> 
                            <a href="{{url('/article/'.$item->id)}}" class="link">
                                {{$item->title}}
                            </a>
                        </td>
                        <td>
                            <a href="/article/delete/{{$item->id}}" class="link">
                                <button class="button"> 
                                    Delete
                                </button> 
                            </a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="navigation">
            {{$article->links()}}
        </div>
    </div>

@endsection