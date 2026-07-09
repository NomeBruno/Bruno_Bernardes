<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/curriculo.css') }}">
    <title>@yield('title', 'Meu Projeto')</title>
</head>

<body>

    <main>
        @yield('content')
    </main>

</body>

</html>