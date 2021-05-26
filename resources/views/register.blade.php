@extends('template')

@section('content')
    <div class="box">
        <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
             
            <div class="label">Email</div>
            <div class="input"><input type="text" name="email" id=""></div>

            <div class="label">Name</div>
            <div class="input"><input type="text" name="username" id=""></div>

            <div class="label">Phone</div>
            <div class="input"><input type="text" name="phone" id=""></div>

            <div class="label">Password</div>
            <div class="input"><input type="password" name="password" id=""></div>
           
            <div class="label">Confirm Password</div>
            <div class="input"><input type="password" name="conf_pass" id=""></div>

            <div style="color:red; margin-bottom:15px;">
                @if($errors->any())
                    {{$errors->first()}}
                @endif
            </div>

            <button type="submit" value="signup" class="button">Sign Up</Button>  
    </div>
@endsection