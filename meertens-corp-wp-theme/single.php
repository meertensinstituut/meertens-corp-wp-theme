

<?php get_header(); ?>
<?php get_sidebar(); ?>




<div id="main">

  <div class="mlayout3col mFlexConditional">
    <main class="mLineLeft mDoubleCol mAlignCenter paddingSite">
      {{> custom/meertens/breadcrumb}}
      <div class="mTextBlock">
        <h1 ><?php the_title(); ?></h1>
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

    </main>


    <div class="mLineLeft paddingSite mRightAside mAlignTopBottom">

      <div class="mTextBlock mTextSmall mTextGrey mMarginPageTop">Published 12-12-2021</div>
      <div>Share</div>

    </div>




</div>



</div>


<?php get_footer(); ?>
