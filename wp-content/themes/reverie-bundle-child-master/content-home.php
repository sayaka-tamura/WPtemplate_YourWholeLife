<div class="row  contentsDetail">
<!--       <div class="small-10 small-centered medium-uncentered large-uncentered medium-6 large-6 columns" id="latestPostImg">
           featured image
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-about.jpg" alt="About this website">
      </div>
       -->
      <div class="large-12 columns">
        <h4>
        	<a href="<?php the_permalink() ?>">
        		<?php the_title() ?>
        	</a>
        </h4>
       	<?php the_excerpt(); //the_content() ?>
        <br>
        <p id="linkPostOrTimeline">Read <b><a class="toLink" href="<?php the_permalink() ?>">This Post </a></b>or go to <b><a class="toLink" href="http://wpmmp.bmcc.cuny.edu/~stamura/350final/?page_id=10">Your Timeline</a></b></p>
      </div>
 </div>