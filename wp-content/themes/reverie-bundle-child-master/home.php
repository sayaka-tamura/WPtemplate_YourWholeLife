<?php get_header(); ?>


	<div class="headerimage">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/imgHeaderTop001_trim.jpg" alt="@@@'s Childhood">
	</div>

	<div class="contents row" id="containerHome">
		<?php get_template_part( 'sidebar-frontPage' ); ?>

		<!-- Row for main content area -->
		<div class="small-12  large-8 columns" id="mainAreaHome" role="main">
			<h3>This is a content section.</h3>
      		<p id="homeDescription">Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

		<?php //query_posts('&posts_per_page=1'); ?>
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
		  'posts_per_page' => 1,
		  'paged' => $paged
		);

		query_posts($args);
		?>
		<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'home' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; // end have_posts() check ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
			</nav>
		<?php } ?>

		</div>
	</div>

<?php get_footer(); ?>