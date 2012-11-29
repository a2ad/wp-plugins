<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>

	</div><!-- row -->
</div><!-- container -->

<!-- End Page -->

<!-- Footer -->
<footer class="row">

<?php if ( dynamic_sidebar('Sidebar Footer One') && dynamic_sidebar('Sidebar Footer Two') && dynamic_sidebar('Sidebar Footer Three') && dynamic_sidebar('Sidebar Footer Four')  ) : else : ?>

<?php endif; ?>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>
</body>
</html>