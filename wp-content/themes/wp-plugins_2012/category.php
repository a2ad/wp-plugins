<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
		<h2>
			<?php printf( __( '%s', 'twentyeleven' ), single_cat_title( '', false )  ); ?>
		</h2>
		<div class='twelve plugins-list'>
			
			<ul>
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>

				<?php endif; ?>
			</ul>

		</div>

<?php get_footer(); ?>
