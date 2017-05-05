<?php
/* Template Name: About us */
get_header();
while(have_posts()): the_post();
?>
<section class="about-content">
  <article>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <div class="logos">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos.png">
      <p><a href="https://www.mann-hummel.com" target="_blank">https://www.mann-hummel.com</a></p>
    </div>
  </article>
  <aside>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutimg.png">
  </aside>
</section>
<div class="about"></div>
<?php
endwhile;
get_footer();
