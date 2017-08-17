<?php get_header(); ?>

<div class="single-post">
		<?php  /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
		<?php endwhile; ?>
</div>

<?php get_footer(); ?>