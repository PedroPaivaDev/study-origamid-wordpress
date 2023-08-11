<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- aqui vai o conteúdo -->
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>
			<div class="grid-8">
				<?php the_content(); ?>
			</div>
		</section>

	<?php endwhile; else: ?>
		<p class="subtitulo">Desculpe, essa página não foi encontrada.</p>

	<?php endif; ?>

<?php get_footer(); ?>