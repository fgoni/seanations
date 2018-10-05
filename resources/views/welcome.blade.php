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
            <a href="{{ url('login') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-blue-lightest bg-blue hover:bg-blue-light">Login</a>
            <a href="{{ url('register') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-blue-lightest bg-blue hover:bg-blue-light">Register</a>
        </div>
    </div>
</div>
</body>
</html>
