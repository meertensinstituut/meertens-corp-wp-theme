<?php /* Template Name: List page - general */ ?>

<?php get_header(); ?>
<?php get_sidebar(); ?>




<main id="main">

  <div class="mlayout">
    <h1 class="mPageTitle"><?php the_title(); ?></h1>
    <div class="mPageContent">
      <?php
      if (have_posts()) :
            while (have_posts()) : the_post(); ?>

            	<?php the_content() ?><br>
              <?php
              $listCategory = get_post_custom_values($key = 'list_category');
              $chosenCategory = $listCategory[0];
              ?>


        <?php endwhile; ?>

      <?php endif; ?>

      </div>






      <div class="mPageItems">



      <?php
      wp_reset_postdata();

      $loop = new WP_Query(array(
          'category_name' => $chosenCategory,
          'posts_per_page'   => -1,
          'order'     => 'DESC',
          'orderby'   => 'date'


      ));


      if ( $loop->have_posts() ):   ?>
      <div id="filteronList">  </div>
        <ol id="list1">
        <?php while ( $loop->have_posts() ) : $loop->the_post( get_the_ID() )?>

        <li>
          <?php the_title(); ?><br>
          <?php the_date('d M Y'); ?><br>
          <?php
          $post_categories = get_the_category();
          $cats = array();


          foreach($post_categories as $c){
              $cat = get_category( $c );
              $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
              echo '<span class="tag">'.$cat->name.'</span>';

          }





            ?>
        </li>

        <?php endwhile; ?>
        </ol>


        <?php endif; ?>






    </div>
  </div>

</main>

<script src="<?php bloginfo('template_url'); ?>/js/findTags.js" charset="utf-8"></script>
<?php get_footer(); ?>
