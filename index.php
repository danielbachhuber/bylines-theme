<?php get_header(); ?>

<div class="site-content">

	<?php if ( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<div class="row">
				<div class="columns">
					<article <?php post_class(); ?>>
						<header>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</header>
						<?php the_excerpt(); ?>
					</article>
				</div>
			</div>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
