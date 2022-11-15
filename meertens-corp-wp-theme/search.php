
<?php include 'php.php'; ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php
$settings = pods('search_settings');
//$settings->display('exlude_categories_in_search');
//$settings->display('exclude_labels_in_filter');

$catNames = '';
$loop = new WP_Query( array(
    //'post_type' => 'photo',
    'posts_per_page' => 9999,
    'orderby' => 'post_date',

    's' => get_search_query()
));

$query = $loop;

$labels = array(
              array('Actueel', '', 'Nieuws'),
              array('Databanken', '', 'Databanken'),
              array('Publicaties', '', 'Publicaties'),
              array('Collecties', '', 'Collecties'),
              array('Collecties', 'Projecten', 'Projecten'),
              array('Actueel', 'Agenda', 'Agenda'),
              array('', '', 'medewerkers'),
              array('', '', 'Oud-medewerkers'),
              array('Actueel', 'in de media', 'in de media')
            );

function findLabel($labelHiarchy, $labelIfs) {
  $out = '';

  foreach ($labelIfs as &$terms) {
    if (end($terms) == end($labelHiarchy)) {
        $out = '<span class="tag mTextSmall">'.end($terms).'</span>';
    }
    else {
      if ($terms[1] == $labelHiarchy[1]) {
          $out = '<span class="tag mTextSmall">'.$terms[2].'</span>';
      }
      else {
        if ( ($terms[0] == $labelHiarchy[0]) AND ($terms[1] == $labelHiarchy[1]) ) {
            $out = '<span class="tag mTextSmall">'.$terms[2].'</span>';
        }
        if ( ($terms[0] == $labelHiarchy[0]) AND ($terms[1] == '') ) {
            $out = '<span class="tag mTextSmall">'.$terms[2].'</span>';
        }
      }
    }

}

return array($out);

}
?>


<div id="main">
  <div class="mlayout3col mlayoutHeight mFlexConditional mlayoutVolg">
    <div class="mBorderUnder mLineLeft mAlignMiddle mCollHeaderBar paddingSite" >
      <h1 ><?php echo $query->found_posts; ?> results for "<?php echo get_search_query(); ?>"</h1>

    </div>
    <main class="mLineLeft mDoubleCol " id="list1">
        <?php

        if( $query->have_posts()):
          while( $query->have_posts()): $query->the_post();
        ?>
          <article class="mListItem incCard">
            <div class="mListItem__inner">

            <h2>
              <a href="<?php the_permalink(); ?>"><?php echo removeEngStr(get_the_title()); ?></a>
            </h2>

            <?php
                      $post_categories = get_the_category();
                      $cats = array();
                      foreach($post_categories as $c){
                          $cat = get_category( $c );
                          $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                          if ( $cat->name != 'Uncategorized') {

                              $catsPathStr = rtrim( get_category_parents( $cat->term_id, false, ',' ), ',');
                              $catsPath = explode(",", $catsPathStr);
                              echo findLabel($catsPath, $labels)[0];
                          }
                      }
              ?>
            </div>

          </article>



        <?php endwhile; ?>
        <?php endif; ?>


    </main>

    <div class="mLineLeft paddingSite mRightAside mAlignTopBottom mBgGrey">
      <div>
        <div class="mTextBlock mTextSmall mMarginPageTop"  id="filteronList"></div>
        <?php get_template_part( 'template-parts/comp', 'social-media' ); ?>
      </div>

      <div></div>

    </div>

  </div>
</div>



<script src="<?php bloginfo('template_url'); ?>/js/findTags.js" charset="utf-8"></script>
<?php get_footer(); ?>
