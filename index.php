<?php get_header(); ?>
    
    <?php $page = 'home'; ?>

    <?php include 'components/vitrine.php'; ?>

    <section class="pilares">
        <div class="container">
            <h1 class="text-center">PILARES DA PRÉ-ESCOLA PRIMEIRA INFÂNCIA</h1>
            <p class="text-center"><strong>A gente sabe: escolher o lugar onde o seu filho ou a sua filha passará a primeira infância não é uma tarefa fácil!</strong> Em nosso site você terá acesso a informações completas sobre Primeira Infância, mas se o tempo estiver curto, gostaríamos que rapidamente você gravasse quais são os pilares que sustentam a nossa escola.</p>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="item item1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item1.png">
                        <div class="content">
                            <h2>CRIANÇA</h2>
                            <p>dasda sdasdasd asdas das dasdasda.</p>
                        </div><!-- content -->
                    </div><!-- item -->
                </div><!-- md-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="item item2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item2.png">
                        <div class="content">
                            <h2>CRIANÇA</h2>
                            <p>dasda sdasdasd asdas das dasdasda.</p>
                        </div><!-- content -->
                    </div><!-- item -->
                </div><!-- md-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="item item3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item3.png">
                        <div class="content">
                            <h2>CRIANÇA</h2>
                            <p>dasda sdasdasd asdas das dasdasda.</p>
                        </div><!-- content -->
                    </div><!-- item -->
                </div><!-- md-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="item item4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item4.png">
                        <div class="content">
                            <h2>CRIANÇA</h2>
                            <p>dasda sdasdasd asdas das dasdasda.</p>
                        </div><!-- content -->
                    </div><!-- item -->
                </div><!-- md-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- pilares -->

    <section class="download">
        <div class="container">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/corpo-download.png" class="img-responsive"></a>
        </div><!-- container -->
    </section><!-- download -->

    <section class="minha-casa">
        <div class="container">
            <h1 class="text-center">MINHA SEGUNDA CASA</h1>
            <div class="row">
                <?php
                    $args = array(
                        'posts_per_page' => 1,
                        'post_type'      => 'atividades',
                    );
                    $atividades = get_posts($args);
                ?>
                <?php foreach ($atividades as $atividade) : ?>
                    <?php $desc_atividade = $atividade->post_content; ?>
                    <div class="col-md-6 col-sm-6">
                        <?php
                            $atividades = rwmb_meta('atividades_foto', 'type=plupload_image', $atividade->ID);
                            foreach ( $atividades as $atividade ) {
                                echo "<img src='{$atividade['url']}' class='img-responsive' alt='{$atividade['alt']}' />";
                            }
                        ?>
                    </div><!-- md-6 -->
                    <div class="col-md-6 col-sm-6">
                        <p><?= $desc_atividade ?></p>
                    </div><!-- md-6 -->
                <?php endforeach; ?>
            </div><!-- row -->
            <a href="">CONFIRA TODAS AS NOSSAS ATIVIDADES</a>
        </div><!-- container -->
    </section><!-- minha-casa -->

    <section class="experiencia">
        <div class="container">
            <h1 class="text-center">A EXPERIêNCIA COM A PRIMERIA INFÂNCIA É...</h1>
            <iframe width="80%" height="400" src="https://www.youtube.com/embed/aVS4W7GZSq0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="owl-carousel owl-theme owl-depoimentos">
                <?php
                    $args = array(
                        'posts_per_page' => 10,
                        'post_type'      => 'experiencias',
                    );
                    $experiencias = get_posts($args);
                ?>
                <?php foreach ($experiencias as $experiencia) : ?>
                    <?php $titulo_experiencia = $experiencia->post_title; ?>
                    <?php $desc_experiencia = $experiencia->post_content; ?>
                    <?php $cargo_experiencia = $experiencia->experiencias_cargo; ?>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aspas1.png" class="aspas1">
                        <p><?= $desc_experiencia ?></p>
                        <p><strong><?= $titulo_experiencia ?></strong><br /><i><?= $cargo_experiencia ?></i></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aspas2.png" class="aspas2">
                    </div><!-- item -->
                <?php endforeach; ?>
            </div><!-- owl-carousel -->
        </div><!-- container -->
    </section><!-- experiencia -->
    
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-depoimentos.jpg" class="img-responsive img-geral">

<?php get_footer(); ?>