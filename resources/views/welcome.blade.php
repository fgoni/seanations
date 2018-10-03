<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sea Nations</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div>
    <nav class="flex justify-around">
        <div>
            <a href="">Fleet</a>
            <a href="">Industries</a>
            <a href="">Market</a>
        </div>
        <div class="">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>
    <div class="flex justify-center flex-col">
        <div class="block text-4xl leading-tight self-center">
            Sea Nations
        </div>
        <div class="flex justify-center block">
            <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ url('register') }}" class="btn btn-primary">Register</a>
        </div>
    </div>
</div>
</body>
</html>
