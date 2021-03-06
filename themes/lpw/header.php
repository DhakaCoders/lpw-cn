<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#EC1218">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php 
    $logoObj = get_field('hdlogo', 'options');
    if( is_array($logoObj) ){
      $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
    }else{
      $logo_tag = '';
    }
    $telephone = get_field('telephone', 'options');
    $email = get_field('emailaddres', 'options');
    $sinfo = get_field('social_media', 'options');
  ?>  
  <svg style="display: none;">
      <symbol id="phone-icon" xmlns="http://www.w3.org/2000/svg" width="18.899" height="21.32" viewBox="0 0 18.899 21.32">
        <path id="Path_1675" data-name="Path 1675" d="M37.258,29.492c-1.316-1.063-3.957-3.109-4.159-3.218-.848-.449-2.044,1.709-2.392,2.259h0a1.282,1.282,0,0,1-2.1.136V28.65h0a46.26,46.26,0,0,1-4.385-5.18c-1.031-1.374-.234-2.126-.016-2.286l.048-.035h0a6.659,6.659,0,0,0,.566-.436A5.705,5.705,0,0,0,26.4,18.322a1.169,1.169,0,0,0-.154-1.114l-2.53-3.431a1.164,1.164,0,0,0-1.627-.249l-.01.007a8.255,8.255,0,0,0-2.985,3.758,8.352,8.352,0,0,0-.266,1.273,8.444,8.444,0,0,0,.266,3.083,14.625,14.625,0,0,0,1.4,3.482,18.743,18.743,0,0,0,2.955,4.024s1.27,1.422,2.278,2.344a11.435,11.435,0,0,0,4.489,2.748,5.55,5.55,0,0,0,3.016.266,5.471,5.471,0,0,0,2.278-1.207,8.4,8.4,0,0,0,2.022-2.339A1.159,1.159,0,0,0,37.258,29.492Z" transform="translate(-18.787 -13.302)"/>
      </symbol>
      <symbol id="mail-icon" xmlns="http://www.w3.org/2000/svg" width="27.682" height="17.411" viewBox="0 0 27.682 17.411">
        <g id="Group_1166" data-name="Group 1166" transform="translate(-10.75 -18.72)">
          <path id="Path_1671" data-name="Path 1671" d="M16.183,18.72H39.711a.324.324,0,0,1,.2.573L28.145,28.485a.324.324,0,0,1-.4,0L15.985,19.293a.324.324,0,0,1,.2-.573Z" transform="translate(-3.46)"/>
          <path id="Path_1672" data-name="Path 1672" d="M27.749,50.382,25.481,48.61a.324.324,0,0,0-.4,0l-9.1,7.108a.324.324,0,0,0,.2.573H39.711a.324.324,0,0,0,.2-.573L30.814,48.61a.324.324,0,0,0-.4,0l-2.268,1.772A.324.324,0,0,1,27.749,50.382Z" transform="translate(-3.46 -20.16)"/>
          <path id="Path_1673" data-name="Path 1673" d="M66.268,29.1l9.091-8.022a.324.324,0,0,1,.535.24V36.263a.324.324,0,0,1-.515.256l-9.095-6.933a.324.324,0,0,1-.044-.456A.3.3,0,0,1,66.268,29.1Z" transform="translate(-37.462 -1.541)"/>
          <path id="Path_1674" data-name="Path 1674" d="M20.376,29.1l-9.091-8.022a.324.324,0,0,0-.535.24V36.263a.324.324,0,0,0,.515.256l9.095-6.933a.324.324,0,0,0,.044-.456A.3.3,0,0,0,20.376,29.1Z" transform="translate(0 -1.541)"/>
        </g>
      </symbol>
      <symbol id="facebook-svg-icon" xmlns="http://www.w3.org/2000/svg" width="11.419" height="21.32" viewBox="0 0 11.419 21.32">
        <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M12.28,11.993l.592-3.858H9.17V5.63a1.929,1.929,0,0,1,2.175-2.085h1.683V.261A20.526,20.526,0,0,0,10.041,0C6.992,0,5,1.848,5,5.193V8.134H1.609v3.858H5V21.32H9.17V11.993Z" transform="translate(-1.609)"/>
      </symbol>
      <symbol id="facebook-svg" xmlns="http://www.w3.org/2000/svg" width="11.419" height="21.32" viewBox="0 0 11.419 21.32">
        <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M12.28,11.993l.592-3.858H9.17V5.63a1.929,1.929,0,0,1,2.175-2.085h1.683V.261A20.526,20.526,0,0,0,10.041,0C6.992,0,5,1.848,5,5.193V8.134H1.609v3.858H5V21.32H9.17V11.993Z" transform="translate(-1.609)" fill="#fff"/>
      </symbol>
      <symbol id="instagram-svg" xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5">
        <g id="Icon_feather-instagram" data-name="Icon feather-instagram" transform="translate(0.5 0.5)">
          <path id="Path_364" data-name="Path 364" d="M8.125,3h10.25A5.125,5.125,0,0,1,23.5,8.125v10.25A5.125,5.125,0,0,1,18.375,23.5H8.125A5.125,5.125,0,0,1,3,18.375V8.125A5.125,5.125,0,0,1,8.125,3Z" transform="translate(-3 -3)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
          <path id="Path_365" data-name="Path 365" d="M20.221,15.434a4.1,4.1,0,1,1-3.454-3.454,4.1,4.1,0,0,1,3.454,3.454Z" transform="translate(-5.87 -5.829)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
          <path id="Path_366" data-name="Path 366" d="M26.25,9.75h0" transform="translate(-10.362 -5.137)"stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
        </g>
      </symbol>
      <symbol id="youtube-svg" xmlns="http://www.w3.org/2000/svg" width="29.007" height="20.68" viewBox="0 0 29.007 20.68">
        <g id="Icon_feather-youtube" data-name="Icon feather-youtube" transform="translate(0.5 0.5)">
          <path id="Path_369" data-name="Path 369" d="M28.92,9.081a3.539,3.539,0,0,0-2.47-2.546C24.261,6,15.5,6,15.5,6S6.745,6,4.555,6.586a3.539,3.539,0,0,0-2.47,2.546A36.917,36.917,0,0,0,1.5,15.866a36.917,36.917,0,0,0,.586,6.785,3.539,3.539,0,0,0,2.47,2.444c2.19.586,10.948.586,10.948.586s8.758,0,10.948-.586a3.539,3.539,0,0,0,2.47-2.546,36.916,36.916,0,0,0,.586-6.683,36.916,36.916,0,0,0-.586-6.785Z" transform="translate(-1.499 -6)" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
          <path id="Path_370" data-name="Path 370" d="M14.625,21.045l7.32-4.163-7.32-4.163Z" transform="translate(-3.486 -7.017)" fill="#fff"/>
        </g>
      </symbol>
  </svg> 
<div class="page-body-cntlr">
  <div class="bdoverlay"></div>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
               <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                 </a>
              </div>
              <?php endif; ?>
            </div>
            <div class="hdr-rgt">
              <div class="hamburger-cntlr show-md">
                <div class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="hdr-topbar">
                <div class="hdr-details-cntlr hide-md">
                  <div class="hdr-details ">
                    <?php if( !empty($email) ): ?>
                    <div class="hdr-mail hdr-details-col">
                      <a href="mailto:<?php echo $email; ?>">
                        <i><svg class="mail-icon" width="27.682" height="17.411" viewBox="0 0 27.682 17.411" fill="#fb5e24">
                          <use xlink:href="#mail-icon"></use></svg>
                        </i>
                      </a>
                    </div>
                    <?php 
                      endif;
                      if( !empty($telephone) ):
                    ?>
                    <div class="hdr-tel hdr-details-col">
                      <a href="tel:<?php echo phone_preg($telephone); ?>">
                        <?php printf('<span>%s</span>', $telephone); ?>
                        <i><svg class="phone-icon" width="18.899" height="21.32" viewBox="0 0 18.899 21.32" fill="#fb5e24">
                          <use xlink:href="#phone-icon"></use></svg>
                        </i>
                      </a>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="hdr-menu hide-md">
                <nav class="main-nav">
                  <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $mmenuOptions ); 
                  ?>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="xs-mobile-menu">
    <div class="xs-mbl-hdr">
      <div class="hdr-lft">
        <?php if( !empty($logo_tag) ): ?>
        <div class="logo">
         <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo $logo_tag; ?>
           </a>
        </div>
        <?php endif; ?>
      </div>
      <div class="hdr-rgt">
        <div class="hamburger-cntlr">
          <div class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <div class="xs-menu">
      <nav class="main-nav">
        <?php 
          $mmenuOptions = array( 
              'theme_location' => 'cbv_main_menu', 
              'menu_class' => 'clearfix reset-list',
              'container' => '',
              'container_class' => ''
            );
          wp_nav_menu( $mmenuOptions ); 
        ?>
      </nav>
    </div>
    <div class="xs-mbl-btm">
      <div class="hdr-details  ">
        <?php if( !empty($email) ): ?>
        <div class="hdr-mail hdr-details-col">
          <a href="mailto:<?php echo $email; ?>">
            <i><svg class="mail-icon" width="27.682" height="17.411" viewBox="0 0 27.682 17.411" fill="#fb5e24">
              <use xlink:href="#mail-icon"></use></svg>
            </i>
          </a>
        </div>
        <?php 
          endif;
          if( !empty($telephone) ):
        ?>
        <div class="hdr-tel hdr-details-col">
          <a href="tel:<?php echo phone_preg($telephone); ?>">
            <?php printf('<span>%s</span>', $telephone); ?>
            <i><svg class="phone-icon" width="18.899" height="21.32" viewBox="0 0 18.899 21.32" fill="#fb5e24">
              <use xlink:href="#phone-icon"></use></svg>
            </i>
          </a>
        </div>
        <?php endif; ?>
      </div>

      <?php if( $sinfo ): ?>
      <div class="xs-mbl-socials">
        <ul class="reset-list">
          <?php 
            if( !empty($sinfo['instagram_url']) ): 
          ?>
          <li>
            <a target="_blank" href="<?php echo $sinfo['instagram_url']; ?>">
              <i>
                <svg class="instagram-svg" width="21.5" height="21.5" viewBox="0 0 21.5 21.5" fill="#FB5E24">
                  <use xlink:href="#instagram-svg"></use> 
                </svg>
              </i>
            </a>
          </li>
          <?php endif; 
            if( !empty($sinfo['facebook_url']) ): 
          ?>
          <li>
            <a target="_blank" href="<?php echo $sinfo['facebook_url']; ?>">
              <i>
                <svg class="facebook-svg-icon" width="11.419" height="21.32" viewBox="0 0 11.419 21.32" fill="#FB5E24">
                  <use xlink:href="#facebook-svg-icon"></use> 
                </svg>
              </i>
            </a>
          </li>
          <?php endif; 
            if( !empty($sinfo['youtube_url']) ): 
          ?>
          <li>
            <a target="_blank" href="<?php echo $sinfo['youtube_url']; ?>">
              <i>
                <svg class="youtube-svg" width="29.007" height="20.68" viewBox="0 0 29.007 20.68" fill="#FB5E24">
                  <use xlink:href="#youtube-svg"></use> 
                </svg>
              </i>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
      <?php endif; ?>
    </div>
  </div>
