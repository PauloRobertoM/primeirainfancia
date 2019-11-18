<?php get_header(); ?>

		<section class="titulo-interno">
		<h1>Turmas</h1>
		<ul>
			<li><a href="">hOME</a></li>
			<li><a href="">Turmas</a></li>
			<li><a href="">Berçário</a></li>
		</ul>
	</section><!-- titulo-interno -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
	
	<section class="download">
		<div class="container">
			<a class="hidden-xs" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/corpo-download.png" class="img-responsive"></a>
		</div><!-- container -->
		<a class="visible-xs" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/corpo-download-mob.jpg" class="img-responsive"></a>
	</section><!-- download -->
    
<?php get_footer(); ?>