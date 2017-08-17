<div id="myWidgetArea" class="widget-area small-12 large-3 columns" role="complementary">

	<?php if ( ! dynamic_sidebar( 'main-sidebar' ) ) : ?>
	<div class="widget_bg">
		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

		<aside id="archives" class="widget">
			<h6 class="widget-title"><?php _e( 'Archives', '_s' ); ?></h6>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>

		<aside id="meta" class="widget">
			<h6 class="widget-title"><?php _e( 'Meta', '_s' ); ?></h6>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>

		<?php endif; // end sidebar widget area ?>
	</div>
</div><!-- #secondary -->
