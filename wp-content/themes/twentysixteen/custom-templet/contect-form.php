<?php
/* Template Name: Contect Form */
get_header(); 
?>

<!--Contact-->
<section id="contact-us">
  <div class="contact">
  	 <?php
  	  echo do_shortcode('[mappress width="100%" height="1000" initialopeninfo="true"]'); ?>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.99973813034!2d75.65047045840484!3d26.885141677763308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1575650200671!5m2!1sen!2sin" width="100%" height="1000" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
    <div class="container">
      <div class="row">
        
           <div class="col-md-4 hidden-xs">
           </div> 
           
           <div class="col-md-4 hidden-xs">
           </div> 
           
           <div class="col-md-4 col-sm-4 col-xs-12  contact-text">
           
            	<div class="agent-p-contact">
                	<div class="our-agent-box bottom30">
                        <h2>get in touch</h2>
                    </div>
                    <div class="agetn-contact-2 bottom30">
                      	 <p><i class="icon-telephone114"></i> <a href="tel:<?php the_field('telephone');?>"> <?php the_field('telephone');?></a></p>
                         <p><i class=" icon-icons142"></i><a href="mailto:<?php the_field('agetn_email');?>"> <?php the_field('agetn_email');?></a></p>
                         
                         <p><i class="icon-browser2"></i><a href="#"><?php the_field('site_url');?></a></p>
                         <p><i class="icon-icons74"></i><?php the_field('short_address');?></p>
                      </div>
				            <ul class="social_share bottom20">
				            <li><a href="<?php echo $fc = get_field('facebook', 'option');?>/sharer.php?u=<?php the_title(); ?>" class="facebook"><i class="icon-facebook-1"></i></a></li>
				            <li><a href="<?php echo $tc = get_field('twitter', 'option');?>/share?url=<?php the_title(); ?>" class="twitter"><i class="icon-twitter-1"></i></a></li>
				            <li><a href="<?php echo $goc = get_field('google_plues', 'option');?>/share?url=<?php the_title(); ?>" class="google"><i class="icon-google4"></i></a></li>
				            <li><a href="<?php echo $kd = get_field('linkden', 'option');?>/share?url=<?php the_title(); ?>" class="linkden"><i class="fa fa-linkedin"></i></a></li>
				            <li><a href="<?php echo $vce = get_field('vimo', 'option');?>/share?url=<?php the_title(); ?>" class="vimo"><i class="icon-vimeo3"></i></a></li>
				          </ul>
                </div>
            
            	<div class="agent-p-form">
                	<div class="our-agent-box bottom30">
                        <h2>Send us a message</h2>
                    </div>
                    
                    <div class="row">
                    	<?php echo do_shortcode('[contact-form-7 id="387" title="Contact Us" html_class="callus"]'); ?>
                                        
                    </div>
                	
                </div>
                
            </div>
            
        </div>
    </div>
  </div>
</section>
<!-- Contact End -->
<?php get_footer();?>