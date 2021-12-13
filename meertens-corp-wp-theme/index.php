<?php include 'php.php'; ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>




<div id="main">

  <div class="mlayout3col mlayoutHeight mFlexConditional mlayoutVolg">
    <main class="mLineLeft mDoubleCol mAlignCenter paddingSite">
      <div class="mTextBlock mTextSmall mTextGrey ">

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
        <?php get_template_part( 'template-parts/comp', 'social-media' ); ?>

      </div>
      <div></div>

    </div>




</div>



</div>


<?php get_footer(); ?>
