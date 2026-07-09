@extends('layouts.portifolio')

@section('title', 'Bruno Bernardes')

@section('content')
    <main class="geral" id="geral">

        <section id="inicio" class="secao-apresentacao">
            <div class="conteudo-home">
                <h2>Olá, eu sou o Bruno</h2>
                <p class="subtitulo">Desenvolvedor Front-End & Designer</p>
                <p class="descricao">Seja bem-vindo ao meu portfólio. Aqui você encontra os meus principais projetos e
                    tecnologias com as quais trabalho.</p>
            </div>
        </section>

        <section id="projetos" class="secao-projetos">
            <h3 class="titulo-secao">Meus Projetos</h3>
            <div class="grid-projetos">

                <div class="grid-projetos">
                    @foreach($projetos as $projeto)
                        <div class="card-projeto">
                            <div class="capa-projeto">
                                <img src="{{ asset($projeto['imagem']) }}" alt="{{ $projeto['nome'] }}">
                            </div>

                            <h4><i class="{{ $projeto['icone'] }}"></i> {{ $projeto['nome'] }}</h4>
                            <p>{{ $projeto['descricao'] }}</p>
                            <a href="{{ $projeto['link'] }}" target="{{ $projeto['target'] }}">Visualizar Código</a>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <section id="contato" class="secao-contato">
            <h3 class="titulo-secao">Vamos conversar?</h3>
            <p>Se você tem um projeto em mente ou quer trocar uma ideia, entre em contato!</p>
            <div class="links-contato">
                <a href="mailto:brunobcruzjovem@gmail.com">E-mail</a>
                <a href="https://www.linkedin.com/in/bruno-bernardes-868593198/" target="_blank">LinkedIn</a>
                <a href="https://github.com/NomeBruno?tab=repositories" target="_blank">GitHub</a>
            </div>
        </section>

    </main>
@endsection