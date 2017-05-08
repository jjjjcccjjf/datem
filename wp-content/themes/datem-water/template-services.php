<?php
/* Template Name: Services */
get_header();
while(have_posts()): the_post();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
<section class="services-content">
  <article>
    <h1><?php the_title(); ?></h1>
    <h2><?php the_content() ?></h2>
    <ul>
      <?php

      $i = 0; # Counter for our modal
      $args = array('post_type' => 'service', 'posts_per_page' => -1);
      $the_query = new WP_Query($args);
      if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
        <li>
          <article>
            <h3 class="gradient"><?php the_title(); ?></h3>
            <p><a href="#" data-mfp-src="#test-popup<?= $i ?>" class="open-popup-link">>> Read more...</a></p>
          </article>
          <aside><img src="<?php the_field('side_logo')?>"></aside>
        </li>
      <?php $i++; endwhile; wp_reset_postdata();
    } else {
      // no posts found
    } ?>
  </ul>

  <!-- ######################################### -->
   <?php

  $i = 0; # Counter for our modal
  $args = array('post_type' => 'service', 'posts_per_page' => -1);
  $the_query = new WP_Query($args);
  if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
    <div id="test-popup<?= $i ?>" class="white-popup mfp-hide">
      <div class="contents">
        <p><img src="<?php echo get_the_post_thumbnail_url(); ?>"></p>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content() ?></p>
      </div>
    </div>
  <?php $i++; endwhile; wp_reset_postdata();
} else {
  // no posts found
} ?>

</article>

</section>
<div class="services"></div>
<?php
endwhile;
get_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.js"></script>
<script type="text/javascript">
$(document).ready(function() {

  $('.open-popup-link').magnificPopup({
    items: [
      <?php $i = 0; # Counter for our modal
        $args = array('post_type' => 'service', 'posts_per_page' => -1);
        $the_query = new WP_Query($args);
        if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
          {
            src: '#test-popup<?= $i ?>', // CSS selector of an element on page that should be used as a popup
            type: 'inline'
          }<?php echo ($i < $the_query->found_posts) ? ",": "";?>
        <?php $i++; endwhile; wp_reset_postdata();
      } else {
        // no posts found
      } ?>
    ],
    gallery: {
      enabled: true
    },
    type:'inline',
    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  });

});
</script>
