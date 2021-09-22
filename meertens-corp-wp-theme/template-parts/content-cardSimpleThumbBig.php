<article class="mCard">

  <div class="mCards__thumbnailBig">
		<?php
		if ( has_post_thumbnail() ) {
			echo get_the_post_thumbnail( $post_id, 'medium' );
	}  ?>
  </div>

  <div><?php get_template_part( 'template-parts/content', 'cardBasics' ); ?></div>
</article>
