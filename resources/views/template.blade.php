<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <title>Document</title>
    
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>

    <style>

    </style>
</head>
<body class="body">
    <div class="header">
        <div class="nav">
            <div class="left-nav-bar">
                <ul>
                    <a href="{{url('/')}}"><li>Home</li></a>

                    @guest
                        <li style="min-width:120px">
                            <a href="{{url('/category')}}" class="link">Category</a>
                            <ul>
                                @for ($i = 1; $i <= 4; $i++)
                                    @php
                                        $item = App\Category::find($i);
                                    @endphp
                                    @if ($item != null)
                                        <a href="{{url('/category/'.$item->name)}}">
                                            <li>{{$item->name}}</li>
                                        </a>
                                    @endif
                                @endfor
                            </ul>
                        </li>
                        <a href="{{url('/about-us')}}" class="link"><li>About Us</li></a>    
                    @endguest
                    @auth
                        @if (Auth::user()->role == "Admin")
                            <a href="{{url('/profile')}}" class="link"><li>Admin</li></a>
                            <a href="{{url('/admin/user')}}" class="link"><li>User</li></a>
                        @else
                            <a href="{{url('/profile')}}" class="link"><li>Profile</li></a>
                            <a href="{{url('/blog')}}" class="link"><li>Blog</li></a>
                        @endif
                    @endauth
                </ul>
            </div>
            <div class="right-nav-bar">
                <ul>
                    @guest
                        <a href="{{url('/register')}}" class="link">
                            <li>
                                <div class="one-line">
                                    <div class="img"><img src="{{asset('image/icon/user.jpg')}}" alt=""></div>
                                    Sign Up
                                </div>
                            </li>
                        </a>
                        <a href="{{url('/login')}}" class="link">
                            <li>
                                <div class="one-line">
                                    <div class="img-login"><img src="{{asset('image/icon/login.png')}}" alt=""></div>
                                    Login
                                </div>
                            </li>
                        </a>
                    @endguest
                    @auth
                    <a href="{{url('/logout')}}" class="link">
                        <li>
                            <div class="one-line">
                                <div class="img-login"><img src="{{asset('image/icon/login.png')}}" alt=""></div>
                                Logout
                            </div>
                        </li>
                    </a>
                    @endauth
                </ul>
            </div>
        </div>
    </div>

    <div class="welcome">
        <h1 class="h1">Wonderful Journey</h1>
        <h3 class="h3">Blog of Indonesia Tourism</h3>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>