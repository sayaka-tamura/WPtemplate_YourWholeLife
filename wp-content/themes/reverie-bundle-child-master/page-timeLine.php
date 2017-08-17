<?php
/*
Template Name: timeLine
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'sidebar-timeline' ); ?>

<div id= "pageTimeLine" class="large-9 columns">
	<div class="post-title">
		<h3><?php the_title(); ?></h3>
	</div> <!-- end post-title -->

	<!-- http://ateitexe.com/blogtop-page-try-and-error/ -->
	<?php query_posts('post_type=post&paged='.$paged); ?>
    <div id="container">
        
    
	<?php
		//run the wordpress loop
			while (have_posts()) : the_post();
				//the_content('Read the rest of this entry »');
				get_template_part('content','timeLine');
				//look for a file named content-page.php
			endwhile;
	?>
    </div>
</div> <!-- end single-page-->

<?php //get_sidebar(); ?>

<?php get_footer(); ?>








