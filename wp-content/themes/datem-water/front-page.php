<?php
/* Template Name: Home */
get_header();
while(have_posts()): the_post();
?>

<section class="home-content">
	<h2><?php echo get_field('top_heading') ?></h2>
	<h1><?php echo get_field('heading') ?></h1>
	<p><?php the_content(); ?></p>
</section>
<div class="home"></div>

<?php
endwhile;
get_footer();
