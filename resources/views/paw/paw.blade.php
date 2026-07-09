@extends('layouts.paw-home')

@section('title', 'Página Inicial')

@section('content')
    <main class="conteudo-principal">

        <!-- SEÇÃO HERO (BANNER DE ENTRADA) -->
        <section class="banner-base banner-inicio-topo" id="inicio">
            <div class="banner-conteudo">
                <h1>O cuidado que o seu melhor amigo merece</h1>
                <p>Oferecemos os melhores serviços de estética, saúde e produtos exclusivos<br>
                    para garantir o bem-estar e a felicidade do seu pet.<br>
                    Agende um horário e proporcione o melhor para ele.</p>
                <button type="button" class="btn-principal" id="btn-abrir-agendamento">Agendar Horário</button>
            </div>
        </section>

        <dialog id="modal-agendamento" class="modal-agendamento">
            <div class="modal-conteudo">
                <h2>O que deseja agendar?</h2>
                <div class="opcoes-agendamento">
                    <a href="{{ url('/estetica') }}" class="btn-opcao">
                        <i class="fa-solid fa-scissors"></i> Estética Canina
                    </a>
                    <a href="{{ url('/veterinaria') }}" class="btn-opcao">
                        <i class="fa-solid fa-stethoscope"></i> Consulta Veterinária
                    </a>
                </div>
                <button id="btn-fechar-modal" class="btn-fechar-modal">Fechar</button>
            </div>
        </dialog>

        <!-- SEÇÃO DOS CARROSSEL -->
        <section class="carrossel-section" id="promocao">
            <div class="carrossel-wrapper">

                <h1>Promoções</h1>

                <button class="seta-carrossel seta-esquerda" id="btn-prev">&#10094;</button>
                <button class="seta-carrossel seta-direita" id="btn-next">&#10095;</button>

                <div class="carrossel-container" id="carrossel-slides">
                    <div class="slide bg-slide-1">
                        <div class="slide-conteudo">
                            <h2>Promoção Banho & Tosa</h2>
                            <p>Agende uma sessão e deixe seu pet 30% mais cheiroso e relaxado.</p>
                            <button type="button" class="btn-card"
                                onclick="window.location.href='{{ url('/estetica') }}'">AGENDAR</button>
                        </div>
                    </div>

                    <div class="slide bg-slide-2">
                        <div class="slide-conteudo">
                            <h2>Rações Premium com Desconto</h2>
                            <p>Até 20% OFF na primeira compra de nutrição selecionada.</p>
                            <button type="button" class="btn-card"
                                onclick="window.location.href='{{ url('/produtos ') }}'">COMPRAR</button>
                        </div>
                    </div>

                    <div class="slide bg-slide-3">
                        <div class="slide-conteudo">
                            <h2>Veterinário 24h</h2>
                            <p>Sempre prontos para cuidar da saúde do seu companheiro.</p>
                            <p>50% para dois ou mais pets no mesmo dia.</p>
                            <button type="button" class="btn-card"
                                onclick="window.location.href='{{ url('/veterinaria') }}'">SAIBA MAIS</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEÇÃO DE SERVIÇOS (CARDS) -->
        <section class="servicos-section" id="servicos">
            <h2 class="subtitulo-sessao">Nossos Serviços</h2>

            <div class="cards-container">

                <div class="card">
                    <div class="card-icone"><i class="fa-solid fa-soap"></i></div>
                    <h3>Estética Canina</h3>
                    <p>Banhos terapêuticos, tosa higiênica e hidratação de pelagem com produtos de alta qualidade.</p>
                    <button type="button" class="btn-card" onclick="window.location.href='{{ url('/estetica') }}'">SAIBA
                        MAIS</button>
                </div>


                <div class="card">
                    <div class="card-icone"><i class="fa-solid fa-stethoscope"></i></div>
                    <h3>Veterinária</h3>
                    <p>Consultas preventivas, aplicação de vacinas e acompanhamento focado na longevidade do pet.</p>
                    <button type="button" class="btn-card" onclick="window.location.href='{{ url('/veterinaria') }}'">SAIBA
                        MAIS</button>
                </div>


                <div class="card">
                    <div class="card-icone"><i class="fa-solid fa-bone"></i></div>
                    <h3>Produtos</h3>
                    <p>Uma seleção rigorosa de rações premium, brinquedos interativos e acessórios confortáveis.</p>
                    <button type="button" class="btn-card" onclick="window.location.href='{{ url('/produtos') }}'">SAIBA
                        MAIS</button>
                </div>
            </div>
        </section>

        <!-- CARDS PROTUTOS -->
        <section class="produtos-section" id="produtos">
            <h2 class="subtitulo-sessao">Destaques do Mês</h2>

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
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn-card" onclick="window.location.href='{{ url('/produtos') }}'">
                Mais
            </button>
        </section>

    </main>
@endsection