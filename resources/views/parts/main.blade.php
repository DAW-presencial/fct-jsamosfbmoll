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

    <nav>
        <a href="{{ route('index') }}">Página principal</a>
        <ul>
            <li><a href="{{ route('coordinador') }}">Coordinadores</a></li>
            <li><a href="{{ route('tutor') }}">Tutores</a></li>
            <li><a href="{{ route('empresa') }}">Empresas</a></li>
            <li><a href="{{ route('centro-de-trabajo') }}">Centros de trabajo</a></li>
            <li><a href="{{ route('representante') }}">Representantes</a></li>
        </ul>
    </nav>

    @yield('main')
</body>
</html>