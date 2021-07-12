

<?php get_header(); ?>
<?php get_sidebar(); ?>




<main id="main">

  <div class="mlayout">
    <h1 class="mPageTitle"><?php the_title(); ?></h1>
    <div class="mPageContent">
      <?php
      if (have_posts()) :
          while (have_posts()) : the_post();
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
  </div>

</main>


<?php get_footer(); ?>
