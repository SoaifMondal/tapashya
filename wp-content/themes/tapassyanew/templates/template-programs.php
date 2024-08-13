<?php 
/*Template Name: Template Programs*/
get_header(); ?>
<div class="about-banner">
	<img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(), 'programs_banner_image', true); ?>" alt="First slide">
	<div class="about-banner-text">
    	<h1><?php echo get_post_meta(get_the_ID(), 'programs_banner_heading', true); ?></h1>
	</div>
</div>

<section class="exit-section programs">
	<div class="container">
	    <div class="section-heading">
	        <h2><?php echo get_post_meta(get_the_ID(), 'programs_page_heading', true); ?></h2>
	    </div>
	    <div class="row">
	        <div class="col-md-12 ">
	            <div class="row box m-0">
	                <div class="col-md-5 p-0">
	                    <img class="about-inner-images images" src="<?php echo get_post_meta(get_the_ID(), 'programs_page_leftimg', true); ?>" alt="">
	                </div>
	                <div class="col-md-7 p-0">
	                    <div class="card-text program">
	                        <?php echo get_post_meta(get_the_ID(), 'programs_page_rightdetails', true); ?>
	                    </div>
	                </div>

	            </div>
	        </div>

	    </div>
	</div>
</section>

<section class="slider-r p-0">
    <div class="container">
        <div class="section-heading">
            <h2><?php echo get_post_meta(get_the_ID(), 'programs_galsec_heading', true); ?></h2>    
        </div>
        <div class="owl-carousel owl-theme slider" id="what-we-do">
            <?php
              $program_gal_data = get_post_meta( get_the_ID() );
              if ( isset( $program_gal_data[ 'programs_group_details' ][ 0 ] ) ) {
                $program_gal_list = maybe_unserialize( $program_gal_data[ 'programs_group_details' ][ 0 ] );
                foreach ( $program_gal_list as $program_gal_info ) {
                  echo '<div class="item">
                        <div class="ProductBlock">
                            <div class="Content">
                                <div class="img-fill">
                                    <img src="'.$program_gal_info[ 'programs_groupsection_image' ].'">
                                </div>
                                <div class="slider-text">
                                    <h3>'.$program_gal_info[ 'programs_groupsection_shortdetails' ].'</h3>
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
<?php get_footer(); ?>