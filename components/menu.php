<div class="nav menu">
    <nav class="navbar navbar-default" id="meuMenu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('/'); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-primeira-infancia.png" alt="Logo" /></a>
            </div><!-- .navbar-header -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
                    <li>
                        <a href="#">PRIMEIRA INFÂNCIA</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo site_url('diferenciais'); ?>">por que a primeira infância?</a></li>
                            <li><a href="<?php echo site_url('pedagogia'); ?>">Proposta Pedagógica</a></li>
                            <li><a href="<?php echo site_url('equipe'); ?>">EQUIPE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">TURMAS</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo site_url('turmas'); ?>">BERÇÁRIO</a></li>
                            <li><a href="<?php echo site_url('turmas'); ?>">MATERNAL</a></li>
                            <li><a href="<?php echo site_url('turmas'); ?>">PRÉ-ESCOLA</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('atividade'); ?>">ATIVIDADES</a></li>
                    <li><a href="<?php echo site_url(''); ?>">CALENDÁRIO</a></li>
                    <li><a href="<?php echo site_url(''); ?>">BLOG</a></li>
                    <li><a href="<?php echo site_url('contato'); ?>">CONTATO</a></li>
                </ul><!-- .nav -->
            </div><!-- .navbar-collapse -->
        </div><!-- container -->
    </nav><!-- .navbar -->
</div><!-- .nav -->