<?php /* Template Name: List page - general */ ?>

<?php get_header(); ?>
<?php get_sidebar(); ?>



<div id="main">

  <div class="mlayout3col mFlexConditional">

    <div class="mBorderUnder mLineLeft mAlignMiddle mCollHeaderBar" >
      <h1 ><?php the_title(); ?></h1>
      <?php
      if (have_posts()) :
          while (have_posts()) : the_post();
              $listCategory = get_post_custom_values($key = 'list_category');
              $chosenCategory = $listCategory[0];

              ?>
              <?php the_content(); ?>

              <?php
          endwhile;
      else :
      ?>
          <h2>No Posts Found</h2>
          <p>Sorry, there are no posts yet.</p>
      <?php
      endif;
      ?>
    </div>





    <main class="mLineLeft mDoubleCol mCardsVolg" id="list1">


      <?php
      wp_reset_postdata();

      $loop = new WP_Query(array(
          'category_name' => $chosenCategory,
          'posts_per_page'   => -1,
          'order'     => 'DESC',
          'orderby'   => 'date'


      ));


      if ( $loop->have_posts() ):   ?>


        <?php while ( $loop->have_posts() ) : $loop->the_post( get_the_ID() )?>


          <div class="mCardHome mLineLeft">
          	<div><strong><?php the_title(); ?></strong></div>
          	<div><a href="<?php the_permalink(); ?>">Read more</a></div>
            <div class=""><?php
                      $post_categories = get_the_category();
                      $cats = array();
                      foreach($post_categories as $c){
                          $cat = get_category( $c );
                          $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                          echo '<span class="tag mTextSmall">'.$cat->name.'</span>';
                      }
              ?>
            </div>
          </div>

        <?php endwhile; ?>
        <?php endif; ?>


    </main>

    <div class="mLineLeft paddingSite mRightAside mAlignTopBottom mBgGrey">

      <div class="mTextBlock mTextSmall mMarginPageTop"  id="filteronList"></div>
      <div>Share</div>

    </div>

  </div>
</div>



<script src="<?php bloginfo('template_url'); ?>/js/findTags.js" charset="utf-8"></script>
<?php get_footer(); ?>
