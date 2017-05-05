<?php
/* Template Name: About us */
get_header();
while(have_posts()): the_post();
?>
<section class="about-content">
  <article>
    <h1>ABOUT US</h1>
    <p>DATEM WATER is the latest member of DATEM Inc.’s growing family. With the expertise of DATEM Inc. in construction and with Mann+Hummel’s technology in water filtration, DATEM Water will be able to provide clients in the municipal, commercial and industrial sectors with water and wastewater services such as bulk water supply, sewage treatment options and septage management program utilizing the latest technology and cost effective solutions.</p>

    <p>Mann+Hummel Filter Technology is a global filtration company headquartered in Singapore that develops and manufactures membranes and membrane system that meets the Philippine National Standard for Drinking Water (PNSDW)</p>

    <p>From the partnership, DATEM Water is capable to provide several products and services that can cater to a wide array of clients from the water districts, municipalities, cities to small communities, villages, buildings and factories.</p>

    <p>These services will be available through several models:</p>
    <ul>
      <li><strong>Engineering, Procurement &amp; Construction + Operation (EPC+O):</strong> DATEM Water will construct the required facilities for the client on a progressive billing scheme then DATEM Water will then operate the said facility for the client.</li>
      <li><strong>Build Own Operate (BOO):</strong> DATEM Water will Design, Finance, Build and Operate the facility on behalf of the client for an agreed amount.</li>
      <li><strong>Build Operate Transfer (BOT):</strong> Similar with BOO but will be limited by a cooperation period.</li>
    </ul>
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
