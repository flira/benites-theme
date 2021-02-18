<?php
  while ( have_posts() ) :
	the_post();
	global $post;
  	/**
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
	echo is_woocommerce();
?>
<h1>Formato do post</h1>

<?php 
echo is_cart();
endwhile;