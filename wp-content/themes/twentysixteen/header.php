<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reality-icon.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootsnav.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/cubeportfolio.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/settings.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/range-Slider.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/search.css">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--Header Ends-->
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
<?php if (is_page('10') ){?>
<header class="layout_boxed">
   <?php } else{ ?>
<header class="layout_default">
   <?php  } ?>
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <?php dynamic_sidebar( 'sidebar-left' ); ?>
        </div>
        <div class="col-md-7 text-right">
          <?php //dynamic_sidebar( 'sidebar-right' ); ?>
          <?php wp_nav_menu( array( 'theme_location' => 'top-right','menu_class' => 'breadcrumb_top text-right' ) ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="header-upper">

    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo"><?php $image = get_field('header_logo', 'option');?>
            <a href="<?php echo $url = site_url(); ?>"> <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
          </div>
        </div>
        <!--Info Box-->
        <div class="col-md-9 col-sm-12 right">

          <div class="info-box first">
            <div class="icons"><i class="icon-telephone114"></i></div>
            <ul>
              <li><strong>Phone Number</strong></li>
        <li><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></li>
              
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons74"></i></div>
            <ul>
              <li><strong>Manhattan Hall,</strong></li>
              <li><?php the_field('manhattan_hall','option');?></li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons142"></i></div>
            <ul>
              <li><strong>Email Address</strong></li>
             <li><a class="edgtf-iwt-link" href="mailto:<?php the_field('email_address','option');?>" target="_self"><?php the_field('email_address','option');?></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="attr-nav">
            <a href="contact.html" class="btn-touch uppercase">Get in Touch</a>
          </div>
          <div class="attr-nav">
            <ul class="social_share clearfix">
              <li><a href="<?php echo $f = get_field('facebook', 'option');?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo $t = get_field('twitter', 'option');?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a class="google" href="<?php echo $go = get_field('google_plues', 'option');?>" target="_blank"><i class="icon-google4"></i></a></li>
            </ul>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <?php $whitelogo = get_field('white_logo', 'option');?>
            <a class="navbar-brand sticky_logo" href="<?php echo $url = site_url(); ?>"><img src="<?php echo esc_url($whitelogo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
          </div>
          <!-- End Header Navigation -->
          <div class="collapse navbar-collapse" id="navbar-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'nav navbar-nav' ) ); ?>


               <ul class="dropdown-menu megamenu-content bg" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-3">
                        <h5 class="title">Ajmer Road</h5>
                        <div class="content">
                        <?php wp_nav_menu( array( 'theme_location' => 'mega', 'menu_class' => 'menu-col' ) ); ?>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
           
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>

		<!--Header-->


		

		<div id="content" class="site-content">
