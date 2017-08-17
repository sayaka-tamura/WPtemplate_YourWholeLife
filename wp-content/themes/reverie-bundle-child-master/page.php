<?php get_header(); ?>

<div class="single-page">

	<?php
		//run the wordpress loop
			while (have_posts()) : the_post();
				//the_content('Read the rest of this entry »');
				get_template_part('content','page'); //look for a file named content-page.php
			endwhile;
	?>

</div> <!-- end single-page-->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>








