<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

 
<!-- Listing Start -->
<section id="listing_layout" class="listing1 maplisting">
  <div class="container-fluid">
    <div class="row">   
      <div class="ol-md-6 col-sm-6 col-xs-12 listing_map">
        <div id="banner-map">
          <div class="row property-list-area property-list-map-area">
            <div class="property-list-map">
              <div id="property-listing-map" class="multiple-location-map" style="width:100%; top:0; bottom:0;">
                <?php echo do_shortcode('[mappress width="700" height="600" initialopeninfo="true"]'); ?>
<!-- 
                 //echo do_shortcode('[mappress width="700" height="600" initialopeninfo="true"]');  -->
              </div>
            </div>
          </div>
        </div>
      </div>
       
      <div class="ol-md-6 col-sm-6 col-xs-12 pull-right">
        <div class="property-query-area top20">
          <div class="row">
            <?php echo do_shortcode( '[searchandfilter fields="property_category"]' ); ?>
           <!--  <form class="callus">
              <div class="col-sm-6">
                <div class="single-query form-group">
                  <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="single-query form-group">
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
              </div>
              <div class="col-sm-6">
                <div class="single-query form-group">
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
              </div>
              <div class="col-sm-6">
                <div class="single-query form-group">
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
              </div>
              <div class="col-sm-6">
                <div class="row search-2">
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
              <div class="col-sm-6">
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
              <div class="col-sm-12 bottom30">
                <div class="single-query-slider">
                  <label>Price Range:</label>
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
            </form> -->
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="group-button-search margin40">
                <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                  <i class="fa fa-plus text-1 bg-color-yello" aria-hidden="true"></i>
                  <i class="fa fa-minus text-2 hide bg-color-yello" aria-hidden="true"></i>
                  <div class="text-1">Show more search options</div>
                  <div class="text-2 hide">less more search options</div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 form-group top20 text-right">
              <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
          </div>
          <div class="search-propertie-filters collapse">

            <div class="container-2 bottom30">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Washer and Dryer</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Washer and Dryer</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Washer and Dryer</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Balcony</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Balcony</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Balcony</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Storage</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Storage</span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Storage</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-uppercase bottom20">Properties listings</h2>
          </div>
 <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <div class="col-sm-6">
            <div class="property_item heading_space">
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
                  <p>45 Regent Street, London, UK</p>
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
                  <p class="pull-md-left"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> <i class="icon-calendar2"></i></p>
                  <ul class="pull-right">
                    <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                    <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                  </ul>
                </div>
                <div class="toggle_share collapse" id="one">
                  <ul>
                    <li><a href="<?php echo $f1 = get_field('facebook', 'option');?>/sharer.php?u=<?php the_title(); ?>" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                    <li><a href="<?php echo $tw1 = get_field('twitter', 'option');?>/share?url=<?php the_title(); ?>" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                    <li><a href="<?php echo $ve1 = get_field('vimo', 'option');?>/share?url=<?php the_title(); ?>" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                  </ul>
                </div>
              </div>
               
            </div>
          </div>
     <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?> 
        </div>
        <div class="row">
         
        </div>
       </div>
    </div>
  </div>
</section>
<!-- Listing end -->
      

<?php get_footer();?>
<?php get_footer(); ?>
