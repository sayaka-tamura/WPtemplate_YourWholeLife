<!-- page-content -->
	<div class="page-content row">
	    <div class="post-title">
			<!-- the title -->
			<h3><?php the_title(); ?> this website</h3>

		</div> <!-- end post-title -->

	    <div class="discriptionAbout">
			<div id="imageAbout">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_about_camera3.jpg" alt="About-image">
			</div>

			<div>
				<p>Stumptown plaid sartorial, Truffaut fashion axe selvage Austin. Four loko street art banh mi, asymmetrical fashion axe deep v put a bird on it. Paleo fap hoodie cardigan next level freegan. Wayfarers narwhal seitan, PBR bespoke skateboard kitsch pop-up farm-to-table normcore meh. Messenger bag hashtag stumptown fixie banjo quinoa. Pitchfork salvia Odd Future kogi you probably haven't heard of them. Twee butcher tousled Cosby sweater.</p>

				<p>McSweeney's cliche Shoreditch vegan, aesthetic synth pour-over forage. Mustache lomo fingerstache, Brooklyn quinoa try-hard Godard. Banksy drinking vinegar Brooklyn, High Life post-ironic keffiyeh deep v. Post-ironic next level narwhal sartorial swag. Mixtape YOLO tote bag, tattooed shabby chic flexitarian pop-up salvia +1 PBR. Hashtag viral brunch VHS hella. Single-origin coffee deep v lo-fi, roof party readymade organic put a bird on it jean shorts beard.</p>
			</div>
			<!-- post content -->
<!-- 		<?php the_content(); ?>
 -->
		</div><!-- end discriptionAbout -->
	</div>

		<!-- featured image -->
		<div class="featured-image">
			<?php the_post_thumbnail('feature-image' ); ?>
		</div>

<!-- end page-content>