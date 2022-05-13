<?php 
$about = get_page_by_path('/about');
if($about):
    setup_postdata($about);
?>
<article class="about">
  <header class="grid">
    <h2 class="col-12">
      <?php echo get_the_title($about)?>
    </h2>
  </header>
  <div class="grid">
    <div class="col-12">
    <?php echo get_the_excerpt($about); ?>
    <a class="read-more focus-animation" href="<?php echo get_the_permalink($about)?>">
      <span class="icon">+</span>
    </a>
    </div>
  </div>
</article>
<?php
  wp_reset_postdata();
endif;