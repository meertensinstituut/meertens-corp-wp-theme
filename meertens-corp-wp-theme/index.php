<?php include 'php.php'; ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>




<div id="main">

  <div class="mlayout3col mFlexConditional">
    <main class="mLineLeft mDoubleCol mAlignCenter paddingSite">
      <div class="mTextBlock mTextSmall mTextGrey mMarginPageTop mMarginBasicBottom">
        <a href="/">Home</a> /
      </div>
      <div class="mTextBlock">
        <h1 ><?php echo removeEngStr(get_the_title()); ?></h1>
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


    <div class="mLineLeft paddingSite mRightAside mAlignTopBottom ">

      <div class="mTextBlock mTextSmall mTextGrey mMarginPageTop">
        <?php
        //if (get_post_type() === 'post') {
            // POST
        //} ?>

        <?php //transl( 'Gepubliceerd op', 'Published 0n') ?> 12-12-2021
      </div>
      <div>Share</div>

    </div>




</div>



</div>


<?php get_footer(); ?>
