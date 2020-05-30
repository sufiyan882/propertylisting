<?php
/* Template Name: Home page */
get_header(); 
?>

<!--Slider-->
<div class="rev_slider_wrapper">
   <div id="rev_slider" class="rev_slider"  data-version="5.0">
      <ul>
      	<?php

 $args = array(  
        'post_type' => 'property',
        'post_status' => 'publish',
        'posts_per_page' => 8,
    );

 $loop = new WP_Query( $args ); 
      	$i = 2;
      	//while(have_rows('rev_slider')) : the_row();
        while ( $loop->have_posts() ) : $loop->the_post(); 
      	//	$image = get_sub_field('rev_images');
      		?>
      		<?php
      		if($i%2 == 0) {
      			?>
         <!-- SLIDE  -->
         <li data-transition="fade">
           <?php the_post_thumbnail();?>
            <div class="slider-caption tp-caption tp-resizeme"
               data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
               data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
               data-responsive_offset="on"
               data-visibility="['on','on','off','off']"  
               data-start="1300"
               data-transition="fade"
               data-transform_idle="o:1;"
               data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
               data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
               data-mask_in="x:0px;y:0px;s:inherit;e:inherit;">
               <h4 class="bg_blue default_clr"><?php the_field('price');?>/ Per Month - Apartment</h4>
               <div class="bg_white text-left">
                  <h2><?php the_title(); ?></h2>
                  <p><?php echo substr(get_the_excerpt(), 0,100);

                   ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn-more">
                  <i><img src="<?php echo site_url();?>/wp-content/uploads/2019/12/arrowl.png" alt="arrow"></i>
                  <span>More Details</span>
                  <i><img src="<?php echo site_url();?>/wp-content/uploads/2019/12/arrowr.png" alt="arrow"></i>
                  </a>
               </div>
               <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i><?php the_field('property_size');?></span> 
                  <span><i class="icon-bed"></i><?php the_field('bedrooms');?></span> 
                  <span><i class="icon-old-television"></i><?php the_field('tv_lounge');?></span> 
                  <span><i class="icon-garage"></i><?php the_field('garages');?></span> 
               </div>
            </div>
         </li>
         <?php } else {  ?>
         <li data-transition="slideleft">
           <?php the_post_thumbnail();?>
            <div class="slider-caption tp-caption tp-resizeme"
               data-x="['right','right','center','center']" data-hoffset="['0','0','0','15']" 
               data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
               data-responsive_offset="on" 
               data-visibility="['on','on','off','off']" 
               data-start="1300"
               data-transform_idle="o:1;"
               data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
               data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
               data-mask_in="x:0px;y:0px;s:inherit;e:inherit;">
               <h4 class="bg_blue default_clr pull-right"><?php the_field('price');?>/ Per Month - Apartment</h4>
               <div class="clearfix"></div>
               <div class="bg_white text-left">
                  <h2><?php the_title(); ?></h2>
                  <p><?php echo substr(get_the_excerpt(), 0,100)."<br/>"; ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn-more">
                  <i><img src="<?php echo site_url();?>/wp-content/uploads/2019/12/arrowl.png" alt="arrow"></i>
                  <span>More Details</span>
                  <i><img src="<?php echo site_url();?>/wp-content/uploads/2019/12/arrowr.png" alt="arrow"></i>
                  </a>
               </div>
               <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i><?php the_field('property_size');?></span> 
                  <span><i class="icon-bed"></i><?php the_field('bedrooms');?></span> 
                  <span><i class="icon-old-television"></i><?php the_field('tv_lounge');?></span> 
                  <span><i class="icon-garage"></i><?php the_field('garages');?></span> 
               </div>
            </div>
         </li>
         <?php
         }
         $i++;
     endwhile;
      wp_reset_postdata();
     ?>
      </ul>
   </div>
</div>

<!-- Latest Property -->
<section id="types" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="uppercase"><?php the_field('property_title');?></h2>
            <p class="heading_space"><?php the_field('property_subtitle');?></p>
          </div>
        </div>
        <div id="type-grid" class="cbp cbp-l-grid-mosaic-flat">
          
          <?php while(have_rows('property_types')) : the_row();
      		$image1 = get_sub_field('property_images');
      		$protal = get_sub_field('property_title');
      		$prodet = get_sub_field('total_property');
      		$url = get_sub_field('property_url'); ?>
          <div class="cbp-item">
            <a href="<?php echo $url; ?>">
              <img src="<?php echo $image1['url']; ?>" alt="">
              <div class="grid-caption">
                <h3><?php echo $protal; ?></h3>
                <span><?php echo $prodet; ?></span>
              </div>
            </a>
          </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
<!--Latest Property Ends-->



<!--Best Deal Properties-->
<section id="deals" class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase"><?php the_field('best_deal_properties_title');?></h2>
        <p class="heading_space"><?php the_field('sub_title');?></p>
      </div>
    </div>
    <?php 
			$args = array(
			'post_type'         => 'property',
			'posts_per_page' => 2, 
			'post_status'       => 'publish',
			'tax_query'  => array(
			            array(
			        'taxonomy'  => 'property_category',
			        'field'     => 'slug',
			        'terms'     => 'best-deal'
			           )
			       )
			);
			  $query = new WP_Query( $args );
    ?>
    <div class="row">
      <div class="col-sm-12">
        <div id="full-slider" class="owl-carousel">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="item">
            <div class="media deal_media proerty_content">
              <div class="media-left">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
              <div class="media-body">
                <div class="price default_clr">
                  <h4><?php the_field('price');?>- <small>Family Home</small></h4>
                </div>
                <div class="proerty_text">
                  <h3 class="bottom15"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p><?php echo substr(get_the_excerpt(), 0,300)."<br/>"; ?></p>
                </div>
                <div class="dealer clearfix">
                  <i class="author"><img src="<?php the_field('author_image'); ?>" alt="author"></i>
                  <h4><?php the_field('author_name'); ?> &nbsp; <small>- agent</small></h4>
                  <span><i class="icon-phone4"></i><?php the_field('phone_number'); ?></span> 
                  <a href="mailto:<?php the_field('email_mailto'); ?>"><i class="icon-mail-envelope-closed3"></i><?php the_field('email_adress'); ?></a> 
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left"><?php the_field('property_address'); ?></p>
                  <ul class="pull-right">
                    <li> <?php //echo do_shortcode( '[likebtn theme="squarespace" bp_notify="0"]' ); ?><a href=""><i class="icon-like"></i></a></li>
                    <li><a href="#eight" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                  </ul>
                </div>

               <div class="toggle_share collapse" id="eight">
                   <ul>
                  <li><a href="<?php echo $f = get_field('facebook', 'option');?>/sharer.php?u=http://192.168.100.46/project/wp/property-listing/" class="facebook" target="_blank"><i class="icon-facebook-1"></i> Facebook</a></li>
                    <li><a href="<?php echo $t = get_field('twitter', 'option');?>/share?url=http://192.168.100.46/project/wp/property-listing/" class="twitter" target="_blank"><i class="icon-twitter-1"></i> Twitter</a></li>
                    <li><a href="<?php echo $vimo = get_field('vimo', 'option');?>/share?url=http://192.168.100.46/project/wp/property-listing/" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                  </ul>
                </div>
                <div class="property_meta"> 
                  <span><i class="icon-select-an-objecto-tool"></i><?php the_field('property_size');?></span>
                  <span><i class="icon-bed"></i><?php the_field('bedrooms');?></span> 
                  <span><i class="icon-safety-shower"></i><?php the_field('bathrooms');?></span> 
                  <span><i class="icon-old-television"></i><?php the_field('tv_lounge');?></span> 
                </div>
              </div>
            </div>
          </div>
        <?php 
      endwhile; 
      wp_reset_postdata();
      ?>
        </div>
      </div>
      
    </div>
  
  </div>
</section>
<!--Best Deal Properties Ends-->



<section id="property" class="padding bg_gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase"><?php the_field('real_estate_title');?> </h2>
        <p class="heading_space"><?php the_field('real_estate__sub_title'); ?></p>
      </div>
    </div>
    		 <?php 
            // $arfield = array('rent','sale')    
		 		$terms = get_terms(array('taxonomy' => 'property_category', 'include' => array(8,7),) ); 
		 		$count = count($terms);  ?>
    <div class="clearfix">
      <div id="filters-property" class="cbp-l-filters-button text-center">
        <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">LATEST</div>

			<?php 
			foreach ($terms  as $term) {
			echo $term_list = '<div data-filter=".'.  $term->slug .'" class="cbp-filter-item">' . $term->name . '</div>';
			}
			?>
           
      </div>
    </div>

    <div id="property-gallery" class="cbp listing1">
		<?php $wpbp = new WP_Query(array( 'post_type' => 'property', 'posts_per_page' =>-1 ) ); ?>
		<?php if ($wpbp->have_posts()) :  while ($wpbp->have_posts()) : $wpbp->the_post(); ?>
		<?php $terms1 = get_the_terms( get_the_ID(), 'property_category' ); ?>
     <div class="cbp-item latest <?php foreach ($terms1  as $term){ echo $term->slug; } ?>">
      <div class="property_item">
        <div class="image">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium');?></a>
          <div class="price clearfix"> 
            <span class="tag pull-right"><?php the_field('price');?></span>
          </div>
          <span class="tag_t">For Sale</span> 
          <span class="tag_l">Featured</span>
        </div>
        <div class="proerty_content">
          <div class="proerty_text">
            <h3 class="captlize"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_field('property_address');?></p>
          </div>
          <div class="property_meta transparent"> 
            <span><i class="icon-select-an-objecto-tool"></i><?php the_field('property_size');?></span> 
            <span><i class="icon-bed"></i><?php the_field('office_rooms');?></span> 
            <span><i class="icon-safety-shower"></i><?php the_field('bathrooms');?></span>   
          </div>
          <div class="property_meta transparent bottom30">
            <span><i class="icon-old-television"></i><?php the_field('tv_lounge');?></span>
            <span><i class="icon-garage"></i><?php the_field('garages');?></span>
            <span></span>
          </div>
          <div class="favroute clearfix">
            <p><i class="icon-calendar2"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
            <ul class="pull-right">
              <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
              <li><a href="#seventy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
            </ul>
          </div>
          <div class="toggle_share collapse" id="seventy">
            <ul>
              <li><a href="<?php echo $f2 = get_field('facebook', 'option');?>/sharer.php?u=<?php the_title(); ?>" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
              <li><a href="<?php echo $tw2 = get_field('twitter', 'option');?>/share?url=<?php the_title(); ?>" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
              <li><a href="<?php echo $ve = get_field('vimo', 'option');?>/share?url=<?php the_title(); ?>" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>     
 <?php endwhile; endif; ?>
 <?php wp_reset_query(); ?>
</div>

    <div class="col-sm-12 text-center top20">
     <div class="btn-dark border_radius uppercase margin40" id="loadMore" style="">more listings</div> 
    </div>

  </div>
</section>


<section id="testinomial" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase"><?php the_field('testinomial_title');?></h2>
        <p class="heading_space"><?php the_field('testinomial__sub_title');?></p>
      </div>
		<?php 
			$args4 = array(
			'post_type'         => 'testinomials',
			'posts_per_page' => 2, 
			'post_status'       => 'publish',
			);
		$que3 = new WP_Query( $args4 );
		if ($que3->have_posts()) :  while ($que3->have_posts()) : $que3->the_post(); 
		?>
      <div class="col-sm-6">
        <div class="testinomial_wrap heading_space clearfix">
          <div class="testinomial_text border_radius text-center bottom30">
            <p><?php echo substr(get_the_excerpt(), 0,200)."<br/>"; ?></p>
            <i><img src="<?php echo get_template_directory_uri(); ?>/images/quote-left.png" alt=""></i>
          </div>
          <div class="col-xs-12 customer">
            <?php the_post_thumbnail();?>
            <h4> <?php the_title(); ?></h4>
            <span><?php the_field('job_section');?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/stars.png" alt="rating" class="rating pull-xs-right">
          </div>
        </div>
      </div>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
        <div class="col-xs-12 text-center">
        <a href="javascript:void(0)" class="cd-see-all btn-white border_radius"><i class="fa fa-th" aria-hidden="true"></i>view all</a>
      </div>
    </div>
  </div>
</section>

<div class="cd-testimonials-all">
  <div class="cd-testimonials-all-wrapper">
    <ul>
		<?php 
			$args5 = array(
			'post_type'         => 'testinomials',
			'posts_per_page' => -1, 
			'post_status'       => 'publish',
			);
			$que6 = new WP_Query( $args5 );
			if ($que6->have_posts()) :  while ($que6->have_posts()) : $que6->the_post(); 
		?>
      <li class="cd-testimonials-item">
        <p><?php the_excerpt(); ?></p>
        <div class="cd-author">
          <?php the_post_thumbnail();?>
          <ul class="cd-author-info">
            <li><?php the_title(); ?></li>
            <li><?php the_field('job_section');?></li>
          </ul>
        </div>
      </li>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
    </ul>
    <a href="#0" class="close-btn">Close</a>
  </div>
</div>

<!--Agents-->
<section id="agents" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-center">
        <h2 class="uppercase">OUR EXPERTS</h2>
        <p class="heading_space"> 
          We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable prices.
        </p>
      </div>
    </div>
    <div class="row">
      <div class=" three-item owl-carousel">
			<?php 
				$argsk = array(
				'post_type'         => 'ourexperts',
				'posts_per_page' => -1, 
				'post_status'       => 'publish',
				);
			$expert = new WP_Query( $argsk );
			if ($expert->have_posts()) :  while ($expert->have_posts()) : $expert->the_post(); 
			?>
        <div class="item agent_item">
          <div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?> </a></div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><?php the_title(); ?> <small>- sales executive</small></h3>
              <p><?php echo substr(get_the_excerpt(), 0,100)."<br/>"; ?></p>
              <a href="#" class="btn-more">
              <i><img src="<?php echo get_template_directory_uri(); ?>/images/arrowl.png" alt="arrow"></i>
              <span>Contact Me</span>
              <i><img src="<?php echo get_template_directory_uri(); ?>/images/arrowr.png" alt="arrow"></i>
              </a>
            </div>
          </div>
        </div>
        <?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
      </div>
    </div>
  </div>
</section>
<!--Agents Ends-->



<!--Partners-->
<section id="logos">
  <div class="container partners padding_top">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">Our Partners</h2>
        <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
      </div>
    </div>
    <div class="row">
      <div id="partner-slider" class="owl-carousel">
      	  <?php while ( have_rows('our_partners_carousel') ) : the_row();
      	 		 $imgcarousal = get_sub_field('carousel_images'); ?>
        <div class="item">
        	<img src="<?php echo $imgcarousal['url']; ?>" alt="Featured Partne" />
        </div>
    	<?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<!--Partners Ends-->


<?php get_footer();?>