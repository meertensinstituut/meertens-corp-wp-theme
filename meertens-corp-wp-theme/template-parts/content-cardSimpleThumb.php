<article class="mCard mCardsSimpleThumb">

  <div class="mCards__thumbnailSmall">
		<?php
		if ( has_post_thumbnail() ) {
			echo get_the_post_thumbnail( $post_id, 'thumbnail' );
	}  ?>
  </div>

  <div><?php get_template_part( 'template-parts/content', 'cardBasics' ); ?></div>
</article>
