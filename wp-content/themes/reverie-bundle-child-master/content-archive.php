<article class="clearfix" id="<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>
	<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<div class="content excerpt">
<!-- 		<?php the_post_thumbnail('feature-image' ); ?> -->
		<?php the_excerpt(); ?>
		<p><?php
			if ( comments_open() ) : ?>
			  <span class="comments-link"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments' ); ?>
			  </span>
			<?php endif; ?>
		</p>
	</div>

	<p class="entry-meta">Posted on <?php the_date(); ?> by <span class="author"><?php the_author_posts_link(); ?></span> | <a href="#">Comments</a></p>
	<p class="categories">Filed in: <?php the_category(', '); ?>; <?php the_tags('Taged with: ', ', ') ?></p>
</article><!-- end archive-item -->