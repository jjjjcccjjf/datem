<?php
/* Template Name: Services */
get_header();
while(have_posts()): the_post();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
<section class="services-content">
  <article>
    <h1>Services</h1>
    <h2>Your partner in providing water and <br>
      wastewater solution to your community</h2>
      <ul>
        <li>
          <article>
            <h3 class="gradient">Bulk Water Supply through PPP</h3>
            <p><a href="index.html" data-mfp-src="#test-popup" class="open-popup-link">>> Read more...</a></p>
            <aside><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bulkwater.png"></aside>
          </article>

        </li>
        <li>
          <article>
            <h3 class="gradient">Wastewater Management</h3>
            <p><a href="index.html" data-mfp-src="#test-popup1" class="open-popup-link">>> Read more...</a></p>
          </article>
          <aside><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wastewater.png"></aside>
        </li>
        <li>
          <article>
            <h3 class="gradient">Bulk Water Supply through PPP</h3>
            <p><a href="#">>> Read more...</a></p>
          </article>
          <aside><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bulkwater.png"></aside>
        </li>
      </ul>
      <div id="test-popup" class="white-popup mfp-hide">
        <div class="contents">
          <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bulkwater-supply.jpg"></p>
          <h3>Bulk Water Supply through PPP</h3>
          <p>Engineering, Procurement & Construction + Operation (EPC+O): DATEM Water will construct the required facilities for the client on a progressive billing scheme then DATEM Water will then operate the said facility for the client.</p>
          <p>Build Own Operate (BOO): DATEM Water will design, finance, build and operate the facility on behalf of the client for an agreed amount.</p>
          <p>Build Operate Transfer (BOT): Similar with BOO but will be limited by a cooperation period.</p>
        </div>
      </div>
      <div id="test-popup1" class="white-popup mfp-hide">
        <div class="contents">
          <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bulkwater-supply.jpg"></p>
          <h3>Bulk Water Supply through PPP 2</h3>
          <p>Engineering, Procurement & Construction + Operation (EPC+O): DATEM Water will construct the required facilities for the client on a progressive billing scheme then DATEM Water will then operate the said facility for the client.</p>
          <p>Build Own Operate (BOO): DATEM Water will design, finance, build and operate the facility on behalf of the client for an agreed amount.</p>
          <p>Build Operate Transfer (BOT): Similar with BOO but will be limited by a cooperation period.</p>
        </div>
      </div>
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
      {
        src: '#test-popup', // CSS selector of an element on page that should be used as a popup
        type: 'inline'
      },
      {
        src: '#test-popup1', // CSS selector of an element on page that should be used as a popup
        type: 'inline'
      }
    ],
    gallery: {
      enabled: true
    },
    type:'inline',
    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  });

});
</script>
