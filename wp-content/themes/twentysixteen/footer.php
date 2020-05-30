<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
		<!--Footer-->
    <?php if (is_page('10') ){?>
  <footer class="padding_top">
    <?php } else{ ?>
<footer class="padding_top footer2">
   <?php  } ?>

  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
              <?php if (is_page('10') ){?>
              <?php $image = get_field('header_logo', 'option');?>
              <a href="<?php echo $url = site_url(); ?>"> <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
              <?php } else{ ?>

              <?php $whitelogo = get_field('white_logo', 'option');?>
              <a class="navbar-brand sticky_logo" href="<?php echo $url = site_url(); ?>"><img src="<?php echo esc_url($whitelogo['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
              <?php  } ?>
              
           <?php dynamic_sidebar( 'footer-first' ); ?>
          <ul class="social_share">
            <li><a href="<?php echo $f = get_field('facebook', 'option');?>" class="facebook" target="_blank"><i class="icon-facebook-1"></i></a></li>
            <li><a href="<?php echo $t = get_field('twitter', 'option');?>" class="twitter" target="_blank"><i class="icon-twitter-1"></i></a></li>
            <li><a href="<?php echo $go = get_field('google_plues', 'option');?> " class="google" target="_blank"><i class="icon-google4"></i></a></li>
            <li><a href="<?php echo $likd = get_field('linkden', 'option');?>" class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="<?php echo $vimo = get_field('vimo', 'option');?>" class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Search by Area</h4>
          <ul class="area_search">
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>Bayonne, New Jersey</a></li>
            <li class="active"><a href="javascript:void(0)"><i class="icon-icons74"></i>Greenville, New Jersey</a></li>
            <li><a href="javascript:void(0)"> <i class="icon-icons74"></i>The Heights, New Jersey</a></li>
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>West Side, New York</a></li>
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>Upper East Side, New York</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Latest News</h4>
          <?php  $argsl  = array(
                  'post_type' => 'property',
                  'post_status' => 'publish',
                  'posts_per_page' => 3,      
                 );
                      $letesnews = new WP_Query( $argsl);
                      if($letesnews->have_posts()){
                      while($letesnews->have_posts()){ 
                      $letesnews->the_post();    
               ?>
          <div class="media">
           <a href="<?php the_permalink(); ?>" alt="news"><?php echo the_post_thumbnail(array( 70, 70 )); ?></a>
            <div class="media-body">
             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <span><i class="icon-clock4"></i><?php the_time( 'F j, Y' ); ?></span>
            </div>
          </div>
          <?php } } wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
         <?php dynamic_sidebar( 'footer-four' ); ?>
         
        </div>
      </div>
    </div>
  </div>
</footer>
<!--CopyRight-->
    <?php if (is_page('10') ){?>
    <?php $imagebg = get_field('background_image', 'option'); ?>
    <div class="copyright" style="background-image: url(<?php echo $imagebg['url']; ?>);">
    <?php } else{ ?>
    <div class="copyright index2">
    <?php  } ?>
  <div class="copyright_inner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <p><?php echo $copright = get_field('copyright_left', 'option'); ?></p>
        </div>
        <div class="col-md-5 text-right">
          <p> <?php echo $leftx = get_field('right_text', 'option'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

		
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-countTo.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootsnav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-1.1.3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/range-Slider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/selectbox-0.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/zelect.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/revolution.extension.navigation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/revolution.extension.parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/revolution.extension.video.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
    $('.icon-share3').click(function() {
      $('#eight').toggle("slide");
    });
});

</script>