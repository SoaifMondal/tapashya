<?php 
/*Template Name: Template Our Program*/
get_header(); 
if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="about-banner">

<img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(), 'ourprogram_banner_image', true); ?>" alt="First slide">
<div class="about-banner-text">
    <h1><?php echo get_post_meta(get_the_ID(), 'ourprogram_banner_heading', true); ?></h1>

</div>
</div>
</div>
<section class="exit-section programs" id="tapassya-jyoti">
<div class="container">
    <div class="section-heading">
        <h2><?php echo get_post_meta(get_the_ID(), 'ourprogram_firstprogram_heading', true); ?></h2>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="row box m-0">
                <div class="col-md-5 p-0">
                    <img class="about-inner-images images" src="<?php echo get_post_meta(get_the_ID(), 'ourprogram_firstprogram_image', true); ?>" alt="">
                </div>
                <div class="col-md-7 p-0">
                    <div class="card-text program">
                        <?php echo get_post_meta(get_the_ID(), 'ourprogram_firstprogram_details', true); ?>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="project-kishalay" class="mt-5">
        <div class="section-heading text-center">
            <h2><?php echo get_post_meta(get_the_ID(), 'ourprogram_prokishalay_heading', true); ?></h2>
            <h3><?php echo get_post_meta(get_the_ID(), 'ourprogram_prokishalay_subheading', true); ?></h3>
            <a href="<?php echo get_post_meta(get_the_ID(), 'ourprogram_prokishalay_pdf', true); ?>" target="_blank">Download PDF</a>
        </div>
    </div>

</div>
</section>
<!-- bhavan -->
<section class="program-image-section">
<div class="container">
    <div id="tapassya-bhavan">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'ourprogram_secondprogram_heading', true); ?></h2>
        </div>
        <div class="row">
            <?php
                $secondprogram_data = get_post_meta( get_the_ID() );
                if ( isset( $secondprogram_data[ 'ourprogram_group_details' ][ 0 ] ) ) {
                  $secondprogram_list = maybe_unserialize( $secondprogram_data[ 'ourprogram_group_details' ][ 0 ] );
                  foreach ( $secondprogram_list as $secondprogram_info ) {
                    echo '<div class="col-lg-4 col-md-6 mb-5">
                        <div class="program-inner-images">
                            <img src="'.$secondprogram_info[ 'ourprogram_second_image' ].'" alt="">
                           <div class="pro-inner-text text-center">
                            <h4>'.$secondprogram_info[ 'ourprogram_second_heading' ].'</h4>
                            <p>'.$secondprogram_info[ 'ourprogram_second_details' ].'</p>
                           </div>

                        </div>
                    </div>';
                  }
                }
            ?>
        </div>
    </div>

    <div id="tapassya-agomoni">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'ourprogram_thirdprogram_heading', true); ?></h2>
            <h3 class="text-center"><?php echo get_post_meta(get_the_ID(), 'ourprogram_thirdprogram_subheading', true); ?></h3>
            <p class="text-center"><?php echo get_post_meta(get_the_ID(), 'ourprogram_thirdprogram_details', true); ?></p>
        </div>
        <div class="row">
            <?php
                $thirdprogram_data = get_post_meta( get_the_ID() );
                if ( isset( $thirdprogram_data[ 'ourprogram_group_agomoni_details' ][ 0 ] ) ) {
                  $thirdprogram_list = maybe_unserialize( $thirdprogram_data[ 'ourprogram_group_agomoni_details' ][ 0 ] );
                  foreach ( $thirdprogram_list as $thirdprogram_info ) {
                    $add_class = (!empty($thirdprogram_info[ 'ourprogram_third_details' ]))? 'program-inner-images' : '';
                    echo '<div class="col-lg-4 col-md-6 mb-5">
                        <div class="'.$add_class.'">
                            <img src="'.$thirdprogram_info[ 'ourprogram_third_image' ].'" alt="">';
                            if(!empty($thirdprogram_info[ 'ourprogram_third_details' ])){
                               echo '<div class="pro-inner-text text-center">
                                <p>'.$thirdprogram_info[ 'ourprogram_third_details' ].'</p>
                               </div>';
                            }
                        echo '</div>
                    </div>';
                  }
                }
            ?>
        </div>
    </div>
</section>

<section class="program-image-section">
<div class="container">
    <div id="disaster-relief">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'ourprogram_fourthprogram_heading', true); ?></h2>
        </div>
        <div class="row">
            <?php
                $fourthprogram_data = get_post_meta( get_the_ID() );
                if ( isset( $fourthprogram_data[ 'ourprogram_group_relief_details' ][ 0 ] ) ) {
                  $fourthprogram_list = maybe_unserialize( $fourthprogram_data[ 'ourprogram_group_relief_details' ][ 0 ] );
                  foreach ( $fourthprogram_list as $fourthprogram_info ) {
                    $add_class = (!empty($fourthprogram_info[ 'ourprogram_fourth_image' ]))? 'program-inner-images' : '';
                    echo '<div class="col-lg-4 col-md-6 mb-5">
                        <div class="'.$add_class.'">';
                            if(!empty($fourthprogram_info[ 'ourprogram_fourth_image' ])){
                                echo '<img src="'.$fourthprogram_info[ 'ourprogram_fourth_image' ].'" alt="">';
                            }
                            echo '<div class="pro-inner-text text-center">
                                <h4>'.$fourthprogram_info[ 'ourprogram_fourth_heading' ].'</h4>
                                <p>'.$fourthprogram_info[ 'ourprogram_fourth_details' ].'</p>
                            </div>
                        </div>
                    </div>';
                  }
                }
            ?>
        </div>
    </div>

    <div id="medical-support">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'ourprogram_fifthprogram_heading', true); ?></h2>
        </div>
        <div class="row">
            <?php
                $fifthprogram_data = get_post_meta( get_the_ID() );
                if ( isset( $fifthprogram_data[ 'ourprogram_group_medical_details' ][ 0 ] ) ) {
                  $fifthprogram_list = maybe_unserialize( $fifthprogram_data[ 'ourprogram_group_medical_details' ][ 0 ] );
                  foreach ( $fifthprogram_list as $fifthprogram_info ) {
                    echo '<div class="col-lg-6 col-md-6 mb-5">
                        <div class="program-inner-images">';
                            if(!empty($fifthprogram_info[ 'ourprogram_fifth_image' ])){
                                echo '<img src="'.$fifthprogram_info[ 'ourprogram_fifth_image' ].'" alt="">';
                            }
                            echo '<div class="pro-inner-text text-center">
                                <p>'.$fifthprogram_info[ 'ourprogram_fifth_details' ].'</p>
                            </div>
                        </div>
                    </div>';
                  }
                }
            ?>
        </div>
    </div>


    <div id="community-development">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'ourprogram_sixthprogram_heading', true); ?></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_post_meta(get_the_ID(), 'ourprogram_sixthprogram_image', true); ?>">
                <div class="pro-inner-text">
                    <?php echo get_post_meta(get_the_ID(), 'ourprogram_sixthprogram_details', true); ?>
                </div>
            </div>
        </div>
    </div>

    <div id="higher-education">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'ourprogram_seventhprogram_heading', true); ?></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pro-inner-text">
                    <?php echo get_post_meta(get_the_ID(), 'ourprogram_seventhprogram_details', true); ?>
                </div>
                <div class="text-center">
                    <a href="<?php echo get_permalink(120); ?>" class="btn join-btn">MORE ABOUT HIGHER EDUCATION SCHOLERSHIP </a>
                </div>
            </div>
        </div>
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