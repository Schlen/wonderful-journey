@extends('template')

@section('content')
    <div class="box">
        <table class="adminTable">
            <thead>
                <tr>
                    <th> <label for="" class="table-header">Title</label> </th>
                    <th> <label for="" class="table-header">Email</label> </th>
                    <th> <label for="" class="table-header">Action</label> </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td> 
                            <a href="/admin/user/{{$item->id}}" class="link">{{$item->name}}</a>                            
                        </td>
                        <td>
                            {{$item->email}}
                        </td>
                        <td>
                            <button class="button"> 
                                <a href="/admin/delete/{{$item->id}}" class="link">Delete</a>
                            </button>  
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection