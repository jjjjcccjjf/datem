<?php
/* Template Name: Home */
get_header();
while(have_posts()): the_post();
?>

<section class="home-content">
	<h2>The Legacy of Improving</h2>
	<h1>QUALITY OF LIFE</h1>
	<p>Each drop of water we provide comes from sustainable sources, while the process of filtration uses no chemicals making the reject water safe for the environment. At DATEM Water, we recognize the importance of protecting nature and so we aim to deliver safe and potable water, not just for you, but for generations to come.</p>
</section>
<div class="home"></div>

<?php
endwhile;
get_footer();
