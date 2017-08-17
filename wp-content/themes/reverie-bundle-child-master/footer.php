
</div><!-- Container End -->
<div class="row footer-widgets">
	<div class="medium-4 columns">
			<?php dynamic_sidebar("Footer1"); ?>
	</div>
	<div class="medium-4 columns">
			<?php dynamic_sidebar("Footer2"); ?>
	</div>
	<div class="medium-4 columns">
			<?php dynamic_sidebar("Footer3"); ?>
	</div>

</div>
<!-- <div class="full-width footer-widget">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div> -->

<footer class="full-width large-12 columns" role="contentinfo">
	<div class="row">
		<div class="large-12 columns">
			<?php wp_nav_menu(array(
				'theme_location' => 'utility',
				'container' => false,
				'menu_class' => 'inline-list'
				));
			?>
		</div>
	</div>
	<div class="row love-reverie">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Made with Love in','reverie'); ?> <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
        // masonry plugin call
        
        $('#container').imagesLoaded( function(){
            $('#container').masonry({itemSelector : '.item',});
        });
        
        
	})(jQuery);
</script>

</body>
</html>