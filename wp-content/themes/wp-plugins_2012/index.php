<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */

get_header(); ?>

    <!-- Main Content -->
    <div class="ten centered columns" role="content">

		<?php
    		// get all the categories from the database
    		$cats = get_categories(); 

        	// loop through the categries
        	foreach ($cats as $cat) {
                echo "<div>";
                // setup the cateogory ID
                $cat_id= $cat->term_id;
                // Make a header for the cateogry
                echo "<h2>".$cat->name."</h2>";
                // create a custom wordpress query
                query_posts("cat=$cat_id&post_per_page=100");
        ?>
        	<ul class="twelve side-nav">
        <?php
                // start the wordpress loop!
				if (have_posts()) : while (have_posts()) : the_post();
        ?>
            	
            	<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                <li class="divider"></li>
        <?php	
			 	endwhile; endif; // done our wordpress loop. Will start again for each category
		?>
			</ul>

		<?php
            echo "</div>";
		 	} // done the foreach statement 
		?>

    </div>
    <!-- End Main Content -->

<?php get_footer(); ?>