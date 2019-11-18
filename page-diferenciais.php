<?php get_header(); ?>

	<section class="titulo-interno">
		<h1>Por que a Primeira Infância?</h1>
		<ul>
			<li><a href="">hOME</a></li>
			<li><a href="">primeira infância</a></li>
			<li><a href="">por que a primeira infância?</a></li>
		</ul>
	</section><!-- titulo-interno -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    
<?php get_footer(); ?>