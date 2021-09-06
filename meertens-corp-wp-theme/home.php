<?php get_header(); ?>
<?php get_sidebar(); ?>





<main id="main">
  <div class="mlayout3col mlayoutHome">

    <div class="homeBlok-wide centerBlock mLineLeft mHomeAboutBox" id="about">
      <p>The Meertens Institute, established in 1926, has been a research institute of the Royal Netherlands Academy of Arts and Sciences (KNAW) since 1952. We study the diversity in language and culture in the Netherlands.</p>
    </div>


    <div class="mCardsColumn mLineLeft" id="colA">
      <h2 class="mhomeColHeader mhomeColHeaderGreen paddingSite">Uitgelicht</h2>
      <?php query_posts( 'category_name=uitgelicht&posts_per_page=3' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'card01' ); ?>
      <?php endwhile; ?>
    </div>


    <div class="mCardsColumn  mLineLeft" id="colB">
      <h2 class="mhomeColHeader paddingSite">Nieuws</h2>
      <?php query_posts( 'category_name=— — — 2021&posts_per_page=3' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'card01' ); ?>
      <?php endwhile; ?>


      <h2 class="mhomeColHeader paddingSite">Media</h2>
      <?php query_posts( 'category_name=in-de-media&posts_per_page=3' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'card01' ); ?>
      <?php endwhile; ?>

    </div>


    <div class="mCardsColumn  mLineLeft homeBlok-high" id="colC">
      <div class="homeBlok-right-top paddingSite">
        <div><strong>Onderzoek</strong><br><a href="#">Bekijk de onderzoeksprojecten van het Meertens Instituut</a></div>
        <div><strong>Databanken</strong><br><a href="#">Bekijk de databanekn van het Meertens Instituut</a></div>
        <div><strong>Publicaties</strong><br><a href="#">Bekijk de publicaties van het Meertens Instituut</a></div>
      </div>


        <h2 class="mhomeColHeader paddingSite">Agenda</h2>
        <?php query_posts( 'category_name=onderzoek&posts_per_page=3' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'card01' ); ?>
        <?php endwhile; ?>

    </div>






  </div>

</main>


<?php get_footer(); ?>
