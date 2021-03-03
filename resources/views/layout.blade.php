<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset("/css/app.css")}}">
    <link rel="icon" href="{{ URL::asset('/images/favicon.ico') }}" type="image/x-icon"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="bg-smoke-light flex flex-col flex-1 justify-center h-screen mx-10 p-2.5 bg-yellow-50">

    <x-layout.header>
    </x-layout.header>
    @auth
        @yield("opciones")
    @endauth
    @yield("contenido")
    <x-layout.footer>
    </x-layout.footer>
</div>
@yield("script")
</body>
</html>