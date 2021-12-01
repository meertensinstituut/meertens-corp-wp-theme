<?php /* Template Name: List page - general */ ?>
<?php include 'php.php'; ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>



<div id="main">

  <div class="mlayout3col mlayoutHeight mFlexConditional">


    <div class="mBorderUnder mLineLeft mAlignMiddle mCollHeaderBar paddingSite" >
      <h1 ><?php echo removeEngStr(get_the_title()); ?></h1>
      <?php
      if (have_posts()) :
          while (have_posts()) : the_post();
              $listCategory = get_post_custom_values($key = 'list_category');
              $chosenCategory = $listCategory[0];
              $listOrder = get_post_custom_values($key = 'list_order');
              $chosenOrder = 'date';
              if ($listOrder   != '') {
                $chosenOrder = $listOrder[0];
              }
              $getDomElem = get_post_custom_values($key = 'getDomElem'); //card_show_lines

              //$previewQuery = '//'.$getDomElem[0];


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

      $orderDirection = 'DESC';
      if ($chosenOrder == 'title') {
        $orderDirection = 'ASC';
      }


      $loop = new WP_Query(array(
          'category_name' => $chosenCategory,
          'posts_per_page'   => -1,
          'order'     => $orderDirection,
          'orderby'   => $chosenOrder

      ));
      $showDate = false;
      if ($chosenCategory == '_nieuws') {
        $showDate = true;
      }
      $showTags = true;
      if ($chosenCategory == 'Medewerkers') {
        $showTags = false;
      }
      $postcounter = 1;


      if ( $loop->have_posts() ):   ?>


        <?php while ( $loop->have_posts() ) : $loop->the_post( get_the_ID() )?>


          <article class="mCard mCardsSimpleThumb mLineLeft">

            <?php if ($postcounter <= 12) {?>

            <div class="mCards__thumbnailSmall">
          		<?php
          		if ( has_post_thumbnail() ) {
          			echo get_the_post_thumbnail( $post_id, 'thumbnail' );
          	}  ?>
            </div>
            <?php } ?>
            <div class="">



              <?php if ($showDate) {?>
                <div class="mTextSmall mTextGrey"><?php echo get_the_date('d-m-Y'); ?></div>
                <?php } ?>
              <div><strong><?php the_title(); ?></strong></div>



              <?php
              // show card preview
              if ($getDomElem[0] != '') {
                foreach ($getDomElem as $value) {
                    $DOM = new DOMDocument();
                    $DOM->loadHTML(get_the_content());

                    $xpath = new DOMXPath($DOM);
                    $someclass_elements = $xpath->query('//'.$value);
                    $translation = iconv('utf-8', 'latin1', $someclass_elements[0]->textContent);
                    echo '<div>'.$translation.'</div>';
                }

              }



           ?>


              <div><a href="<?php the_permalink(); ?>">Lees verder</a></div>
              <?php if ($showTags) {?>
              <div class=""><?php
                        $post_categories = get_the_category();
                        $cats = array();
                        foreach($post_categories as $c){
                            $cat = get_category( $c );
                            $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                            if ($chosenCategory != $cat->name) {
                              echo '<span class="tag mTextSmall">'.$cat->name.'</span>';
                            }

                        }
                ?>
              </div>
              <?php } ?>

            </div>

          </article>


          <?php $postcounter++ ?>
        <?php endwhile; ?>
        <?php endif; ?>


    </main>

    <div class="mLineLeft paddingSite mRightAside mAlignTopBottom mBgGrey">

      <div class="mTextBlock mTextSmall mMarginPageTop"  id="filteronList"></div>
      <div></div>

    </div>

  </div>
</div>



<script src="<?php bloginfo('template_url'); ?>/js/findTags.js" charset="utf-8"></script>
<?php get_footer(); ?>
