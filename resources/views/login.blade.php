@extends('template')

@section('content')
    <div class="box">
        <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
            
            <div class="label">Login as</div>
            <div class="input">
                <select name="role">
                    <option value="User" selected>User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>

            <div class="label">Email</div>
            <div class="input"><input type="text" name="email" id="" ></div>

            <div class="label">Password</div>
            <div class="input"><input type="password" name="password" id="" style="border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;border: 0;"></div>
            
            <div style="color:red; margin-bottom:15px;">
                @if($errors->any())
                    {{$errors->first()}}
                @endif
            </div>

            <button type="submit" value="login" class="button">Login</Button>  
    </div>
@endsection