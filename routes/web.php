<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projetos = [
        [
            'nome' => 'Meu Currículo',
            'icone' => 'fa-solid fa-file-lines',
            'imagem' => 'img/c1.png',
            'descricao' => 'Conheça minha trajetória profissional, minhas competências técnicas e as principais conquistas que moldaram meu desenvolvimento como Desenvolvedor Front-End.',
            'link' => '/curriculo',
            'target' => '_blank'
        ],
        [
            'nome' => 'PAW PETSHOP',
            'icone' => 'fa-solid fa-paw',
            'imagem' => 'img/paw1.png',
            'descricao' => 'Sistema completo de agendamento feito com Laravel, focado em gestão de petshops.',
            'link' => '/paw',
            'target' => '_blank'
        ],
        [
            'nome' => 'Meus outros projetos',
            'icone' => 'fa-brands fa-github',
            'imagem' => 'img/git.jpeg',
            'descricao' => 'Repositório completo com meus estudos, desafios práticos e experimentos. Aqui acompanho minha evolução técnica através de projetos que desenvolvi durante minha formação.',
            'link' => 'https://github.com/NomeBruno?tab=repositories',
            'target' => '_blank'
        ],
    ];

    return view('bruno.bruno', compact('projetos'));
});

Route::get('/paw', function () {

    $produtos = [
        [
            'nome' => 'Ração Premium Filhotes',
            'categoria' => 'Nutrição',
            'imagem' => 'ração_filhote.png',
            'preco_antigo' => 'R$ 149,90',
            'preco_atual' => 'R$ 119,90',
            'desconto' => '20% OFF'
        ],
        [
            'nome' => 'Ração Gatos Castrados',
            'categoria' => 'Nutrição',
            'imagem' => 'ração_gato.png',
            'preco_antigo' => 'R$ 129,90',
            'preco_atual' => 'R$ 109,90',
            'desconto' => '15% OFF'
        ],
        [
            'nome' => 'Ração Cachorros Castrados',
            'categoria' => 'Nutrição',
            'imagem' => 'ração2.png',
            'preco_antigo' => 'R$ 158,90',
            'preco_atual' => 'R$ 111,23',
            'desconto' => '30% OFF'
        ],
        [
            'nome' => 'Antipulgas Eficaz 10kg',
            'categoria' => 'Saúde',
            'imagem' => 'antipulgas.png',
            'preco_antigo' => 'R$ 99,90',
            'preco_atual' => 'R$ 89,90',
            'desconto' => '10% OFF'
        ]
    ];

    return view('paw.paw', compact('produtos'));
});

Route::get('/produtos', function () {
    $produtos = [
        [
            'nome' => 'Ração Premium Cachorros Filhotes',
            'categoria' => 'Nutrição',
            'imagem' => 'ração_filhote.png',
            'preco_antigo' => 'R$ 149,90',
            'preco_atual' => 'R$ 119,90',
            'desconto' => '20% OFF'
        ],
        [
            'nome' => 'Ração Premium Gatos Filhotes',
            'categoria' => 'Nutrição',
            'imagem' => 'ração1.png',
            'preco_antigo' => 'R$ 145,90',
            'preco_atual' => 'R$ 116,72',
            'desconto' => '20% OFF'
        ],
        [
            'nome' => 'Ração Gatos Castrados',
            'categoria' => 'Nutrição',
            'imagem' => 'ração_gato.png',
            'preco_antigo' => 'R$ 129,90',
            'preco_atual' => 'R$ 109,90',
            'desconto' => '15% OFF'
        ],
        [
            'nome' => 'Mordedor Borracha Nylon',
            'categoria' => 'Brinquedos',
            'imagem' => 'mordedor.png',
            'preco_antigo' => null,
            'preco_atual' => 'R$ 34,90',
            'desconto' => null
        ],
        [
            'nome' => 'Aranhador',
            'categoria' => 'Brinquedos',
            'imagem' => 'aranhador.png',
            'preco_antigo' => null,
            'preco_atual' => 'R$ 55,90',
            'desconto' => null
        ],
        [
            'nome' => 'Antipulgas Eficaz 10kg',
            'categoria' => 'Saúde',
            'imagem' => 'antipulgas.png',
            'preco_antigo' => 'R$ 99,90',
            'preco_atual' => 'R$ 89,90',
            'desconto' => '10% OFF'
        ],
        [
            'nome' => 'Coleira Para Cachorro',
            'categoria' => 'Segurança',
            'imagem' => 'coleira_cachorro.png',
            'preco_antigo' => null,
            'preco_atual' => 'R$ 8.00',
            'desconto' => null
        ],
        [
            'nome' => 'Coleira De Couro Para Cachorro',
            'categoria' => 'Segurança',
            'imagem' => 'coleira1.png',
            'preco_antigo' => null,
            'preco_atual' => 'R$ 13.00',
            'desconto' => null
        ],
        [
            'nome' => 'Coleira De Ferro Para Cachorro',
            'categoria' => 'Segurança',
            'imagem' => 'coleira2.png',
            'preco_antigo' => null,
            'preco_atual' => 'R$ 10.00',
            'desconto' => null
        ],
        [
            'nome' => 'Ração Cachorros Castrados',
            'categoria' => 'Nutrição',
            'imagem' => 'ração2.png',
            'preco_antigo' => 'R$ 158,90',
            'preco_atual' => 'R$ 111,23',
            'desconto' => '30% OFF'
        ]
    ];

    usort($produtos, function ($a, $b) {

        $compararCategoria = strcmp($a['categoria'], $b['categoria']);

        if ($compararCategoria !== 0) {
            return $compararCategoria;
        }

        return strcmp($a['nome'], $b['nome']);
    });

    return view('paw.produtos', compact('produtos'));
});

Route::get('/estetica', function () {
    $transformacoes = [
        [
            'id' => 1,
            'nome_pet' => 'Bob',
            'servico' => 'Banho, Tosa e Hidratação',
            'antes' => 'antes1.png',
            'depois' => 'depois1.png'
        ],
        [
            'id' => 2,
            'nome_pet' => 'Luna',
            'servico' => 'Tosa Higiênica e Remoção de Nós',
            'antes' => 'antes2.png',
            'depois' => 'depois2.png'
        ],
        [
            'id' => 3,
            'nome_pet' => 'Thor',
            'servico' => 'Banho Terapêutico e Tosa na Tesoura',
            'antes' => 'antes3.png',
            'depois' => 'depois3.png'
        ]
    ];

    return view('paw.estetica', compact('transformacoes'));
});

Route::get('/veterinaria', function () {
    return view('paw.veterinaria');
});

Route::get('/curriculo', function () {
    return view('curriculo.curriculo');
});