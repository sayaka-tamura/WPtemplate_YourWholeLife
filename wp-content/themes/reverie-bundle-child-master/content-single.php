  <!-- Main Content Row -->
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <header class="medium-4 large-5 columns">

      <h3 class="entry-title"><?php the_title(); ?></h3>
      <p class="entry-meta">
        by <?php the_author_posts_link(); ?> <br>
        posted on <?php the_date(); ?> <br>
        Filed in: <?php the_category(', '); ?> <br>
        <?php the_tags('Tags: ', ' • ','<br />'); ?>
      </p>

    </header><!-- end Sidebar -->

    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="medium-8 large-7 columns">

      <div class="featuredimage">
        <?php the_post_thumbnail('fd-lrg');?>
      </div>

      <?php the_content();?>

      <!-- Next-Previous Posts -->
      <style>
        /*Add this to your custom css for the project, only putting it here because we haven't gotten there yet.*/
        .button a, .button a:hover, .button a:visited{
          color:#fff;
        }
      </style>
      <!--Start Pager -->
      <div class="row">
        <div class="medium-6 columns">
          <div class="panel">
            <h6>Title of Previous Post</h6>
            <div class="tiny button">
              <?php previous_post_link('&laquo; %link', '%title', TRUE ); ?>View Previous
            </div>
          </div>
        </div>

        <div class="medium-6 columns">
          <div class="panel">
            <h6>Title of Next Post</h6>
            <div class="tiny button">
              <?php next_post_link('%link &raquo;', '%title', true); ?>View Next
            </div>

          </div>
        </div>
      </div>
      <!-- end Pager -->
      <!-- end Related Posts -->

      <div id="comment-area">
        <?php if( have_comments() ): ?>
        <h3 id="comments">Comment</h3>
        <ol class="commets-list">
          <?php wp_list_comments( 'avatar_size=55' ); ?>
        </ol>
        <?php endif; ?>
      </div>

      <?php comments_template(); ?>
    </div>
    <!-- end main content column -->


  </div>
  <!-- end main content row -->