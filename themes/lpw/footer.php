<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $telephone = get_field('telephone', 'options');
  $fax = get_field('fax', 'options');
  $email = get_field('emailaddres', 'options');
  $address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  $cooper = get_field('cooper_basin', 'options');
  $sinfo = get_field('social_media', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?> 

<footer class="footer-wrp">
  <div class="ftr-background">
    <div class="ftr-grn-bg hide-md" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/ftr-bg.png);"></div>
    <div class="ftr-grn-bg ftr-grn-bg2 show-md" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/ftr-bg2.png);"></div>
    <!-- <img src="<?php echo THEME_URI; ?>/assets/images/ftr-bg.png"> -->
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-inner">
          <div class="ftr-left">
            <?php if( !empty($logo_tag) ): ?>
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <?php endif; ?>
          </div>
          <div class="ftr-rgt">
            <div class="ftr-top-cntlr">
              <div class="ftr-top-details">
                <div class="ftr-tel">
                  <a href="tel:1300459308">1300 459 308</a>
                </div>
                <div class="ftr-email">
                  <h6 class="ftr-email-title">Lorem ipsum</h6>
                  <a href="mailto:admin@liveplaywork.com.au">admin@liveplaywork.com.au</a>
                </div>
                <div class="ftr-addr">
                  <a href="#">
                    Level 1, 53 Burswood Road<br>
                    Burswood WA 6100
                  </a>
                </div>
              </div>
              <div class="ftr-top-social">
                <ul class="reset-list">

                  <li>
                    <a target="_blank" href="#">
                      <i>
                        <svg class="instagram-svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5" fill="transparent">
                        <use xlink:href="#instagram-svg"></use> </svg>
                      </i>
                    </a>
                  </li>

                  <li>
                    <a target="_blank" href="#">
                      <i>
                        <svg class="facebook-svg" width="11.419" height="21.32" viewBox="0 0 11.419 21.32" fill="transparent">
                        <use xlink:href="#facebook-svg"></use> </svg>
                      </i>
                    </a>
                  </li>

                  <li>
                    <a target="_blank" href="#">
                      <i>
                        <svg class="youtube-svg" width="29.007" height="20.68" viewBox="0 0 29.007 20.68" fill="transparent">
                        <use xlink:href="#youtube-svg"></use> </svg>
                      </i>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="ftr-btm-cntlr">
              <div class="ftr-copyright">
                <p>&copy;2021 Live Play Work</p>
              </div>
              <div class="ftr-btm-menu">
                <ul class="reset-list">
                  <li><a href="#">Privacy policy</a></li>

                </ul>
              </div>
              <div class="ftr-developed-by">
                <p>Website by <a href="#">BEVIN Creative</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>