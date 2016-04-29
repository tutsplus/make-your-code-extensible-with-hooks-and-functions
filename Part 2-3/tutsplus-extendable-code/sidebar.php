<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<aside id="secondary" class="sidebar widget-area" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif; ?>


	<?php
	do_action( 'tutsplus_sidebar' ); 
	?>

</aside><!-- .sidebar .widget-area -->
