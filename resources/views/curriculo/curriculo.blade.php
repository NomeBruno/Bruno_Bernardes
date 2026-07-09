@extends('layouts.curriculo-app')

@section('title', 'Bruno Bernardes')

@section('content')
    <div class="geral">
        <div class="container-lateral">
            <div class="conteudo-lateral">
                <div class="circulo-avatar">
                    <img src="img/foto.jpeg" alt="">
                </div>

                <div class="secao-lateral">
                    <h3>Links</h3>
                    <p><a href="https://github.com/NomeBruno" target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
                    </p>
                    <p><a href="https://www.linkedin.com/in/bruno-bernardes-868593198" target="_blank"><i
                                class="fa-brands fa-linkedin"></i> LinkedIn</a></p>
                    <p><a href="https://wa.me/5551993641718" target="_blank"><i class="fa-brands fa-whatsapp"></i>
                            (51)99364-1718</a></p>
                </div>

                <div class="secao-lateral">
                    <h3>Idiomas</h3>
                    <p>Português (Nativo)</p>
                    <p>Inglês (Técnico / Intermediário)</p>
                </div>

                <div class="secao-lateral">
                    <h3>Sistemas</h3>
                    <p><i class="fa-brands fa-linux"></i> Linux (Zorin/Ubuntu)</p>
                    <p><i class="fa-brands fa-square-whatsapp"></i> Windows 10 / 11</p>
                </div>
            </div>
        </div>

        <div class="container">
            <h1>Bruno Bernardes da Cruz</h1>

            <p class="texto"><span>Localização:</span> Porto Alegre</p>
            <p class="texto"><span>E-mail:</span> brunobcruzjovem@gmail.com</p>


            <h2>Objetivo Profissional</h2>

            <p class="texto">Atuar na área de Suporte Técnico, Desenvolvimento Web (Estágio/Júnior) ou Auxiliar
                Administrativo,
                aplicando meus conhecimentos em informática, rotinas administrativas e manutenção para colaborar com o
                crescimento da empresa e o desenvolvimento de soluções eficientes.
            </p>

            <h2>Formação Acadêmica</h2>

            <ul>
                <li>
                    <span>Técnico em Informática para Internet (Cursando)</span>
                    <p class="texto">QI Faculdade e Escola Técnica | Período: 02/2025 até 08/2026</p>
                </li>
                <li>
                    <span>Ensino Médio Completo</span>
                    <p class="texto">Escola Estadual Japão</p>
                </li>
            </ul>

            <h2>Experiência Profissional</h2>

            <h3>Ruah Veículos Ltda.</h3>
            <p class="texto italico">Cargo: Auxiliar Administrativo (2017-2018)</p>
            <ul>
                <li>Atuação na organização e controle de estoque do setor de peças, verificando os itens.</li>
                <li>Digitalização, classificação e arquivamento de documentos para o setor de contabilidade.</li>
                <li>Suporte às rotinas do setor financeiro, com foco no fluxo de contas a pagar</li>
            </ul>

            <h3>STIMMMEPA – Escola José César de Mesquita</h3>
            <p class="texto italico">Cargo: Auxiliar de Manutenção Eletroeletrônica (2019 – 2020)</p>
            <ul>
                <li>Manutenção corretiva e preventiva de instalações elétricas e eletrônicas.</li>
                <li>Execução de serviços como troca de lâmpadas, conserto de tomadas e chuveiros, e instalação de
                    luminárias.
                </li>
            </ul>

            <h2>Cursos e Certificações</h2>
            <li><span>Auxiliar Administrativo</span>
                <p class="texto">SENAC (Completo)</p>
            </li>
            <li><span>Auxiliar de Manutenção Elétrica e Eletrônica</span>
                <p class="texto">Escola José César de Mesquita (Completo)
                </p>
            </li>

            <h2>Principais Competências</h2>
            <ul>
                <li><span>Tecnologias e Ferramentas:</span>
                    <p class="texto">Conhecimentos práticos em desenvolvimento web (HTML, CSS, JavaScript, Flutter/Dart,
                        Java) e banco de dados adquiridos em ambiente acadêmico.
                    </p>
                </li>
                <li><span>Sistemas Operacionais:</span>
                    <p class="texto">Uso de Windows e distribuições Linux.</p>
                </li>
                <li><span>Rotinas de Escritório:</span>
                    <p class="texto">Gestão de documentos, digitalização, Pacote Office e controle de estoque.</p>
                </li>
                <li><span>Perfil Profissional:</span>
                    <p class="texto">Proatividade, facilidade de aprendizado tecnológico, trabalho em equipe e
                        organização.</p>
                </li>
            </ul>
        </div>

    </div>
@endsection