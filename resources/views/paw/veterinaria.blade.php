<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinária - Paw Petshop</title>
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
                <li><a href="{{ url('/estetica') }}">Estética</a></li>
            </ul>
        </div>
    </nav>

    <main class="conteudo-principal pagina-veterinaria">

        <section class="banner-base banner-vet-topo">
            <div class="banner-conteudo">
                <h1>Clínica Veterinária Paw</h1>
                <p>Consultas preventivas, vacinação e exames com o carinho que seu pet merece.<br>
                    Uma estrutura completa dedicada à saúde, proteção e longevidade do seu melhor amigo.<br>
                    Agende um horário e garanta um acompanhamento especializado para quem você ama.</p>
                <a href="#agendamento-vet" class="btn-principal">Agendar Consulta</a>
            </div>
        </section>

        <section class="detalhe-servico-section">
            <h2 class="subtitulo-sessao">Cuidados Veterinários</h2>
            <p class="descricao-abertura">Uma estrutura completa dedicada à prevenção, diagnóstico e tratamento para
                garantir que o seu companheiro viva uma vida longa, saudável e feliz.</p>

            <div class="servicos-veterinaria-grid">

                <div class="vet-item-card">
                    <div class="item-icone"><i class="fa-solid fa-user-doctor"></i></div>
                    <h3>Consultas Preventivas</h3>
                    <p>Avaliações de rotina completas para acompanhar o desenvolvimento, peso e saúde geral do seu pet,
                        detectando qualquer alteração precocemente.</p>
                </div>

                <div class="vet-item-card">
                    <div class="item-icone"><i class="fa-solid fa-syringe"></i></div>
                    <h3>Vacinação e Imunização</h3>
                    <p>Aplicação de vacinas essenciais (V10, V8, Antirrábica, Quádrupla Felina) utilizando as melhores
                        marcas do mercado para manter o sistema imunológico protegido.</p>
                </div>

                <div class="vet-item-card">
                    <div class="item-icone"><i class="fa-solid fa-microscope"></i></div>
                    <h3>Exames Laboratoriais</h3>
                    <p>Coleta de exames de sangue, fezes e urina com análises rápidas para diagnósticos precisos sem
                        estressar o animal.</p>
                </div>

            </div>

        </section>

        <section class="agendamento-section" id="agendamento-vet">
            <h2 class="subtitulo-sessao">Marcar uma Consulta</h2>
            <p class="descricao-abertura">Escolha o melhor dia e horário. Nossa equipe entrará em contato para confirmar
                a disponibilidade.</p>

            <div class="agendamento-container">
                <form action="#" method="POST" class="form-agendamento">
                    @csrf

                    <div class="form-grid">
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
                            <input type="text" id="nome_pet" name="nome_pet" placeholder="Ex: Thor" required>
                        </div>

                        <div class="form-grupo">
                            <label for="tipo_atendimento">Tipo de Atendimento</label>
                            <select id="tipo_atendimento" name="tipo_atendimento" required>
                                <option value="" disabled selected>Selecione uma opção...</option>
                                <option value="rotina">Consulta de Rotina / Check-up</option>
                                <option value="vacina">Aplicação de Vacinas</option>
                                <option value="retorno">Retorno Médico</option>
                            </select>
                        </div>

                        <div class="form-grupo">
                            <label for="data_consulta">Data Desejada</label>
                            <input type="date" id="data_consulta" name="data_consulta" required>
                        </div>

                        <div class="form-grupo">
                            <label for="hora_consulta">Horário Desejado</label>
                            <input type="time" id="hora_consulta" name="hora_consulta" required>
                        </div>
                    </div>

                    <div class="form-grupo full-width">
                        <label for="sintomas">Histórico ou Sintomas (Opcional)</label>
                        <textarea id="sintomas" name="sintomas" rows="4"
                            placeholder="Caso o pet apresente algum sintoma, comportamento diferente ou precise de uma vacina específica, relate aqui..."></textarea>
                    </div>

                    <div class="form-botao-box">
                        <button type="submit" class="btn-principal">Solicitar Consulta</button>
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

</body>

</html>