<?php get_header(); ?>
<?php get_sidebar(); ?>





<main id="main">

  <div class="mlayoutHome">

    <div class="homeBlok-wide centerBlock mLineLeft mHomeAboutBox" id="about">
      <p>The Meertens Institute, established in 1926, has been a research institute of the Royal Netherlands Academy of Arts and Sciences (KNAW) since 1952. We study the diversity in language and culture in the Netherlands.</p>
    </div>

    <div class="homeBlok-high paddingSite mLineLeft" id="uitgelicht">
      <h2>Uitgelicht</h2>
      <?php query_posts( 'category_name=collecties&posts_per_page=2' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'card01' ); ?>
      <?php endwhile; ?>



        <h2>Agenda</h2>
        <?php query_posts( 'category_name=onderzoek&posts_per_page=2' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'card01' ); ?>
        <?php endwhile; ?>

    </div>

    <div class="mCardsColumn paddingSite mLineLeft" id="nieuws">

        <h2>Nieuws</h2>
        <?php query_posts( 'category_name=collecties&posts_per_page=2' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'card01' ); ?>
        <?php endwhile; ?>


        <h2>Media</h2>
        <?php query_posts( 'category_name=collecties&posts_per_page=2' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'card01' ); ?>
        <?php endwhile; ?>

    </div>

    <div class="mCardsColumn paddingSite mLineLeft" id="databanken">

        <h2>Databanken</h2>
        <?php query_posts( 'category_name=collecties&posts_per_page=2' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'card01' ); ?>
        <?php endwhile; ?>

        <h2>Publicaties</h2>
        <?php query_posts( 'category_name=collecties&posts_per_page=2' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'card01' ); ?>
        <?php endwhile; ?>

    </div>
  </div>

</main>


<?php get_footer(); ?>
