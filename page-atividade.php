<?php get_header(); ?>

    <?php
        $args = array(
            'posts_per_page' => 20,
            'post_type'      => 'atividades',
        );
        $atividades = get_posts($args);
    ?>

    <section class="titulo-interno">
        <h1>Atividades</h1>
        <ul>
            <li><a href="">hOME</a></li>
            <li><a href="">Atividades</a></li>
        </ul>
    </section><!-- titulo-interno -->

    <section class="interna turmas atividades">
        <div class="container">
            <h1 class="text-center">Para despertar talentos desde cedo</h1>
            <h3 class="text-center">Atividades Especiais</h3>
            <p>Na Primeira Infância, o desenvolvimento acontece muito além dos conteúdos curriculares. Aqui, as crianças também têm acesso a atividades especiais que reforçam nossa proposta pedagógica e ampliam os potenciais dos pequenos.</p>
            <br /><br />
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($atividades as $atividade) : ?>
                    <?php if($i > 4) { $i = 1; } ?>
                    <?php $titulo_atividade = $atividade->post_title; ?>
                    <?php $desc_atividade = $atividade->post_content; ?>
                    <?php if(!($i % 2 == 0)) { ?>
                        <div class="item item<?= $i ?>">
                            <div class="col-md-6 col-sm-6">
                                <?php
                                    $img_atividades = rwmb_meta('atividades_foto', 'type=plupload_image', $atividade->ID);
                                    foreach ( $img_atividades as $img_atividade ) {
                                        echo "<img src='{$img_atividade['url']}' class='img-responsive' alt='{$img_atividade['alt']}' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h2><?= $titulo_atividade ?></h2>
                                <p><?= $desc_atividade ?></p>
                            </div><!-- md-6 -->
                        </div><!-- item -->
                    <?php } else { ?>
                        <div class="item item<?= $i ?>">
                            <div class="col-md-6 col-sm-6 visible-xs">
                                <?php
                                    $img_atividades = rwmb_meta('atividades_foto', 'type=plupload_image', $atividade->ID);
                                    foreach ( $img_atividades as $img_atividade ) {
                                        echo "<img src='{$img_atividade['url']}' class='img-responsive' alt='{$img_atividade['alt']}' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <h2><?= $titulo_atividade ?></h2>
                                <p><?= $desc_atividade ?></p>
                            </div><!-- md-6 -->
                            <div class="col-md-6 col-sm-6 hidden-xs">
                                <?php
                                    $img_atividades = rwmb_meta('atividades_foto', 'type=plupload_image', $atividade->ID);
                                    foreach ( $img_atividades as $img_atividade ) {
                                        echo "<img src='{$img_atividade['url']}' class='img-responsive' alt='{$img_atividade['alt']}' />";
                                    }
                                ?>
                            </div><!-- md-6 -->
                        </div><!-- item -->
                    <?php } ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div><!-- row -->
            <a href="" class="btn-confira">CONFIRA TODAS AS TURMAS DISPONÍVEIS</a>
        </div><!-- container -->
    </section><!-- interna -->

<?php get_footer(); ?>