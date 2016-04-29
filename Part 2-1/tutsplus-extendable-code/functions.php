<?php
function tutsplus_featured_posts() {
	
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
	  
	}	
	
}