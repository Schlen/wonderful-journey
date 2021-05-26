@extends('template')

@section('content')
    <div class="box">
        <form role="form" method="POST" action="{{ url('/profile/update') }}">
        {{ csrf_field() }}

            <div class="label">Name</div>
            <div class="input"><input type="text" name="name" id="" value="{{Auth::user()->name}}"></div>

            <div class="label">Email</div>
            <div class="input"><input type="text" name="email" id="" value="{{Auth::user()->email}}"></div>

            <div class="label">Phone</div>
            <div class="input"><input type="text" name="phone" id="" value="{{Auth::user()->phone}}"></div>
        
            <button type="submit" value="update" class="">Update</Button>  
    </div>
@endsection