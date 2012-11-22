<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php
            		// get all the categories from the database
            		$cats = get_categories(); 
 
                	// loop through the categries
                	foreach ($cats as $cat) {

	                    // setup the cateogory ID
	                    $cat_id= $cat->term_id;
	                    // Make a header for the cateogry
	                    echo "<h2>".$cat->name."</h2>";
	                    // create a custom wordpress query
	                    query_posts("cat=$cat_id&post_per_page=100");
	            ?>
	            	<ul>
	            <?php
	                    // start the wordpress loop!
						if (have_posts()) : while (have_posts()) : the_post();
                ?>
                    	
                    	<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                <?php	
					 	endwhile; endif; // done our wordpress loop. Will start again for each category
				?>
					</ul>
				<?php
				 	} // done the foreach statement 
				?>


			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>