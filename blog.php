

    

    <?php
        require_once("CONTROLLER/usuarioController.php");
        require_once("nav.php");
    ?>
    <title>BLOG | ArglaMotors</title>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="ASSETS/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__links">
                            <a href="index.php"><i class="fa fa-home"></i> Início</a>
                            <span>Nosso Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <!-- Exemplo de postagem -->
                        <?php
                        // Array simulando os dados das postagens (você pode substituir isso pelos seus dados reais)
                        $posts = array(
                            array(
                                "titulo" => "Novidades no Mundo Automotivo: Tendências e Inovações",
                                "data" => "Abril 11, 2024",
                                "imagem" => "ASSETS/img/blog/blog-1.jpg",
                                "conteudo" => "Em 2024, as tendências no setor automotivo incluem avanços significativos em veículos elétricos, como maior autonomia de bateria e carregamento mais rápido. Além disso, os sistemas de assistência ao motorista (ADAS) estão se tornando mais sofisticados, com recursos como controle de cruzeiro adaptativo, frenagem de emergência autônoma e assistência em mudanças de faixa. Estas tecnologias não apenas melhoram a segurança, mas também preparam o terreno para veículos autônomos no futuro próximo."
                            ),
                            array(
                                "titulo" => "Guia Completo para Compra de Carros Seminovos",
                                "data" => "Abril 17, 2024",
                                "imagem" => "ASSETS/img/blog/blog-2.jpg",
                                "conteudo" => "Ao comprar um carro seminovo em 2024, é essencial considerar não apenas o preço, mas também a condição do veículo e seu histórico de manutenção. Dados mostram que carros seminovos podem oferecer excelente valor, muitas vezes sendo uma escolha mais econômica em comparação com carros novos. No entanto, é crucial realizar uma inspeção detalhada para evitar surpresas desagradáveis. A ArglaMotors oferece garantia de qualidade em seus seminovos, assegurando confiança aos clientes."
                                ),
                            array(
                                "titulo" => "Dicas de Manutenção Preventiva para Prolongar a Vida Útil do Seu Carro",
                                "data" => "Março 19, 2024",
                                "imagem" => "ASSETS/img/blog/blog-3.jpg",
                                "conteudo" => "Manter uma rotina de manutenção preventiva pode economizar tempo e dinheiro a longo prazo. Dados indicam que simples cuidados, como trocas regulares de óleo e verificações de pneus, podem reduzir significativamente o risco de avarias mecânicas e aumentar a eficiência do combustível. Na ArglaMotors, serviços especializados ajudam os proprietários a manter seus veículos em condições ideais, garantindo desempenho consistente e segurança."
                            ),
                            array(
                                "titulo" => "Conheça os Modelos Mais Populares na ArglaMotors este Ano",
                                "data" => "Maio 22, 2024",
                                "imagem" => "ASSETS/img/blog/blog-4.jpg",
                                "conteudo" => "Os modelos mais vendidos na ArglaMotors em 2024 variam de SUVs espaçosos, como o modelo X, conhecido por seu conforto e segurança, a sedãs elegantes como o modelo Y, apreciado por seu design moderno e eficiência energética. Dados de vendas mostram uma preferência crescente por veículos que combinam tecnologia avançada e funcionalidade prática, refletindo as demandas dos consumidores por conforto e desempenho."
                            ),
                            array(
                                "titulo" => "História da ArglaMotors: Nossa Jornada e Compromisso com a Qualidade",
                                "data" => "Março 25, 2024",
                                "imagem" => "ASSETS/img/blog/blog-5.jpg",
                                "conteudo" => "Fundada com um compromisso com a excelência desde o início, a ArglaMotors se destacou no mercado automotivo através de sua dedicação aos clientes e padrões elevados de serviço. A empresa se tornou uma referência devido à sua reputação de confiabilidade e inovação, oferecendo não apenas produtos de alta qualidade, mas também uma experiência de compra que valoriza a satisfação do cliente acima de tudo."
                            ),
                            array(
                                "titulo" => "Dicas para Escolher o Financiamento de Veículos Ideal",
                                "data" => "Junho 3, 2024",
                                "imagem" => "ASSETS/img/blog/blog-6.jpg",
                                "conteudo" => "No cenário atual, entender as diferenças entre leasing e financiamento tradicional é crucial para tomar uma decisão informada. Dados indicam que ambos os métodos têm vantagens e desvantagens, dependendo das necessidades individuais do comprador. A ArglaMotors simplifica o processo, oferecendo opções de financiamento personalizadas que se adequam ao orçamento e estilo de vida de cada cliente, facilitando a aquisição do carro dos sonhos."
                            )
                        );

                        // Iterar sobre os dados para criar as postagens
                        foreach ($posts as $index => $post) {
                            $modalId = "postModal" . ($index + 1); // ID único para cada modal
                            ?>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic set-bg" data-setbg="<?php echo $post['imagem']; ?>">
                                        <ul>
                                            <li>By Arglamotors</li>
                                            <li><?php echo $post['data']; ?></li>
                                            <li>0 comentários</li>
                                        </ul>
                                    </div>
                                    <div class="blog__item__text">
                                        <h5><a href="#" class="post-link" data-toggle="modal" data-target="#<?php echo $modalId; ?>"><?php echo $post['titulo']; ?></a></h5>
                                        <p><?php echo substr($post['conteudo'], 0, 100) . "..."; ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal para esta postagem -->
                            <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="<?php echo $modalId; ?>Label"><?php echo $post['titulo']; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><?php echo $post['conteudo']; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <img src="ASSETS/img/logo png.png"  class="btn btn-secondary" style="background-color: #000000; border-radius: 100%; width:100px; margin-right:125px;" alt="Logo ArglaMotors">
                                            <span>Atenciosamente, Equipe Argla</span>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- Fim do loop de postagens -->

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-9">
                    <!-- Sidebar aqui -->
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__feature">
                            <h4>Notícias em destaque</h4>

                            <?php

                            $featuredPosts = array(
                                array(
                                    "titulo" => "Eventos Especiais na ArglaMotors: Comunidade e Engajamento",
                                    "data" => "Março 5, 2024",
                                    "conteudo" => "Os eventos especiais na ArglaMotors não são apenas uma oportunidade para os clientes explorarem novos modelos e tecnologias, mas também para fortalecerem os laços comunitários. Dados mostram que tais eventos aumentam o engajamento dos clientes e promovem um ambiente de camaradagem entre entusiastas de automóveis. A ArglaMotors se destaca ao oferecer experiências memoráveis que vão além das vendas, criando conexões duradouras com seus clientes."
                                ),
                                array(
                                    "titulo" => "Os Melhores Acessórios para Personalizar Seu Carro na ArglaMotors",
                                    "data" => "Abril 15, 2024",
                                    "conteudo" => "A personalização de carros está em alta, com acessórios como rodas personalizadas e sistemas de som premium sendo cada vez mais procurados. Dados de mercado indicam um crescimento na demanda por acessórios que não apenas melhoram o desempenho, mas também refletem o estilo pessoal do proprietário. Na ArglaMotors, uma ampla gama de acessórios está disponível para transformar seu veículo em uma expressão única de sua personalidade e preferências."
                                ),
                                array(
                                    "titulo" => "Como Escolher o Seguro de Carro Ideal: Guia Completo",
                                    "data" => "Maio 20, 2024",
                                    "conteudo" => "Escolher o seguro de carro certo pode ser uma decisão complexa, mas fundamental para proteger seu investimento. Dados mostram que entender a cobertura adequada e comparar taxas de diferentes seguradoras pode resultar em economias significativas a longo prazo. Na ArglaMotors, especialistas em seguros ajudam os clientes a encontrar as melhores opções que ofereçam segurança e tranquilidade, garantindo que cada carro esteja devidamente protegido contra imprevistos."
                                ),
                                array(
                                    "titulo" => "FAQ da ArglaMotors: Respostas às Perguntas Mais Frequentes dos Clientes",
                                    "data" => "Março 2, 2024",
                                    "conteudo" => "Perguntas comuns sobre compra de carros, manutenção e garantias são abordadas de maneira clara e informativa no FAQ da ArglaMotors. Dados mostram que oferecer respostas diretas ajuda os clientes a tomar decisões mais informadas e reduz a incerteza durante o processo de compra e propriedade do veículo. Na ArglaMotors, estamos comprometidos em garantir que todas as dúvidas sejam respondidas de maneira completa e transparente, proporcionando uma experiência tranquila e confiável para nossos clientes."
                                )
                            );

                            // Iterar sobre os dados para criar as postagens em destaque
                            foreach ($featuredPosts as $index => $post) {
                                $modalId = "featuredPostModal" . ($index + 1); // ID único para cada modal
                                ?>

                                <div class="blog__sidebar__feature__item">
                                    <h6><a href="#" class="post-link" data-toggle="modal" data-target="#<?php echo $modalId; ?>"><?php echo $post['titulo']; ?></a></h6>
                                    <ul>
                                        <li>By Arglamotors</li>
                                        <li><?php echo $post['data']; ?></li>
                                    </ul>
                                </div>

                                <!-- Modal para esta postagem em destaque -->
                                <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="<?php echo $modalId; ?>Label"><?php echo $post['titulo']; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo $post['conteudo']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <img src="ASSETS/img/logo png.png" class="btn btn-secondary" style="background-color: #000000; border-radius: 100%; width:100px; margin-right:125px;" alt="Logo ArglaMotors">
                                                <span>Atenciosamente, Equipe Argla</span>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <br><br><br>
                        </div>

                        <div class="blog__sidebar__categories">
                            <h4>Categorias</h4>
                            <ul>
                                <li>Creatividade</li>
                                <li>Design</li>
                                <li>Inspiração</li>
                                <li>Notícias</li>
                            </ul>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br> 
                        <br>
                        <br>
                        <br>

                        <div class="blog__sidebar__newslatter">
                            <h4 align="center">Boletim de Notícias</h4>
                            <p align="center">Faça sua assinatura para acompanhar</p>
                           <form action="blog-details.php" method="POST">
                                <input type="hidden" name="subscribe" value="1">
                                <input type="email" class="form-control" required placeholder="cliente@argla.com" name="email">
                                <button type="submit">Se inscreva</button>
                            </form>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <?php
        include("rodape.php");
    ?>
    <!-- Footer Section End -->

    <!-- Bootstrap e jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>