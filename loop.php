<?php
  while ( have_posts() ) {
		the_post();
		global $post;
			/**
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		if (is_cart()) {
			get_template_part( 'template-parts/content', 'cart' );
		} elseif (is_checkout()) {
			get_template_part( 'template-parts/content', 'checkout' );
		} else {
			get_template_part( 'template-parts/content', 'page' );
		}
	};
?>