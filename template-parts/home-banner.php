<?php 
$banners = get_posts(array(
  'category' => 'hero-img'
));
if($banners):
  foreach($banners as $banner):
    setup_postdata($banner);
?>
<article class="banner">
  <style>
  .banner {
    background: url(<?php echo the_post_thumbnail_url('medium_large')?>) center center no-repeat;
    background-size: cover;
    box-shadow: 0 -10px 15px rgba(0, 0, 0, .15) inset;
    display: flex;
    margin-bottom: calc(var(--grid-gap) * 2.618);
    height: 38.2vh;
  }

  .banner-content,
  .banner-text {
    display: inline-block;
    padding: calc(var(--grid-gap) * 0.618) var(--grid-gap);
  }

  .banner-content {
    background: rgba(255, 255, 255, .65);
    text-align: center;
  }

  .banner-logo__img {
    margin-bottom: calc(var(--grid-gap) / 2);
    width: 15em;
  }

  .banner-text {
    border-top: solid;
    font-size: 1.25em;
    font-family: var(--font-family-titles);
  }

  .banner-text p {
    margin: 0;
  }

  @media (min-width: 768px) {
    .banner {
      background-image: url(<?php echo the_post_thumbnail_url('large')?>);
    }
  }

  @media (min-width: 1024px) {
    .banner {
      background-image: url(<?php echo the_post_thumbnail_url('full')?>);
    }
  }
  </style>
  <div class="grid" slot="description">
    <div class="col-12">
      <div class="banner-content">
        <div class="banner-logo">
          <img class="banner-logo__img"
            src="<?php echo get_template_directory_uri() ?>/benites-js/www/assets/img/logo.svg"
            alt="<?php the_title()?>" width="1479" height="641" />
        </div>
        <div class="banner-text">
          <?php the_content()?>
        </div>
      </div>
    </div>
  </div>
</article>
<?php
  endforeach;
  wp_reset_postdata();
endif;