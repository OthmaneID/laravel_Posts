<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Posts app</title>
</head>
<body class="bg-gray-200">


    <nav class="p-6 bg-white flex justify-between mb-6 " >
        <ul class="flex items-center">
            <li>
                <a href="{{ route('home') }}" class ="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class ="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class ="p-3">Posts</a>
            </li>
        </ul>

        <ul class="flex items-center">

            @if(auth()->user())
            <li>
                <a href="" class ="p-3"> {{ auth()->user()->username }} </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post" class="p-3 inline" >
                    @csrf
                    <button type="submit" >logout</button>
                </form>
            </li>

            @else

            <li>
                <a href="{{ route('login') }}" class ="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class ="p-3">Register</a>
            </li>
        @endif
        </ul>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>