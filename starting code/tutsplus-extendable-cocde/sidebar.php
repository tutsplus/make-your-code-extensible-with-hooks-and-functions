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
	// list most recent featured posts - using wp_Query
	$args = array(
		'category_name' => 'featured',
		'posts_per_page' => 6
	);
	
	$query = new WP_query ( $args );
	
	if ( $query->have_posts() ) {
	
	  echo '<section class="widget">';
	  	
	  	echo '<h3>Featured Posts</h3>';
	  	
	  	echo '<ul>';
	  
	  	while ( $query->have_posts() ) : $query->the_post();
	  
	  		//contents of loop
	  		echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
	  
	  	endwhile;
	  
	  	rewind_posts();
	  	echo '</ul>';
	  
	  echo '</section>';
	  
	} ?>

</aside><!-- .sidebar .widget-area -->
