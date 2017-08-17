<!-- reference
(template-tag)
http://www.webopixel.net/wordpress/401.html
http://www.webcreatorbox.com/tech/wordpress-search -->
<!-- (serch bar scc)
http://www.css-lecture.com/log/css/052.html -->

<div class="row" id="search">
	<form role="search" method="get" id="searchform" class="small-11 columns" action="<?php echo home_url( '/' ); ?>">
        <input type="text" id="keywords" value="" name="s" id="s" list="searchtag"/>
	    <input type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn.gif" alt="Search" name="searchBtn" id="searchBtn" />
        <?php wp_dropdown_categories('depth=0&orderby=name&hide_empty=1&show_option_all=#Category&class=small-6'); ?>
        <?php $tags = get_tags(); if ( $tags ) : ?>
		<select name='tag' id='tag' class="small-5">
			<option value="" selected="selected">#Tag</option>
				<?php foreach ( $tags as $tag ): ?>
			<option value="<?php echo esc_html( $tag->slug);  ?>"><?php echo esc_html( $tag->name ); ?></option>
			<?php endforeach; ?>
		</select>
		<?php endif; ?>
	    <input type="submit" id="searchsubmit" value="Search" />
	</form>
</div>