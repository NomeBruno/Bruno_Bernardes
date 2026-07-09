<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estética Canina - Paw Petshop</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <nav class="menu-container">
        <div class="titulo">
            <i class="fa-solid fa-paw logo"></i> PAW PETSHOP
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ url('/paw') }}">Início</a></li>
                <li><a href="{{ url('/produtos') }}">Produtos</a></li>
                <li><a href="{{ url('/veterinaria') }}">Veterinaria</a></li>
            </ul>
        </div>
    </nav>

    <main class="conteudo-principal pagina-estetica">

        <section class="banner-base banner-estetica-topo">
            <div class="banner-conteudo">
                <h1>Estética Canina Premium</h1>
                <p>Tratamentos especializados com foco total no bem-estar do seu pet.<br>
                    Do banho relaxante à tosa estilizada, usamos produtos de alta linha.<br>
                    Agende um horário e veja a transformação do seu companheiro.</p>
                <a href="#agendamento" class="btn-principal">Agendar Banho e Tosa</a>
            </div>
        </section>

        <section class="detalhe-servico-section">
            <h2 class="subtitulo-sessao">Estética Canina</h2>
            <p class="descricao-abertura">Cuidamos da higiene, beleza e bem-estar do seu pet com profissionais
                qualificados e produtos de primeira linha.</p>

            <div class="servicos-estetica-grid">

                <div class="estetica-item-card">
                    <div class="item-icone"><i class="fa-solid fa-shower"></i></div>
                    <h3>Banhos Terapêuticos</h3>
                    <p>Banhos relaxantes com shampoos específicos para cada tipo de pelagem e pele, incluindo
                        tratamentos para peles sensíveis ou com alergias.</p>
                </div>

                <div class="estetica-item-card">
                    <div class="item-icone"><i class="fa-solid fa-scissors"></i></div>
                    <h3>Tosa Higiênica e Estilizada</h3>
                    <p>Remoção de pelos excessivos nas regiões sanitárias para melhor higiene, além de tosas completas
                        adaptadas à raça do seu cão.</p>
                </div>

                <div class="estetica-item-card">
                    <div class="item-icone"><i class="fa-solid fa-droplet"></i></div>
                    <h3>Hidratação de Pelagem</h3>
                    <p>Tratamentos profundos de nutrição capilar que devolvem o brilho, a maciez e evitam o embaraço dos
                        pelos longos.</p>
                </div>

            </div>



        </section>


        <section class="antes-depois-section">
            <h2 class="subtitulo-sessao">Resultados Reais</h2>
            <p class="descricao-abertura">Arraste a barra central ou aguarde o carrossel automático para ver a
                transformação dos nossos clientes.</p>


            <div class="antes-depois-carrossel">

                @foreach($transformacoes as $index => $pet)

                    <div class="antes-depois-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="comparador-container">

                            <img src="{{ asset('img/' . $pet['depois']) }}"
                                alt="Depois do serviço no {{ $pet['nome_pet'] }}" class="img-depois">


                            <div class="img-antes-box">
                                <img src="{{ asset('img/' . $pet['antes']) }}"
                                    alt="Antes do serviço no {{ $pet['nome_pet'] }}" class="img-antes">
                            </div>


                            <div class="divisor-handle">
                                <i class="fa-solid fa-arrows-left-right"></i>
                            </div>
                        </div>
                        <h4 class="legenda-caso">Transformação {{ $pet['id'] }}: {{ $pet['nome_pet'] }}
                            ({{ $pet['servico'] }})</h4>
                    </div>
                @endforeach

            </div>


            <div class="carrossel-indicadores">
                @foreach($transformacoes as $index => $pet)
                    <span class="bola {{ $index == 0 ? 'active' : '' }}" onclick="mudarCaso({{ $index }})"></span>
                @endforeach
            </div>
        </section>

        <section class="agendamento-section" id="agendamento">
            <h2 class="subtitulo-sessao">Agende um Horário</h2>
            <p class="descricao-abertura">Preencha os dados abaixo e garanta o melhor momento para o cuidado e bem-estar
                do seu melhor amigo.</p>

            <div class="agendamento-container">
                <form action="#" method="POST" class="form-agendamento">
                    @csrf <div class="form-grid">
                        <div class="form-grupo">
                            <label for="nome_tutor">Seu Nome</label>
                            <input type="text" id="nome_tutor" name="nome_tutor" placeholder="Ex: Bruno Bernardes"
                                required>
                        </div>

                        <div class="form-grupo">
                            <label for="whatsapp">Seu WhatsApp</label>
                            <input type="tel" id="whatsapp" name="whatsapp" placeholder="Ex: (51) 99999-9999" required>
                        </div>

                        <div class="form-grupo">
                            <label for="nome_pet">Nome do Pet</label>
                            <input type="text" id="nome_pet" name="nome_pet" placeholder="Ex: Bob" required>
                        </div>

                        <div class="form-grupo">
                            <label for="servico_estetica">Serviço Desejado</label>
                            <select id="servico_estetica" name="servico_estetica" required>
                                <option value="" disabled selected>Selecione um serviço...</option>
                                <option value="banho">Banho Terapêutico</option>
                                <option value="tosa">Tosa Higiênica / Estilizada</option>
                                <option value="completo">Combo: Banho + Tosa + Hidratação</option>
                            </select>
                        </div>

                        <div class="form-grupo">
                            <label for="data_agendamento">Data Ideal</label>
                            <input type="date" id="data_agendamento" name="data_agendamento" required>
                        </div>

                        <div class="form-grupo">
                            <label for="hora_agendamento">Horário Ideal</label>
                            <input type="time" id="hora_agendamento" name="hora_agendamento" required>
                        </div>
                    </div>

                    <div class="form-grupo full-width">
                        <label for="observacoes">Observações (Alergias, temperamento ou preferências)</label>
                        <textarea id="observacoes" name="observacoes" rows="4"
                            placeholder="Conte-nos um pouco sobre as necessidades do seu pet..."></textarea>
                    </div>

                    <div class="form-botao-box">
                        <button type="submit" class="btn-principal">Solicitar Agendamento</button>
                    </div>
                </form>
            </div>
        </section>

    </main>

    <footer class="rodape">
        <span>© 2026 Paw Petshop. Todos os direitos reservados.</span>
        <div>
            <a href="{{ url('/') }}">Início</a>
            <a href="{{ url('/produtos') }}">Produtos</a>
        </div>
    </footer>
    <script src="{{ asset('js/paw.js') }}"></script>
</body>

</html>