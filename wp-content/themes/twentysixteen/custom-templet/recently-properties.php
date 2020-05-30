<?php
/* Template Name: Recent Propertie */
get_header(); 
?>


<!-- Favorite Properties  -->
<section id="property" class="padding_top listing1">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="text-uppercase">My favorite Properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
<?php
    	$args = array(  
        'post_type' => 'property',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

 $resnt  = new WP_Query( $args ); 
  if ($resnt->have_posts()) :  while ($resnt->have_posts()) : $resnt->the_post(); ?>
      <div class="col-sm-4">
        <div class="property_item heading_space">
          <div class="image">
             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium');?></a>
            <div class="price clearfix"> 
              <span class="tag pull-right"><?php the_field('price');?></span>
            </div>
            <span class="tag_l">Featured</span>
            <span class="tag_t">For Sale</span> 
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
                <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="one">
              <ul>
                <li><a href="<?php echo $fr = get_field('facebook', 'option');?>/sharer.php?u=<?php the_title(); ?>" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="<?php echo $twr = get_field('twitter', 'option');?>/share?url=<?php the_title(); ?>" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="<?php echo $ve = get_field('vimo', 'option');?>/share?url=<?php the_title(); ?>" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; endif; ?>
 <?php wp_reset_query(); ?>
     
    </div>
   <!--  <div class="row">
      <div class="padding_bottom text-center">
        <ul class="pager">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>
    </div> -->
  </div>
</section>
<!-- Favorite Properties End -->


<?php get_footer();?>