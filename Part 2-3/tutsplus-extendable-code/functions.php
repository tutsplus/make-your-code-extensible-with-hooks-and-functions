<?php
/**********************************************************************************************
tutsplus_featured_posts - display fetaured posts
**********************************************************************************************/
function tutsplus_featured_posts() {
	
	// list most recent featured posts - using wp_Query
	$args = array(	 
			'category_name' => 'featured',
			'posts_per_page' => 6		
	);
	
	$query = new WP_query ( $args );
	
	if ( $query->have_posts() ) {
	
	  echo '<section class="widget">';
	  	
	  	echo '<h3>';
	  		echo apply_filters( 'tutsplus_featured_posts_title', 'Featured Posts' );
	  	echo '</h3>';
	  	
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
add_action( 'tutsplus_sidebar', 'tutsplus_featured_posts' );

/**********************************************************************************************
tutsplus_sidebar_image - display an image
**********************************************************************************************/
function tutsplus_sidebar_image() {
	
	echo '<section class="widget">';
	
		echo apply_filters( 'tutsplus_sidebar_image','<img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/227/profiles/1328/profileImage/rachel-mccollin-jan2015-tutsplus.jpg" />' );
	
	echo '</section>';
	
}
add_action( 'tutsplus_sidebar', 'tutsplus_sidebar_image', 5 );

/**********************************************************************************************
 tutsplus_amend_featured_posts_heading - change the heading for the featured posts display
**********************************************************************************************/
function tutsplus_amend_featured_posts_heading() {
	
	echo 'My Top Posts';
	
}
add_filter( 'tutsplus_featured_posts_title', 'tutsplus_amend_featured_posts_heading' );

/**********************************************************************************************
 tutsplus_amend_sidebar_image_source - change the sidebar image
**********************************************************************************************/
function tutsplus_amend_sidebar_image_source() {
	
	echo '<img src="https://pbs.twimg.com/profile_images/667319185568059392/c8zX1kQI_400x400.jpg" />';
	
}
add_filter( 'tutsplus_sidebar_image', 'tutsplus_amend_sidebar_image_source' );
