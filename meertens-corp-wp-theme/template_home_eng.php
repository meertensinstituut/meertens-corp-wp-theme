<?php /* Template Name: Homepage eng */ ?>
<?php include 'php.php'; ?>


<?php get_header(); ?>
<?php get_sidebar(); ?>





<main id="main">
  <div class="mlayout3col mlayoutHome mlayoutHeight mLineLeft">

    <div class="homeBlok-wide centerBlock mLineLeft mHomeAboutBox" id="about" style="background-image: url(<?php bloginfo('template_url'); ?>/images/home-table-hero.png);">
      <h1>The Meertens Institute, established in 1926, has been a research institute of the Royal Netherlands Academy of Arts and Sciences (KNAW) since 1952. We study the diversity in language and culture in the Netherlands.</h1>

    </div>


    <div class="mCardsColumn mLineLeft" id="colA">
      <h2 class="mhomeColHeader mhomeColHeaderGreen paddingSite">Featured (in Dutch)</h2>
      <?php
      query_posts( 'category_name=uitgelicht&posts_per_page=6' );
      $counter = 0;
      ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
        if ($counter == 0) {
          get_template_part( 'template-parts/content', 'cardSimpleThumbBig' );
        } else {
          get_template_part( 'template-parts/content', 'cardSimple' );
        }
        $counter++;
         ?>

      <?php endwhile; ?>
    </div>


    <div class="mCardsColumn  mLineLeft" id="colB">
      <h2 class="mhomeColHeader paddingSite">News (in Dutch)</h2>
      <?php query_posts( 'category_name=nieuws&posts_per_page=3' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'cardSimpleThumb' ); ?>
      <?php endwhile; ?>


      <h2 class="mhomeColHeader paddingSite">Media</h2>
      <?php query_posts( 'category_name=in-de-media&posts_per_page=3' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'cardSimpleThumb' ); ?>
      <?php endwhile; ?>

    </div>


    <div class="mCardsColumn  homeBlok-high" id="colC">
      <div class="homeBlok-right-top paddingSite">
        <div><strong>Research</strong><br><a href="/index.php/onderzoek/onderzoeksprojecten-2//">Our research projects</a></div>
        <div><strong>Datasets</strong><br><a href="/index.php/collecties/databanken/">Our datasets</a></div>
        <div><strong>Publications</strong><br><a href="/index.php/onderzoek/publicaties/">Our publication</a></div>
      </div>


        <h2 class="mhomeColHeader paddingSite ">Events (in Dutch)</h2>
        <?php query_posts( 'category_name=agenda&posts_per_page=3' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'cardSimpleThumb' ); ?>
        <?php endwhile; ?>

    </div>





  </div>

</main>


<?php get_footer(); ?>
