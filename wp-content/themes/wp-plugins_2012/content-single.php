<?php
/**
 * Content Single
 *
 * Loop content in single post template (single.php)
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>

<article class="twelve centered columns">

	<header class="post-header panel radius">
		<hgroup>
			<p><span class="round label"><?php the_category(', '); ?></span><?php the_tags('<span class="secondary round label">','</span><span class="	secondary round label">','</span>'); ?></p>
			<h2><?php the_title(); ?></h2>
			<h6><?php _e('Avaliado por', 'foundation' );?> <?php the_author_link(); ?> em <?php the_time(get_option('date_format')); ?></h6>
		</hgroup>
	</header>	

	<div class="row">
		<div class="four columns image-column">
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		</div>	

		<div class="eight columns">
			<?php the_content(); ?>
			<?php
				$value = get_field( "download" );
				if($value) {
					echo "<a class='radius button' href='".$value."'>Acessar a página do plugin</a>";
				}
			?>	
			<footer>
				<?php comments_template('', true ); ?>
			</footer>
		</div>
	</div>


</article>

<hr />