<?php
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'banner'); ?>
<?php get_template_part('templates/breadcrumbs'); ?>

<section class="hm-contact-form-sec-wrp contact-form-sec-wrp">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="contact-form-block clearfix">
        <div class="contact-form-dsc-wrp">
          <div class="sec-entry-header">
            <h2 class="sec-entry-header-title fl-h6">ABOUT OUR COMMUNITY & SERVICES</h2>
            <p>Have we contacted you? Return message now! <a href="mailto:e:admin@liveplaywork.com.au">e: admin@liveplaywork.com.au</a></p>
          </div>
          <div class="contact-form-wrp clearfix">
            <div class="wpforms-container">
              <div class="wpforms-form needs-validation novalidate">
                <div class="wpforms-field-container">
                  <div class="wpforms-field">
                    <input type="text" name="name" placeholder="Your name" required="">
                    <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                  </div>
                  <div class="wpforms-field">
                    <input type="email" name="email" placeholder="Your email" required="">
                    <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                  </div>
                  <div class="wpforms-field">
                    <input type="text" name="text" placeholder="Contact number" required="">
                    <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                  </div>
                  <div class="wpforms-field wpforms-field-textarea">
                    <textarea name="message" placeholder="Write your message here"></textarea>
                  </div>
                </div>
                <div class="wpforms-submit-container">
                  <button type="submit" name="submit" class="wpforms-submit">send message</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php get_footer(); ?>