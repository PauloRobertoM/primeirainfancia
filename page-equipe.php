<?php get_header(); ?>

    <?php
        $args = array(
            'posts_per_page' => 20,
            'post_type'      => 'equipes',
        );
        $equipes = get_posts($args);
    ?>

    <section class="titulo-interno">
        <h1>História</h1>
        <ul>
            <li><a href="">hOME</a></li>
            <li><a href="">pRIMEIRA iNFÂCIA</a></li>
            <li><a href="">história</a></li>
        </ul>
    </section><!-- titulo-interno -->

    <section class="interna">
        <div class="container">
            <p>Na Primeira Infância, sua escolha e confiança em nosso trabalho nos impulsionam a buscar ainda mais o aprimoramento de nossos serviços educacionais, de ensino e crescimento pessoal e profissional de cada integrante de nossa equipe.</p>
            <p>Leia com atenção as informações contidas no site e saiba mais sobre nosso funcionamento e proposta pedagógica.</p>
            <p>Isso é muito importante para o bem estar do seu filho e para a sua tranquilidade enquanto ele estiver conosco, aprendendo, brincando e criando.</p>
        </div><!-- container -->
        <div class="experiencia">
            <div class="container">
                <h1 class="text-center">A EXPERIêNCIA COM A PRIMERIA INFÂNCIA É...</h1>
                <iframe width="80%" height="400" src="https://www.youtube.com/embed/aVS4W7GZSq0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div><!-- container -->
        </div><!-- experiencia -->
        <div class="equipe">
            <div class="container">
                <h1 class="text-center">EQUIPE</h1>
                <div class="row">
                    <?php foreach ($equipes as $equipe) : ?>
                        <?php $titulo_equipe = $equipe->post_title; ?>
                        <?php $desc_equipe = $equipe->post_content; ?>
                        <div class="col-md-3 col-sm-3">
                            <?php
                                $img_equipes = rwmb_meta('equipes_foto', 'type=plupload_image', $equipe->ID);
                                foreach ( $img_equipes as $img_equipe ) {
                                    echo "<img src='{$img_equipe['url']}' class='img-responsive' alt='{$img_equipe['alt']}' />";
                                }
                            ?>
                            <h2><?= $titulo_equipe ?></h2>
                            <h4><?= $desc_equipe ?></h4>
                        </div><!-- md-3 -->
                    <?php endforeach; ?>
                </div><!-- row -->
                <a href="" class="btn-confira">CONFIRA TAMBÉM AS NOSSAS ATIVIDADES</a>
            </div><!-- container -->
        </div><!-- equipe -->
    </section><!-- interna -->

<?php get_footer(); ?>