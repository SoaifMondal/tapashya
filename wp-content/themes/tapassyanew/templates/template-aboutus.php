<?php 
/*Template Name: Template About Us*/
get_header(); 
if(have_posts()): while(have_posts()): the_post();?>
<div class="about-banner">
  
  <img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(), 'aboutus_image', true); ?>" alt="First slide">
  <div class="about-banner-text">
      <h1><?php echo get_post_meta(get_the_ID(), 'aboutus_heading', true); ?></h1>
      
  </div>
</div>
</div>

<section class="exit-section about-section">
  <div class="container">
      <div class="section-heading">
          <h2><?php echo get_post_meta(get_the_ID(), 'aboutus_section_heading', true); ?></h2>

      </div>
      <?php
        $aboutdetails_data = get_post_meta( get_the_ID() );
        if ( isset( $aboutdetails_data[ 'aboutus_group_details' ][ 0 ] ) ) {
          $aboutdetails_list = maybe_unserialize( $aboutdetails_data[ 'aboutus_group_details' ][ 0 ] );
          foreach ( $aboutdetails_list as $aboutdetails_info ) {
            echo '<div class="row about-section-row">
                <div class="col-md-12 ">
                    <div class="row box m-0">
                        <div class="col-md-5 p-0">
                            <img class="about-inner-images images" src="'.$aboutdetails_info[ 'aboutus_groupsection_image' ].'" alt="">
                        </div>
                        <div class="col-md-7 p-0">
                            <div class="card-text">
                                <h4>'.$aboutdetails_info[ 'aboutus_groupsection_heading' ].'</h4>
                                <p>'.$aboutdetails_info[ 'aboutus_groupsection_details' ].'</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>';
          }
        }
      ?>
  </div>
</section>
<section class="about-photo-gallery">
  <div class="container">
      <div class="section-heading">
          <h2>Photo Gallery</h2>
      </div>
      <div class="owl-carousel owl-theme slider" id="photo-gallery">
          <?php $images = get_post_meta(get_the_ID(), 'aboutus_photo_gallery', true);
            foreach($images as $image){
          ?>
          <div class="item">
              <div class="inner-photo">
                  <a href="<?php echo $image;?>" class="fancybox" rel="group1" ><img src="<?php echo $image;?>" alt=""></a>
              </div>
          </div>
          <?php } ?>
      </div>
  </div>
</section>

<section class="map-section">
  <div class="responsive-map">
      <?php $frontpage_id = get_option( 'page_on_front' ); ?>
      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="550" src="https://maps.google.com/maps?hl=en&q=<?php echo get_post_meta($frontpage_id, 'home_map_address', true); ?>&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed" width="600" height="450"></iframe>
      <div class="map-text">
          <h4><?php echo get_post_meta($frontpage_id, 'home_contactaddress_heading', true); ?></h4>
          <p><?php echo get_post_meta($frontpage_id, 'home_contactaddress', true); ?></p>
      </div>
  </div>

</section>
<?php endwhile; endif;
get_footer(); ?>