<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/styles/style.css') }}">
    <title>FCT</title>
</head>
<body>

    <nav><a href="{{ route('index') }}">Página principal</a></nav>

    @yield('main')
</body>
</html>