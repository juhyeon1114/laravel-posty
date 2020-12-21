<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Posty</title>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href="{{ route('home') }}" class="p-3">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
            <li><a href="{{ route('post') }}" class="p-3">Post</a></li>
        </ul>

        <ul class="flex items-center">
            <!-- @if (auth()->user())
                <li><a href="" class="p-3">MyName</a></li>
                <li><a href="" class="p-3">Logout</a></li>
            @else
                <li><a href="" class="p-3">Login</a></li>
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endif -->

            @auth
                <li>
                    <a href="" class="p-3">
                        {{ auth()->user()->name }}
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST"  class="p-3 inline">
                        @csrf
                        <button class="p-3" type="submit">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="{{ route('login') }}" class="p-3">Login</a></li>
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>