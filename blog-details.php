
<?php
require_once("CONTROLLER/usuarioController.php");
require_once("nav.php");

$showSuccessMessage = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['subscribe'])) {
    $showSuccessMessage = true;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONHECENDO A ARGLA | ArglaMotors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="ASSETS/css/style.css">
</head>
<body>

<!-- Mensagem de Sucesso -->
<?php if ($showSuccessMessage): ?>
    <div id="successMessage" class="alert alert-success" role="alert" align="center">
        Inscrição realizada com sucesso!
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 1000);
    </script>
<?php endif; ?>

<!-- Modal de Comentários -->
<div id="comentariosModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="comentariosModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="comentariosModalLabel">Comentários de Clientes (16)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="comentariosContainer">
                    <!-- Aqui serão inseridos os comentários dinamicamente -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Conteúdo do Blog -->
<section class="blog-details-hero spad set-bg" data-setbg="ASSETS/img/blog/details/details-hero-bg.jpg">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="blog__details__hero__text">
                    <span class="label">Nossa perspectiva</span>
                    <h2>Confira mais notícias e informações em nosso blog</h2>
                    <ul>
                        <li><img src="ASSETS/img/logo png.png" alt=""> <span>By ArglaMotors</span></li>
                        <li><i class="fa fa-calendar-o"></i> <span>Junho 25, 2024</span></li>
                        <li><i class="fa fa-edit"></i> <span id="openComentariosModal">Comentários (16)</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__details__pic">
                    <img src="ASSETS/img/blog/details/details-pic.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__details__text">
                    <p>Bem-vindo ao Blog Argla Motors: Descubra o Mundo dos Automóveis com Paixão e Excelência

                        Na Argla Motors, não vendemos apenas carros; compartilhamos uma paixão pelos automóveis e nos comprometemos com a excelência em tudo o que fazemos. Nosso blog é seu portal para explorar o fascinante universo dos veículos, mergulhar nas últimas tendências automotivas e descobrir dicas valiosas para manter seu carro sempre em seu melhor desempenho.

                    </p>
                </div>

                <div class="blog__details__quote">
                    <p>Desde a primeira compra até cada quilômetro percorrido, nosso compromisso é superar suas expectativas.</p>
                </div>
                <div class="blog__details__desc">
                    <p>O Que Esperar do Nosso Blog:<br>
                        Notícias e Tendências: Mantenha-se atualizado com as últimas notícias do mundo automotivo. De novos lançamentos e inovações tecnológicas a análises de mercado e previsões futuras, nosso blog é seu guia confiável para entender para onde o setor está indo.
                        <br>
                        <br>

                        Dicas de Manutenção: Sabemos que cuidar do seu veículo é essencial. Nossos especialistas compartilham dicas práticas de manutenção que ajudarão você a prolongar a vida útil do seu carro e a mantê-lo funcionando sem problemas.
                        <br>
                        <br>

                        Comparativos de Modelos: Com tantas opções no mercado, é crucial encontrar o carro que melhor se adapta às suas necessidades. Nossos comparativos detalhados de modelos ajudarão você a tomar uma decisão informada, destacando características, desempenho e muito mais.
                        <br>
                        <br>

                        Eventos e Promoções: Fique por dentro dos eventos especiais e promoções exclusivas da Argla Motors. Desde lançamentos de novos modelos até eventos comunitários, nosso blog mantém você informado sobre oportunidades imperdíveis.
                        <br>
                        <br>

                        Explore o Mundo Automotivo Conosco:
                        <br>
                        <br>

                        Na Argla Motors, estamos aqui para mais do que apenas vender carros. Estamos comprometidos em oferecer uma experiência excepcional, desde o primeiro contato até a manutenção contínua do seu veículo. Nosso blog reflete esse compromisso, oferecendo conteúdo relevante e inspirador que complementa sua jornada automotiva.
                        <br>
                        <br>

                        Junte-se a nós enquanto exploramos o emocionante mundo dos automóveis com paixão, conhecimento e o compromisso inabalável com a excelência que define a Argla Motors.
                        <br>
                        <br>

                        Pronto para começar sua jornada? Explore nosso blog e descubra tudo o que a Argla Motors tem a oferecer. Siga-nos para não perder nenhuma novidade e esteja sempre um passo à frente no universo dos automóveis.</p>
                </div>

                <div class="blog__details__author">
                    <div class="blog__details__author__pic">
                        <img src="ASSETS/img/logo png.png" class="btn btn-secondary" style="background-color: #000000; border-radius: 100%; width: 100px; margin-right: 125px;" alt="Logo ArglaMotors">
                    </div>
                    <div class="blog__details__author__text">
                        <h5>ArglaMotors</h5>
                        <p>Caro cliente, sincero obrigado de todos os desenvolvedores, você faz nosso sonho ser possível, que nossos caminhos se cruzem novamente!</p>
                    </div>
                </div>
                <div class="blog__details__btns">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="#" class="blog__details__btns__item set-bg" data-setbg="ASSETS/img/blog/details/pre.jpg" id="postagemPrevia">
                                        <h6>A Nossa Jornada na ArglaMotors</h6>
                                        <ul>
                                            <li>By ArglaMotors</li>
                                            <li>Junho 22, 2024</li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="blog__details__btns__item set-bg" data-setbg="ASSETS/img/blog/details/next.jpg" id="postagemProxima">
                                        <h6>O Futuro da ArglaMotors</h6>
                                        <ul>
                                            <li>By ArglaMotors</li>
                                            <li>Junho 23, 2024</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal de Postagem -->
                <div id="postagemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="postagemModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="postagemModalLabel">Título da Postagem</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="postagemModalContent">
                                    <!-- Conteúdo da postagem será inserido dinamicamente aqui -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button

>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim da Modal de Postagem -->
            </div>
        </div>
    </div>
</section>

<!-- Início da Seção do Rodapé -->
<div id="footer-wrapper">
    <?php include("rodape.php"); ?>
</div>
<!-- Fim da Seção do Rodapé -->

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('openComentariosModal').addEventListener('click', function() {
        $('#comentariosModal').modal('show');
    });
    document.getElementById('postagemPrevia').addEventListener('click', function(event) {
        event.preventDefault();
        abrirPostagemModal('A Nossa Jornada na ArglaMotors', 'Desde a sua fundação, a Arglamotors tem sido sinônimo de qualidade, inovação e um compromisso inabalável com os nossos clientes. Nossa história é marcada por momentos significativos que nos moldaram e nos levaram a nos tornar uma das principais concessionárias do país. A Arglamotors foi fundada com uma visão clara: oferecer veículos de alta qualidade com um atendimento ao cliente excepcional. Desde o início, a nossa missão foi clara e focada em proporcionar uma experiência única aos nossos clientesAo longo dos anos, a Arglamotors cresceu e se diversificou. Ampliamos nossa linha de veículos para incluir os mais modernos e avançados modelos disponíveis no mercado. Além disso, expandimos nossas operações para incluir serviços completos de manutenção, reparo e peças, sempre com o objetivo de atender todas as necessidades dos nossos clientes. A Arglamotors sempre esteve na vanguarda da tecnologia automotiva. Fomos uma das primeiras concessionárias a adotar veículos elétricos e híbridos, reconhecendo a importância da sustentabilidade no setor automotivo. Investimos constantemente em tecnologia de ponta para garantir que nossos clientes tenham acesso aos melhores e mais inovadores veículos do mercado. Nosso compromisso vai além dos negócios. A Arglamotors sempre se envolveu ativamente na comunidade, apoiando diversas iniciativas e projetos sociais. Acreditamos que uma empresa de sucesso deve contribuir para o bem-estar da comunidade onde está inserida. Ao longo dos anos, a Arglamotors recebeu inúmeros prêmios e reconhecimentos pela excelência em atendimento ao cliente, inovação e sustentabilidade. Esses prêmios são um testemunho do nosso compromisso contínuo com a qualidade e a satisfação dos nossos clientes. Enquanto celebramos nossas conquistas passadas, estamos sempre olhando para o futuro. Continuamos a investir em novas tecnologias, expandir nossas operações e buscar maneiras de melhorar ainda mais a experiência dos nossos clientes. A trajetória da Arglamotors é uma história de sucesso construída sobre uma base de inovação, qualidade e um compromisso inabalável com nossos clientes. Agradecemos a todos os nossos clientes, funcionários e parceiros que fizeram parte dessa jornada e estamos ansiosos para o que o futuro nos reserva.');
    });
    document.getElementById('postagemProxima').addEventListener('click', function(event) {
        event.preventDefault();
        abrirPostagemModal('O Futuro da ArglaMotors', 'A Arglamotors sempre esteve na vanguarda do setor automotivo, e nosso compromisso com a inovação e a sustentabilidade está mais forte do que nunca. À medida que olhamos para o futuro, estamos empolgados em compartilhar algumas das nossas iniciativas e planos que moldarão a próxima década da nossa concessionária. Estamos investindo fortemente em tecnologia de ponta, incluindo veículos elétricos e híbridos. Nossa meta é oferecer uma linha completa de veículos que não apenas atendam, mas superem os padrões ambientais mais rigorosos. Estamos trabalhando em parceria com alguns dos maiores nomes da indústria automotiva para trazer o futuro da mobilidade sustentável aos nossos clientes. Para melhor atender nossos clientes, estamos planejando a expansão e modernização de nossas instalações. Isso incluirá a construção de novos showrooms ecológicos, equipados com a última tecnologia em eficiência energética e um ambiente acolhedor e inovador para nossos clientes. O atendimento ao cliente sempre foi uma prioridade para a Arglamotors, e continuaremos a elevar os padrões nesse aspecto. Estamos introduzindo novas plataformas digitais que permitirão aos nossos clientes agendar serviços, comprar peças e até mesmo comprar carros inteiramente online, com a conveniência e a confiança que esperam de nós. Nossa responsabilidade com o meio ambiente é uma parte central da nossa estratégia de negócios. Estamos implementando práticas sustentáveis em todas as áreas do nosso negócio, desde a utilização de energias renováveis em nossas instalações até a reciclagem e a redução de resíduos. A Arglamotors está formando parcerias estratégicas com empresas de tecnologia e inovação para explorar novas formas de mobilidade, como veículos autônomos e sistemas de transporte inteligente. Essas parcerias nos permitirão oferecer soluções inovadoras que tornarão a vida de nossos clientes mais fácil e eficiente. Estamos muito animados com o futuro da Arglamotors e com as inúmeras possibilidades que estão por vir. Convidamos você a acompanhar essa jornada conosco, pois estamos determinados a continuar sendo líderes no setor automotivo e a oferecer o melhor aos nossos clientes.');
    });

    function abrirPostagemModal(titulo, conteudo) {
        document.getElementById('postagemModalLabel').innerText = titulo;
        document.getElementById('postagemModalContent').innerText = conteudo;
        $('#postagemModal').modal('show');
    }
</script>
</body>
</html>
