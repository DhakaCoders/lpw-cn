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


<section class="community-services-sec">
	<div class="cmnuty-srvcs-top-skew" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/cmnuty-srvcs-top-skew.png');"></div>
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="cmnuty-srvcs-cntlr">
	        <div class="sec-entry-header cmnuty-srvcs-entry-header">
	          <h2 class="sec-entry-header-title fl-h6">ABOUT OUR COMMUNITY & SERVICES</h2>
	          <p>Charity provider of sustainable lifestyle services, activities & resources. We service those in need via other service providers. Founded on collaboration, and a balance between: Living, Playing & Working.</p>
	        </div>
	        <div class="cmnuty-srvcs-grid-cntlr">
	          <div class="cmnuty-srvcs-grid cmnutySrvcsSlider">
	            <div class="cmnuty-srvcs-item-cntlr">
	              <div class="cmnuty-srvcs-item-inr">
	                <div class="cmnuty-srvcs-item">
	                  <div class="cmnuty-srvcs-item-img">
	                    <img src="<?php echo THEME_URI; ?>/assets/images/cmnuty-srvcs-item-img-001.svg" alt="">
	                  </div>
	                  <div class="cmnuty-srvcs-item-desc-cntlr">
	                    <h3 class="cmnuty-srvcs-item-title fl-h6 mHc">LIVE</h3>
	                    <div class="cmnuty-srvcs-item-desc">
	                      <p>We can assist you,<br> your community or business to<br> enjoy & live your best life.
	                      </p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="cmnuty-srvcs-item-cntlr">
	              <div class="cmnuty-srvcs-item-inr">
	                <div class="cmnuty-srvcs-item">
	                  <div class="cmnuty-srvcs-item-img">
	                    <img src="<?php echo THEME_URI; ?>/assets/images/cmnuty-srvcs-item-img-002.svg" alt="">
	                  </div>
	                  <div class="cmnuty-srvcs-item-desc-cntlr">
	                    <h3 class="cmnuty-srvcs-item-title fl-h6 mHc">PLAY!… WHAT’S <br> STOPPING YOU?</h3>
	                    <div class="cmnuty-srvcs-item-desc">
	                      <p>Life can get so serious!<br> 
	                        Play that is light-hearted,<br> balanced & creative ensures<br> joy for your best life.
	                      </p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="cmnuty-srvcs-item-cntlr">
	              <div class="cmnuty-srvcs-item-inr">
	                <div class="cmnuty-srvcs-item">
	                  <div class="cmnuty-srvcs-item-img">
	                    <img src="<?php echo THEME_URI; ?>/assets/images/cmnuty-srvcs-item-img-003.svg" alt="">
	                  </div>
	                  <div class="cmnuty-srvcs-item-desc-cntlr">
	                    <h3 class="cmnuty-srvcs-item-title fl-h6 mHc">WORK <br> (COMMUNITY)</h3>
	                    <div class="cmnuty-srvcs-item-desc">
	                      <p>Work (occupation & community)<br> paid, volunteer or hobbies?<br> 
	                        We work with you, your community<br> & others to find purpose & belong<br> in your best life.
	                      </p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="cmnuty-srvcs-item-cntlr">
	              <div class="cmnuty-srvcs-item-inr">
	                <div class="cmnuty-srvcs-item">
	                  <div class="cmnuty-srvcs-item-img">
	                    <img src="<?php echo THEME_URI; ?>/assets/images/cmnuty-srvcs-item-img-004.svg" alt="">
	                  </div>
	                  <div class="cmnuty-srvcs-item-desc-cntlr">
	                    <h3 class="cmnuty-srvcs-item-title fl-h6 mHc">WORK <br> (INDIVIDUALS)</h3>
	                    <div class="cmnuty-srvcs-item-desc">
	                      <p>What are your strengths? 
	                        What<br> work do you need to do for<br> yourself & your best life? (We don’t<br> service individuals’ needs directly.<br> 
	                        We collaborate, assist & connect<br> other services to assist you).
	                      </p>
	                    </div>
	                  </div>
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

<section class="hm-contact-form-sec-wrp">
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