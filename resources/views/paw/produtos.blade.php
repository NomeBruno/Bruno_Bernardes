<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Paw Petshop</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <nav class="menu-container">
        <div class="titulo">
            <i class="fa-solid fa-paw logo"></i> PAW PETSHOP
        </div>

        <div class="pesquisar">
            <i class="fa-solid fa-magnifying-glass icone-pesquisa"></i>
            <input type="search" placeholder="Buscar produtos...">
        </div>

        <div class="menu">
            <ul style="align-items: center;">
                <li><a href="{{ url('/paw') }}">Início</a></li>
                <li><a href="{{ url('/estetica') }}">Estética</a></li>
                <li><a href="{{ url('/veterinaria') }}">Veterinaria</a></li>
                <li>
                    <button type="button" class="btn-card" id="btn-abrir-carrinho" style="margin-top: 0;"><i
                            class="fa-solid fa-cart-shopping"></i>
                        Carrinho
                    </button>
                </li>
            </ul>
        </div>
    </nav>

    <main class="conteudo-principal pagina-produtos">

        <section class="banner-base banner-produtos-topo">
            <div class="banner-conteudo">
                <h1>Produtos Paw Petshop</h1>
                <p>Encontre tudo o que seu melhor amigo precisa em um só lugar.<br>
                    Selecionamos os melhores itens de nutrição, higiene e diversão.<br>
                    Qualidade garantida com preços que você e seu pet vão amar.</p>
            </div>
        </section>


        <section class="produtos-section" id="produtos">
            <h2 class="subtitulo-sessao">Nossos Produtos</h2>
            <div class="produtos-container">
                @foreach($produtos as $produto)
                    <div class="produto-card">
                        @if($produto['desconto'])
                            <div class="produto-badge">{{ $produto['desconto'] }}</div>
                        @endif

                        <div class="produto-img-box">
                            <img src="{{ asset('img/' . $produto['imagem']) }}" alt="{{ $produto['nome'] }}">
                        </div>

                        <div class="produto-info">
                            <span class="produto-categoria">{{ $produto['categoria'] }}</span>
                            <h3 class="produto-nome">{{ $produto['nome'] }}</h3>

                            <div class="produto-preco-box">
                                @if($produto['preco_antigo'])
                                    <span class="preco-antigo">{{ $produto['preco_antigo'] }}</span>
                                @endif
                                <span class="preco-atual">{{ $produto['preco_atual'] }}</span>
                            </div>

                            <button class="btn-comprar">
                                <i class="fa-solid fa-cart-shopping"></i> Adicionar
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <dialog id="modal-carrinho" class="carrinho-modal">
            <div class="modal-header">
                <h2><i class="fa-solid fa-cart-shopping"></i> Seu Carrinho</h2>
                <button id="btn-fechar-carrinho" class="btn-fechar"><i class="fa-solid fa-xmark"></i></button>
            </div>

            <div class="modal-body">
                <p class="carrinho-vazio">Seu carrinho está vazio no momento.</p>
            </div>

            <div class="modal-footer">
                <button class="btn-finalizar">Finalizar Compra</button>
            </div>
        </dialog>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/paw.js') }}"></script>
</body>

</html>