<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>@yield('title', 'Meu Projeto')</title>
</head>

<body>

    <header class="menu-container">
        <div class="titulo">
            <span class="logo"><i class="fa-solid fa-paw"></i></span>
            PAW PETSHOP
        </div>

        <nav class="menu">
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#promocao">Promoções</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#produtos">Produtos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="rodape" id="contato">
        <p>&copy; 2026 Paw Petshop. Todos os direitos reservados.</p>
        <div>
            <p><a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i> (99)99999-9999</a></p>
            <p><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i> @paw_pet</a></p>
        </div>
    </footer>

    <script src="{{ asset('js/paw.js') }}"></script>

</body>

</html>