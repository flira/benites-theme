<?php get_header();

if ( have_posts() ) :

  get_template_part( 'loop' );

else :

  get_template_part( 'content', 'none' );

endif;
?>
<?php get_footer();