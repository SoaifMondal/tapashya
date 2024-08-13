<?php get_header(); 
if(have_posts()): while(have_posts()): the_post(); ?>

<!-- banner-section -->
<div class="banner-section">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
   
        <div class="carousel-inner">
            <?php
              $banner_data = get_post_meta( get_the_ID() );
              if ( isset( $banner_data[ 'home_banner_details' ][ 0 ] ) ) {
                $banner_list = maybe_unserialize( $banner_data[ 'home_banner_details' ][ 0 ] );
                $i = 1;
                foreach ( $banner_list as $banner_info ) {
                    $active = ($i == 1)? 'active':'';
                  echo '<div class="carousel-item '.$active.'">
                    <img class="d-block w-100" src="'.$banner_info[ 'home_banner_image' ].'" alt="First slide">
                    <div class="carousel-caption">
                        <h1>'.$banner_info[ 'home_banner_heading' ].'</h1>
                        <p>'.$banner_info[ 'home_banner_subheading' ].'</p>';
                        if(!empty($banner_info[ 'home_banner_btnlink' ])){
                            echo '<div class="banner-button">
                                <a href="'.$banner_info[ 'home_banner_btnlink' ].'">'.$banner_info[ 'home_banner_btntxt' ].'</a>
                            </div>';
                        }
                    echo '</div>
                  </div>';
                $i++; }
              }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

<!-- exit -->
<section class="exit-section">
    <div class="container">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'home_whyweexists_heading', true); ?></h2>

        </div>
        <div class="row">
            <?php
              $whyweexists_data = get_post_meta( get_the_ID() );
              if ( isset( $whyweexists_data[ 'home_whyweexists_details' ][ 0 ] ) ) {
                $whyweexists_list = maybe_unserialize( $whyweexists_data[ 'home_whyweexists_details' ][ 0 ] );
                foreach ( $whyweexists_list as $whyweexists_info ) {
                  echo '<div class="col-lg-6 col-md-12 mb-3">
                        <div class="row box m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <img class="images" src="'.$whyweexists_info[ 'home_whyweexists_image' ].'" alt="">
                            </div>
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="card-text">
                                    <h4>'.$whyweexists_info[ 'home_whyweexists_heading' ].'</h4>
                                    <p>'.$whyweexists_info[ 'home_whyweexists_detail' ].'</p>
                                    <div class="section-button">
                                        <a href="'.$whyweexists_info[ 'home_whyweexists_btnlink' ].'"><img src="'.get_bloginfo('template_url').'/images/arrow.png" alt=""> '.$whyweexists_info[ 'home_whyweexists_btntxt' ].'</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>';
                }
              }
            ?>
        </div>

    </div>
</section>

<section class="slider-r p-0">
    <div class="container">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'home_whatwedo_heading', true); ?></h2>
    
        </div>
        <div class="owl-carousel owl-theme slider" id="what-we-do">
            <?php
              $whatwedo_data = get_post_meta( get_the_ID() );
              if ( isset( $whatwedo_data[ 'home_whatwedo_details' ][ 0 ] ) ) {
                $whatwedo_list = maybe_unserialize( $whatwedo_data[ 'home_whatwedo_details' ][ 0 ] );
                foreach ( $whatwedo_list as $whatwedo_info ) {
                  echo '<div class="item">
                        <div class="ProductBlock">
                            <div class="Content">
                                <div class="img-fill">
                                    <img src="'.$whatwedo_info[ 'home_whatwedo_image' ].'">
                                </div>
                                <div class="slider-text">
                                    <h3>'.$whatwedo_info[ 'home_whatwedo_heading' ].'</h3>
                                    <div class="slider-button">
                                        <a href="'.$whatwedo_info[ 'home_whatwedo_btnlink' ].'"><img src="'.get_bloginfo('template_url').'/images/arrow.png" alt=""> '.$whatwedo_info[ 'home_whatwedo_btntxt' ].'</a>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>';
                }
              }
            ?>
        </div>
    </div>
</section>

<!--  join  -->
<section class="join-us" style="background-image: url('<?php echo get_post_meta(get_the_ID(), 'home_joinwithus_bgimg', true); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="join-left-section">
                    <h5><?php echo get_post_meta(get_the_ID(), 'home_joinwithus_text', true); ?></h5>
                    <h4><?php echo get_post_meta(get_the_ID(), 'home_joinwithus_heading', true); ?></h4>
                    <p><?php echo get_post_meta(get_the_ID(), 'home_joinwithus_details', true); ?></p>
                    <div class="section-button">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'home_joinwithus_btnlink', true); ?>"><img src="<?php bloginfo('template_url'); ?>/images/arrow.png" alt=""> <?php echo get_post_meta(get_the_ID(), 'home_joinwithus_btntxt', true); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="join-right-section">
                    <img src="<?php echo get_post_meta(get_the_ID(), 'home_joinwithus_rightimg', true); ?>" alt="">
                </div>
            </div>

        </div>

    </div>
</section>

<section class="map-section pt-5">
    <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'home_contactus_heading', true); ?></h2>    
        </div>
    <div class="responsive-map">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="550" src="https://maps.google.com/maps?hl=en&q=<?php echo get_post_meta(get_the_ID(), 'home_map_address', true); ?>&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed" width="600" height="450"></iframe>
       <div class="map-text">
        <h4><?php echo get_post_meta(get_the_ID(), 'home_contactaddress_heading', true); ?></h4>
        <p><?php echo get_post_meta(get_the_ID(), 'home_contactaddress', true); ?></p>
       </div>
    </div> 

</section>

<?php endwhile; endif;
get_footer(); ?>