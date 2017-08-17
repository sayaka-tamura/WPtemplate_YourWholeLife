<?php

/* ========================================
   Featured Images
======================================== */
/* Adding support for Featured Images */
add_theme_support( 'post-thumbnails' );

/* add sizes for potential uses of featured images

    add_image_size('name-for-size', width, height, cropped?);

    change what is below to what you need and copy/paste to add more

    At the end is true of false
    false = no crop, just resizes so the image fits in the given box. preserves aspect ratio.
    true = crop, removes part of the image if it is over the given size
*/
add_image_size( 'feature-thumb', 250, 250, true ); //250x250 square image
add_image_size( 'sidebar-thumb', 300, 200, false); //resizes image to fit in 300x200 size
add_image_size( 'feature-image', 600, 99999, false);//600 pixels wide (and unlimited height)


/* ========================================
    Add Widget Area
======================================== */

function add_my_sidebar() {
	register_sidebar( array(
		'name'          => 'Sidebar Front Page',
		'id'            => 'sidebar-2',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Sidebar-Timeline',
		'id'            => 'sidebar-timeline',
		'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'add_my_sidebar' );

/* ========================================
    content-photo.php
======================================== */

//get images from article you uploaded
function get_the_content_image() {
	 global $post, $posts;
	 $first_img = '';
	 ob_start();
	 ob_end_clean();
	 $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	 $first_img = $matches [1] [0];

	 if(empty($first_img)){ //Defines a default image
		 $first_img = "/no-image.gif";
	 }
	 return $first_img;
}

/* ========================================
    For gallery css
======================================== */

//this removes the default styling that WP gives to the galleries.
add_filter( 'use_default_gallery_style', '__return_false' );



 ?>
