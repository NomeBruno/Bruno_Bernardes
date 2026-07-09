
document.addEventListener('DOMContentLoaded', function () {

    // =================================================================
    // 1. CÓDIGO DO CARROSSEL
    // =================================================================
    const container = document.getElementById('carrossel-slides');
    const btnPrev = document.getElementById('btn-prev');
    const btnNext = document.getElementById('btn-next');

    if (container && btnPrev && btnNext) {
        btnNext.addEventListener('click', () => {
            container.scrollLeft += container.offsetWidth;
        });

        btnPrev.addEventListener('click', () => {
            container.scrollLeft -= container.offsetWidth;
        });
    }

    // =================================================================
    // 2. FILTRO DA BARRA DE PESQUISA EM TEMPO REAL
    // =================================================================
    const inputBusca = document.querySelector('.pesquisar input[type="search"]');
    const cards = document.querySelectorAll('.produto-card');


    if (inputBusca && cards.length > 0) {
        inputBusca.addEventListener('input', function () {
            const termo = inputBusca.value.toLowerCase().trim();

            cards.forEach(card => {
                const nomeProduto = card.querySelector('.produto-nome').textContent.toLowerCase();
                const categoriaProduto = card.querySelector('.produto-categoria').textContent.toLowerCase();


                if (nomeProduto.includes(termo) || categoriaProduto.includes(termo)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // =================================================================
    // 3. ALERTAS DISCRETOS E AUTOMÁTICOS
    // =================================================================
    const botoesComprar = document.querySelectorAll('.btn-comprar');

    if (botoesComprar.length > 0) {

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
            background: '#1e293b',
            color: '#ffffff',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        botoesComprar.forEach(botao => {
            botao.addEventListener('click', function () {
                if (typeof Swal !== 'undefined') {
                    Toast.fire({
                        icon: 'success',
                        title: 'Produto adicionado!',
                        iconColor: '#10b981'
                    });
                } else {
                    alert('Produto adicionado!');
                }
            });
        });
    }

    // =================================================================
    // 4. CONTROLE DO MODAL DO CARRINHO
    // =================================================================
    const modal = document.getElementById('modal-carrinho');
    const btnAbrir = document.getElementById('btn-abrir-carrinho');
    const btnFechar = document.getElementById('btn-fechar-carrinho');

    if (modal && btnAbrir && btnFechar) {

        btnAbrir.addEventListener('click', () => {
            modal.showModal();
        });


        btnFechar.addEventListener('click', () => {
            modal.close();
        });


        modal.addEventListener('click', (e) => {
            const dialogDimensions = modal.getBoundingClientRect();
            if (
                e.clientX < dialogDimensions.left ||
                e.clientX > dialogDimensions.right ||
                e.clientY < dialogDimensions.top ||
                e.clientY > dialogDimensions.bottom
            ) {
                modal.close();
            }
        });
    }

    // =================================================================
    // 5. CARROSSEL AUTOMÁTICO COM INTERAÇÃO ANTES/DEPOIS
    // =================================================================
    const itens = document.querySelectorAll('.antes-depois-item');
    const bolas = document.querySelectorAll('.carrossel-indicadores .bola');
    let casoAtual = 0;
    let carrosselTimer = null;


    function mostrarCaso(indice) {
        if (itens.length === 0) return;


        itens[casoAtual].classList.remove('active');
        if (bolas[casoAtual]) bolas[casoAtual].classList.remove('active');


        casoAtual = (indice + itens.length) % itens.length;


        itens[casoAtual].classList.add('active');
        if (bolas[casoAtual]) bolas[casoAtual].classList.add('active');


        const containerAtivo = itens[casoAtual].querySelector('.comparador-container');
        if (containerAtivo) {
            atualizarSlider(containerAtivo, 50);
        }
    }


    function iniciarAutoPlay() {

        if (carrosselTimer) clearInterval(carrosselTimer);

        carrosselTimer = setInterval(() => {
            mostrarCaso(casoAtual + 1);
        }, 5000);
    }


    window.mudarCaso = function (indice) {
        if (carrosselTimer) clearInterval(carrosselTimer);
        mostrarCaso(indice);
        iniciarAutoPlay();
    };


    function atualizarSlider(container, valorPorcentagem) {
        const antesBox = container.querySelector('.img-antes-box');
        const handle = container.querySelector('.divisor-handle');
        const imgAntes = container.querySelector('.img-antes');

        if (!antesBox || !handle || !imgAntes) return;


        const larguraContainer = container.offsetWidth > 0 ? container.offsetWidth : 650;


        imgAntes.style.width = larguraContainer + 'px';


        antesBox.style.width = valorPorcentagem + '%';
        handle.style.left = valorPorcentagem + '%';
    }


    if (itens.length > 0) {

        itens.forEach(item => {
            const container = item.querySelector('.comparador-container');
            if (container) atualizarSlider(container, 50);
        });


        iniciarAutoPlay();


        document.querySelectorAll('.comparador-container').forEach(container => {
            let escutandoSlide = false;

            const acaoMover = (clientX) => {
                if (carrosselTimer) clearInterval(carrosselTimer);

                const rect = container.getBoundingClientRect();
                const x = clientX - rect.left;
                let porcentagem = (x / rect.width) * 100;


                if (porcentagem < 0) porcentagem = 0;
                if (porcentagem > 100) porcentagem = 100;

                atualizarSlider(container, porcentagem);
            };


            container.addEventListener('mousedown', (e) => {
                e.preventDefault();
                escutandoSlide = true;
            });

            window.addEventListener('mouseup', () => {
                if (escutandoSlide) {
                    escutandoSlide = false;
                    iniciarAutoPlay();
                }
            });

            container.addEventListener('mousemove', (e) => {
                if (!escutandoSlide) return;
                acaoMover(e.clientX);
            });


            container.addEventListener('touchstart', () => {
                escutandoSlide = true;
            });

            window.addEventListener('touchend', () => {
                if (escutandoSlide) {
                    escutandoSlide = false;
                    iniciarAutoPlay();
                }
            });

            container.addEventListener('touchmove', (e) => {
                if (!escutandoSlide) return;
                if (e.touches.length > 0) {
                    acaoMover(e.touches[0].clientX);
                }
            });
        });


        window.addEventListener('resize', () => {
            const containerAtivo = itens[casoAtual].querySelector('.comparador-container');
            if (containerAtivo) atualizarSlider(containerAtivo, 50);
        });
    }

    // =================================================================
    // SCROLL SUAVE
    // =================================================================
    document.querySelectorAll('a[href^="#"]').forEach(ancora => {
        ancora.addEventListener('click', function (e) {
            e.preventDefault();

            const idAlvo = this.getAttribute('href');
            if (idAlvo === '#') return;

            const elementoAlvo = document.querySelector(idAlvo);

            if (elementoAlvo) {

                elementoAlvo.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // =================================================================
    // REVELAÇÃO DE ELEMENTOS AO ROLAR
    // =================================================================
    const observador = new IntersectionObserver((entradas) => {
        entradas.forEach(entrada => {

            if (entrada.isIntersecting) {
                entrada.target.classList.add('elemento-visivel');
            }
        });
    }, {
        threshold: 0.15
    });


    const elementosParaAnimar = document.querySelectorAll('.card, .estetica-item-card, .agendamento-container, .antes-depois-section');

    elementosParaAnimar.forEach(el => {
        el.classList.add('efeito-revelar');
        observador.observe(el);
    });



});

const modal = document.getElementById('modal-agendamento');
const btnAbrir = document.getElementById('btn-abrir-agendamento');
const btnFechar = document.getElementById('btn-fechar-modal');

btnAbrir.addEventListener('click', () => modal.showModal());
btnFechar.addEventListener('click', () => modal.close());

modal.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.close();
    }
});
