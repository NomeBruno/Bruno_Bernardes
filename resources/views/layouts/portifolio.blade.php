<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bruno.css') }}">
    <title>@yield('title', 'Meu Projeto')</title>
</head>

<body>

    <header class="menu-container">
        <div class="titulo">Bruno<span>Bernardes</span></div>
        <nav class="nav-links">
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Bruno Bernardes. Todos os direitos reservados.</p>
    </footer>

</body>

</html>