<?php
/* Template Name: Projects */
get_header();
while(have_posts()): the_post();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flickity.css">

<section class="projects-content">
  <div class="projleft">
    <h1>Projects</h1>
    <h2>DATEM Water takes pride in integrating its technology in the improvement of the quality of water in the Philippines and across neighboring Asian countries.</h2>
  </div>
  <article>
    <ul>
      <li>
        <a href="index.html" data-mfp-src="#test-popup" class="open-popup-link">
          <article>
            <div>
              <h3>METRO KALIBO WATER DISTRICT</h3>
              <p>The 15 year Bulk Water Supply Contract with Metro Kalibo Water District can provide  5,000
                to 10,000 cubic meters per day of potable water for the Poblacion of Kalibo</p>
              </div>
              <aside><img src="<?php echo get_template_directory_uri(); ?>/assets/images/metro-kalibo.jpg"></aside>

            </article>
          </a>
        </li>
        <li>
          <a href="index.html" data-mfp-src="#test-popup1" class="open-popup-link">
            <article>
              <div>
                <h3>METRO KALIBO WATER DISTRICT</h3>
                <p>The 15 year Bulk Water Supply Contract with Metro Kalibo Water District can provide  5,000
                  to 10,000 cubic meters per day of potable water for the Poblacion of Kalibo</p>
                </div>
                <aside><img src="<?php echo get_template_directory_uri(); ?>/assets/images/metro-kalibo.jpg"></aside>

              </article>
            </a>
          </li>
          <li>
            <a href="index.html" data-mfp-src="#test-popup1" class="open-popup-link">
              <article>
                <div>
                  <h3>METRO KALIBO WATER DISTRICT</h3>
                  <p>The 15 year Bulk Water Supply Contract with Metro Kalibo Water District can provide  5,000
                    to 10,000 cubic meters per day of potable water for the Poblacion of Kalibo</p>
                  </div>
                  <aside><img src="<?php echo get_template_directory_uri(); ?>/assets/images/metro-kalibo.jpg"></aside>

                </article>
              </a>
            </li>
          </ul>
          <div id="test-popup" class="white-popup2 mfp-hide">

            <div class="carousel-container">
              <!-- Flickity HTML init -->
              <div class="carousel carousel-main">
                <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/metro-kalibo.jpg"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
              </div>

              <div class="carousel-nav">
                <div class="carousel-cell is-nav-selected"></div>
                <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/metro-kalibo.jpg"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
              </div>

            </div>


          </div>

        </article>
        <aside class="projright"></aside>

      </section>
      <div class="projects"></div>
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
    <script src="js/flickity.pkgd.min.js"></script>
    <script>
    var $carousel = $('.carousel').flickity();

    var $carouselNav = $('.carousel-nav');
    var $carouselNavCells = $carouselNav.find('.carousel-cell');

    $carouselNav.on( 'click', '.carousel-cell', function( event ) {
      var index = $( event.currentTarget ).index();
      $carousel.flickity( 'select', index );
    });

    var flkty = $carousel.data('flickity');
    var navTop  = $carouselNav.position().top;
    var navCellHeight = $carouselNavCells.height();
    var navHeight = $carouselNav.height();

    $carousel.on( 'select.flickity', function() {
      // set selected nav cell
      $carouselNav.find('.is-nav-selected').removeClass('is-nav-selected');
      var $selected = $carouselNavCells.eq( flkty.selectedIndex )
      .addClass('is-nav-selected');
      // scroll nav
      var scrollY = $selected.position().top +
      $carouselNav.scrollTop() - ( navHeight + navCellHeight ) / 2;
      $carouselNav.animate({
        scrollTop: scrollY
      });
    });
    </script>
