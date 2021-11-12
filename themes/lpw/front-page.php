<?php get_header(); 

$hbanner = get_field('home_banner', HOMEID);
if($hbanner):
  $banner = !empty($hbanner['image'])? cbv_get_image_src( $hbanner['image'] ): '';
  $hasvideo = !empty($hbanner['ogg_video']) || !empty($hbanner['mp4_video'])? true:false;
?>
<section class="hm-banner <?php echo $hasvideo?' has-video':''; ?>"><!--  has-video -->
	<div class="hm-banner-bg-black"></div>
	<?php 
    if( $hasvideo ): 
      $video_urlmp4 = $hbanner['mp4_video'];
      $video_urlogg = $hbanner['ogg_video'];
    ?>
    <div class="hm-video-cntlr">
      <video id="bnr-vdo" autoplay muted loop>
        <?php if( !empty($video_urlogg)){ ?>
        <source src="<?php echo $video_urlogg; ?>" type="video/ogg">
        <?php } 
        if( !empty($video_urlmp4)){
        ?>
        <source src="<?php echo $video_urlmp4; ?>" type="video/mp4">
        <?php } ?>
      </video>
    </div>
    <?php endif; ?>
	<div class="hm-banner-bg inline-bg" style="background-image: url('<?php echo $banner; ?>');">
	</div>
	<!-- <div class="hm-banner-bg-overlay"></div> -->
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="hm-banner-desc-cntlr">
	        <div class="hm-bnr-desc">
	        	<?php 
                if( !empty($hbanner['description']) ) echo wpautop( $hbanner['description'] );
                $hbannerlink = $hbanner['link'];
                if( is_array( $hbannerlink ) &&  !empty( $hbannerlink['url'] ) ){
                    printf('<div class="hm-bnr-desc-btn"><a class="fl-white-btn fl-btn" href="%s" target="%s">%s</a></div>', $hbannerlink['url'], $hbannerlink['target'], $hbannerlink['title']); 
                }
              ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>    
</section>
<?php endif; ?>

<?php
$showhide_services = get_field('showhide_services', HOMEID);
if($showhide_services): 
  $servicesec = get_field('servicesec', HOMEID); 
  if($servicesec ): 
?>

<section class="community-services-sec">
	<div class="cmnuty-srvcs-top-skew" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/cmnuty-srvcs-top-skew.png');"></div>
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="cmnuty-srvcs-cntlr">
	        <div class="sec-entry-header cmnuty-srvcs-entry-header">
	        	<?php  
	        		if( !empty($servicesec['title']) ) printf('<h2 class="sec-entry-header-title fl-h6">%s</h2>', $servicesec['title']); 
	        		if( !empty($servicesec['description']) ) echo wpautop( $servicesec['description'] );
	        	?>
	        </div>
	        <?php 
		        $services = $servicesec['services'];
		        if( $services ):
		    ?>
	        <div class="cmnuty-srvcs-grid-cntlr">
	          <div class="cmnuty-srvcs-grid cmnutySrvcsSlider">
	          	<?php foreach( $services as $service ): ?>
	            <div class="cmnuty-srvcs-item-cntlr">
	              <div class="cmnuty-srvcs-item-inr">
	                <div class="cmnuty-srvcs-item">
	                  <div class="cmnuty-srvcs-item-img">
	                  	<?php echo !empty($service['icon'])? cbv_get_image_tag($service['icon']):''; ?>
	                  </div>
	                  <div class="cmnuty-srvcs-item-desc-cntlr">
	                  	<?php  
			              if( !empty($service['title']) ) printf( '<h3 class="cmnuty-srvcs-item-title fl-h6 mHc">%s</h3>', $service['title'] ); 
			            ?>
	                    <div class="cmnuty-srvcs-item-desc">
	                    	<?php  if( !empty($service['description']) ) echo wpautop( $service['description'] ); ?>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <?php endforeach; ?>
	          </div>
	        </div>
	        <?php endif; ?>
	      </div>
	    </div>
	  </div>
	</div>
</section>
<?php endif; endif;?>


<?php
$showhide_contact = get_field('showhide_contact', HOMEID);
if($showhide_contact): 
  $contactsec = get_field('contactsec', HOMEID); 
  if($contactsec ): 
?>
<section class="hm-contact-form-sec-wrp">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="contact-form-block clearfix">
	        <div class="contact-form-dsc-wrp">
	          <div class="sec-entry-header">
	          	<?php  
	        		if( !empty($contactsec['title']) ) printf('<h2 class="sec-entry-header-title fl-h6">%s</h2>', $contactsec['title']); 
	        	?>
	            <p>
            	<?php 
            		if( !empty($contactsec['description']) ) printf('%s', $contactsec['description']); 
            		$email = get_field('emailaddres', 'options');
            		if( !empty($email) ) printf('<a href="mailto:%s"> e: %s</a>', $email, $email);
            	?>
	            </p>
	          </div>

	          <?php 
	          	$shortcode = $contactsec['shortcode'];
	          	if( !empty($shortcode) ): 
	          ?>
	          <div class="contact-form-wrp clearfix">
	            <div class="wpforms-container">
	              <?php echo do_shortcode($shortcode); ?>
	            </div>
	          </div>
	      	  <?php endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</section>
<?php endif; endif;?>

<?php get_footer(); ?>