<?php
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
$intro = get_field('intro', $thisID); 
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
            <?php if( !empty($intro['title']) ) printf('<h2 class="sec-entry-header-title fl-h6">%s</h2>', $intro['title']); ?>
            <p>
            <?php 
              if( !empty($intro['description']) ) printf('%s', $intro['description']); 
              $email = get_field('emailaddres', 'options');
              if( !empty($email) ) printf('<a href="mailto:%s"> e: %s</a>', $email, $email);
            ?>
            </p>
          </div>
          <div class="contact-form-wrp clearfix">
            <?php if( !empty($intro['shortcode']) ) echo do_shortcode($intro['shortcode']); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php get_footer(); ?>