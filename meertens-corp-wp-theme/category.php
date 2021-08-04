

<?php get_header(); ?>
<?php get_sidebar(); ?>




<main id="main">

  <div class="mlayout">
    <h1 class="mPageTitle"><?php the_title();?></h1>
    <div class="mPageContent">
      <?php
      $catID = get_the_category();
      echo category_description( );  ?>




      <?php
      if (have_posts()) :
          while (have_posts()) : the_post();
              ?>
              <?php the_title();?><br>

              <?php
          endwhile;

      ?>
      <?php echo get_the_posts_pagination(  ); ?>

      <?php
      endif;
      ?>

    </div>
  </div>

</main>


<?php get_footer(); ?>
