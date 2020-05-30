<?php /**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<!-- Page Banner Start-->
<?php while(have_posts()): the_post(); ?>
<section class="page-banner padding">
	<?php $thumb = get_the_post_thumbnail_url(); ?>
	<img src="<?php echo $thumb; ?>" style="width: 100%; height: 100%;" >
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Property Details - 1</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#.">Home</a></li>
          <li><a href="#.">Properties</a></li>
          <li class="active">Property Details - 1</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->




<!-- Property Detail Start -->
<section id="property" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
      <div class="col-md-8 listing1 property-details">
        <h2 class="text-uppercase"><?php the_title(); ?></h2>
        <p class="bottom30"><?php the_field('property_address');?> </p>
        <div id="property-d-1" class="owl-carousel">
			<?php
			if(have_rows('property_slider')) : the_row();
			while ( have_rows('property_slider') ) : the_row();
			$imageowl = get_sub_field('owl_carousel');

			?>
         <div class="item"><img src="<?php echo $imageowl['url']; ?>"></div>
           <?php endwhile; endif; ?>
       </div>
        <div id="property-d-1-2" class="owl-carousel">
        	<?php
			if( have_rows('property_slider') ):
			while ( have_rows('property_slider') ) : the_row();
			$imageow2 = get_sub_field('owl_carousel');
			?>
          <div class="item" ><img src="<?php echo $imageow2['url']; ?>" ></div>
          <?php endwhile; endif;?>
        </div>
       
        <div class="property_meta bg-black bottom40">
          <span><i class="icon-select-an-objecto-tool"></i><?php the_field('property_size');?></span>
          <span><i class=" icon-microphone"></i><?php the_field('office_rooms');?></span>
          <span><i class="icon-safety-shower"></i><?php the_field('bathrooms');?></span>
          <span><i class="icon-old-television"></i><?php the_field('tv_lounge');?></span>
          <span><i class="icon-garage"></i><?php the_field('garages');?></span>
        </div>
		
      <?php the_content();?>
       
        <h2 class="text-uppercase bottom20"><?php the_field('quick_summary');?></h2>
        <div class="row property-d-table bottom40">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Property Id</b></td>
                  <td class="text-right"><?php the_field('property_id');?></td>
                </tr>
                <tr>
                  <td><b>Price</b></td>
                  <td class="text-right"><?php the_field('price');?></td>
                </tr>
                <tr>
                  <td><b>Property Size</b></td>
                  <td class="text-right"><?php the_field('property_size');?></td>
                </tr>
                <tr>
                  <td><b>Bedrooms</b></td>
                  <td class="text-right"><?php the_field('bedrooms');?></td>
                </tr>
                <tr>
                  <td><b>Bathrooms</b></td>
                  <td class="text-right"><?php the_field('bathrooms');?></td>
                </tr>
                <tr>
                  <td><b>Available From</b></td>
                  <td class="text-right"><?php the_field('available_from');?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Status</b></td>
                  <td class="text-right"><?php the_field('status');?></td>
                </tr>
                <tr>
                  <td><b>Year Built</b></td>
                  <td class="text-right"><?php the_field('year_built');?></td>
                </tr>
                <tr>
                  <td><b>Garages</b></td>
                  <td class="text-right"><?php the_field('garages');?></td>
                </tr>
                <tr>
                  <td><b>Cross Streets</b></td>
                  <td class="text-right"><?php the_field('cross_streets');?></td>
                </tr>
                <tr>
                  <td><b>Floors</b></td>
                  <td class="text-right"><?php the_field('floors');?></td>
                </tr>
                <tr>
                  <td><b>Plumbing</b></td>
                  <td class="text-right"><?php the_field('plumbing');?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <h2 class="text-uppercase bottom20"><?php the_field('features');?></h2>
        <div class="row bottom40">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="pro-list">
              <li><?php the_field('lift_available');?></li>
              <li><?php the_field('landscaped_gardens');?></li>
              <li><?php the_field('indoor_games');?></li>
              <li><?php the_field('laundry');?></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="pro-list">
              <li><?php the_field('maintenance_staff');?></li>
              <li><?php the_field('jogging_track');?></li>
              <li><?php the_field('power_backup');?></li>
              <li><?php the_field('swimming_pool');?></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="pro-list">
              <li><?php the_field('gymnasium');?></li>
              <li><?php the_field('tv_cable_&_wifi');?></li>
              <li><?php the_field('window_coverings');?></li>
            </ul>
          </div>
        </div>
        <h2 class="text-uppercase"><?php the_field('features_gallery_title');?></h2>
        <p class="bottom20"><?php the_field('features_gallery_deteles');?> </p>
        <div class="row bottom40">
        	<?php 
				$images = get_field('features_gallery');
				if( $images ): ?>
            	  <?php foreach( $images as $image ): ?>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pro-img">
              <figure class="wpf-demo-gallery">
                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <figcaption class="view-caption">    
                  <a data-fancybox-group="gallery" class="fancybox" href="<?php echo esc_url($image['sizes']['thumbnail']); ?>"><i class="icon-focus"></i></a>
                </figcaption>
              </figure>
            </div>
          </div>
			<?php endforeach; ?>
			<?php endif; ?>

        </div>
        <h2 class="text-uppercase bottom20">Video Presentation</h2>
        <div class="row bottom40">
          <div class="col-md-12 padding-b-20">
            <div class="pro-video">
              <figure class="wpf-demo-gallery">
              	<?php if(get_field('vimeo_video_url')) { ?>
                <video  class="video" controls>
                  <source src="<?php the_field('vimeo_video_url');?>" type="video/mp4">
                  <source src="video/video.ogg" type="video/ogg">
                </video>
               <?php } else if(get_field('video_presentation')) { ?>
               <iframe width="560" height="315" src="<?php the_field('video_presentation');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <?php } ?>
              </figure>
            </div>
          </div>
        </div>
        
        <h2 class="text-uppercase bottom20">Property Map</h2>

 <div class="row bottom40">
          <div class="col-md-12 bottom20">
            <div class="property-list-map">
              <?php echo do_shortcode('[mappress width="800" height="400" initialopeninfo="true"]'); ?>
            </div>
          </div>
          <div class="social-networks">
            <div class="social-icons-2">
              <span class="share-it">Share this Property</span>
              <span><a href="<?php echo $f = get_field('facebook', 'option');?>/sharer.php?u=<?php the_title(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></span>
              <span><a href="<?php echo $tw = get_field('twitter', 'option');?>/share?url=<?php the_title(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span>
              <span><a href="<?php echo $gop = get_field('google_plues', 'option');?>/share?url=<?php the_title(); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i> Google +</a></span>
            </div>
          </div>
        </div>



        <h2 class="text-uppercase bottom20"><?php the_field('our_experts_title'); ?></h2>
        <div class="row">
          <div class="col-sm-6 bottom40">
            <div class="agent_wrap">
              <div class="image">
                <?php $exp = get_field('experts_image'); ?>
                <img src="<?php echo $exp['url']; ?>" alt="Agents">
              </div>
            </div>
          </div>
          <div class="col-sm-6 bottom40">
            <div class="agent_wrap">
              <h3><?php the_field('author_name'); ?></h3>
              <p class="bottom30"><?php the_field('experts_deteles'); ?></p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right"><?php the_field('phone_number'); ?></td>
                  </tr>
                  <tr class="bottom10">
                    <td><strong>Mobile:</strong></td>
                    <td class="text-right"><?php the_field('mobile_number'); ?></td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="mailto:<?php the_field('email_adress'); ?>"><?php the_field('email_adress'); ?></a></td>
                  </tr>
                  <tr>
                    <td><strong>Skype:</strong></td>
                    <td class="text-right"><a href="#"><?php the_field('skype'); ?></a></td>
                  </tr>
                </tbody>
              </table>
              <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
              <ul class="social_share">
                <li><a href="<?php echo $fk = get_field('facebook', 'option');?>/sharer.php?u=<?php the_title(); ?>" class="facebook"><i class="icon-facebook-1"></i></a></li>
                <li><a href="<?php echo $twt = get_field('twitter', 'option');?>/share?url=<?php the_title(); ?>" class="twitter"><i class="icon-twitter-1"></i></a></li>
                <li><a href="<?php echo $googe = get_field('google_plues', 'option');?>/share?url=<?php the_title(); ?>" class="google"><i class="icon-google4"></i></a></li>
                <li><a href="<?php echo $kinkd = get_field('linkden', 'option');?>/share?url=<?php the_title(); ?>" class="linkden"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?php echo $ve = get_field('vimo', 'option');?>/share?url=<?php the_title(); ?>" class="vimo"><i class="icon-vimeo3"></i></a></li>
              </ul>
            </div>
          </div>
          
        </div>
        <div class="col-sm-12 bottom40">
            <?php 
            if ( comments_open() || get_comments_number() ) {
            comments_template();
            } ?>
          <?php //echo do_shortcode('[contact-form-7 id="376" title="Contact form 1"]'); ?> 
          </div>


            <?php
             $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'property_category', array('fields' => 'ids') );

            //query arguments
            $args = array(
            'post_type' => 'property',
            'post_status' => 'publish',
            'posts_per_page' => 5,
            'orderby' => 'rand',
                  'tax_query' => array(
                      array(
                      'taxonomy' => 'property_category',
                      'field' => 'id',
                      'terms' => $customTaxonomyTerms
                      )
                  ),
               'post__not_in' => array ($post->ID),
            );

            $relatedPosts = new WP_Query( $args );

            ?>

          <div class="row">
            <div class="col-sm-10">
            <h2 class="text-uppercase top20">Similar Properties</h2>
            <p class="bottom30">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
            <div class="col-sm-12"><div id="two-col-slider" class="owl-carousel">
            <?php //loop through query
            if($relatedPosts->have_posts()){
            while($relatedPosts->have_posts()){ 
            $relatedPosts->the_post();
            ?>
              <div class="item">
                <div class="property_item heading_space">
                    <div class="image">
                    <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
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
                      <p class="pull-md-left"><i class="icon-calendar2"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#five" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="five">
                      <ul>
                        <li><a href="<?php echo $fc = get_field('facebook', 'option');?>/sharer.php?u=<?php the_title(); ?>" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="<?php echo $twitk = get_field('twitter', 'option');?>/share?url=<?php the_title(); ?>" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="<?php echo $ve = get_field('vimo', 'option');?>/share?url=<?php the_title(); ?>" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
              
                </div>
              </div>
              <?php } }  wp_reset_postdata(); ?>
            </div></div>
          </div>
          
         <!--  <div class="col-sm-12 text-center heading_space">
            <ul class="pager">
              <li><a href="#.">1</a></li>
              <li class="active"><a href="#.">2</a></li>
              <li><a href="#.">3</a></li>
            </ul>
          </div> -->
      </div>

      <aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
          </div>
          <form class="callus">
            <div class="single-query form-group col-sm-12">
              <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option selected="" value="any">Location</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option class="active">Property Type</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option class="active">Property Status</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="search-2 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Beds</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Baths</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 bottom10">
              <div class="single-query-slider">
                <label><strong>Price Range:</strong></label>
                <div class="price text-right">
                  <span>$</span>
                  <div class="leftLabel"></div>
                  <span>to $</span>
                  <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 form-group">
              <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
          </form>
          <div class="col-sm-12">
            <div class="group-button-search">
              <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter bottom15">
                <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                <div class="text-1">Show more search options</div>
                <div class="text-2 hide">less more search options</div>
              </a>
            </div>
          </div>
          <div class="search-propertie-filters collapse">
            <div class="container-2">
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Featured Properties</h3>
          </div>
        </div>


          <?php  $argsrc  = array(
                  'post_type' => 'property',
                  'post_status' => 'publish',
                  'posts_per_page' => 3,      
                 );
                      $featured = new WP_Query( $argsrc );
                      if($featured->have_posts()){
                      while($featured->have_posts()){ 
                      $featured->the_post();    
               ?>
                  <div class="row bottom20">
                    <div class="col-md-4 col-sm-4 col-xs-6 p-image">
                      <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(array( 100, 100 )); ?></a>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-6">
                      <div class="feature-p-text">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p class="bottom15"><?php the_field('property_address');?></p>
                        <a href="#."><?php the_field('price');?></a>
                      </div>
                    </div>
                  </div>
                 <?php } } wp_reset_postdata(); ?>


        <div class="row">
          <div class="col-md-12">
            <h3 class="margin40 bottom20">Featured Properties</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">

                <?php  $argsfcd  = array(
                  'post_type' => 'property',
                  'post_status' => 'publish',      
                 );
                      $feapro = new WP_Query( $argsfcd );
                      if($feapro->have_posts()){
                      while($feapro->have_posts()){ 
                      $feapro->the_post();    
               ?>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right"><?php the_field('price');?> <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
              <?php } } wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
<!-- Property Detail End -->
<?php endwhile;?>
<?php get_footer(); ?>