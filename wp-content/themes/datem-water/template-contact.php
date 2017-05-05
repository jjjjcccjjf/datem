<?php
/* Template Name: Contact us */
get_header();
while(have_posts()): the_post();
?>
<section class="contact-content">
  <article>
    <?php the_content(); ?>
    <aside>
      <h4>Address and Directions:</h4>
      <ul>
        <li class="address"><?php the_field('address') ?></li>
        <li class="contactno">
          <?php
          if( have_rows('phone') ):
            while ( have_rows('phone') ) : the_row();
            echo get_sub_field('phone') . "<br>" ;
          endwhile;
          else :
          endif;
          ?>
        </li>
        <li class="email">
          <?php
          if( have_rows('email') ):
            while ( have_rows('email') ) : the_row();
            echo get_sub_field('email') . "<br>" ;
          endwhile;
          else :
          endif;
          ?>
        </li>
        <li class="social"><?php the_field('social') ?></li>
      </ul>
      <div class="google-maps">
        <?php the_field('google_map'); ?>
      </div>
    </aside>
  </article>
</section>
<div class="contact"></div>
<?php
endwhile;
get_footer();
