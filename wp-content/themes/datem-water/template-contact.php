<?php
/* Template Name: Contact us */
get_header();
while(have_posts()): the_post();
?>
<section class="contact-content">
  <article>
    <div class="contactform">
      <h1>Contact <span>Us</span></h1>
      <h2>Get in touch</h2>
      <p>Leave us your comments or suggestions</p>
      <ul>
        <li>
          <label>Name*</label>
          <input type="text" name="">
        </li>
        <li>
          <label>Email Address*</label>
          <input type="email" name="">
        </li>
        <li>
          <label>Contact Number*</label>
          <input type="text" name="">
        </li>
        <li>
          <label>Message*</label>
          <textarea></textarea>
        </li>
        <li>
          <input type="submit" name="" value="SEND">
        </li>
      </ul>
    </div>
    <aside>
      <h4>Address and Directions:</h4>
      <ul>
        <li class="address">2/F DATEM BUILDING, 99 MINDANAO AVENUE, <br>
          BRGY. BAHAY TORO, QUEZON CITY, PHILIPPINES 1106</li>
          <li class="contactno">(632) 923-2836<br>
            (632) 920-9161</li>
            <li class="email">info@datem.com.ph <br>
              jjstabarbara@datem.com.ph</li>
              <li class="social">/ DATEMInc</li>
            </ul>
            <div class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.8340530294467!2d121.03344731523129!3d14.665357179417176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b720255bdc0d%3A0xf0e5933b14004823!2sDATEM+Incorporated!5e0!3m2!1sen!2sph!4v1493799907825" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </aside>
        </article>
      </section>
      <div class="contact"></div>
      <?php
    endwhile;
    get_footer();
