<?php 
/*Template Name: Template HES*/
get_header(); ?>
<div class="about-banner">
  
  <img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(), 'hes_image', true); ?>" alt="First slide">
  <div class="about-banner-text">
      <h1><?php echo get_post_meta(get_the_ID(), 'hes_heading', true); ?></h1>
      
  </div>
</div>
</div>

<section class="exit-section about-section">
  <div class="container">
      <div class="section-heading text-center mb-5">
          <p><?php echo get_post_meta(get_the_ID(), 'hes_section_details', true); ?></p>
          <a href="<?php echo get_permalink(95); ?>" class="btn join-btn">Student Registration</a>
          <a href="<?php echo get_permalink(18); ?>" class="btn join-btn">Student Login</a>
      </div>
      <div class="row">
      		<div class="col-md-12">
      			<h3 class="text-center"><?php echo get_post_meta(get_the_ID(), 'hes_left_section_heading', true); ?></h3>
		      <?php
		        $aboutdetails_data = get_post_meta( get_the_ID() );
		        if ( isset( $aboutdetails_data[ 'hes_group_details' ][ 0 ] ) ) {
		          $aboutdetails_list = maybe_unserialize( $aboutdetails_data[ 'hes_group_details' ][ 0 ] );
		          foreach ( $aboutdetails_list as $aboutdetails_info ) {
		            echo '<div class="row about-section-row">
		                <div class="col-md-12 ">
		                    <div class="row box m-0">
		                        <div class="col-md-5 p-0">
		                            <img class="about-inner-images images" src="'.$aboutdetails_info[ 'hes_groupsection_image' ].'" alt="">
		                        </div>
		                        <div class="col-md-7 p-0">
		                            <div class="card-text">
		                                <h4>'.$aboutdetails_info[ 'hes_groupsection_heading' ].'</h4>
		                                <p>'.$aboutdetails_info[ 'hes_groupsection_details' ].'</p>

		                            </div>
		                        </div>

		                    </div>
		                </div>
		            </div>';
		          }
		        }
		      ?>
		  </div>
		  <div class="col-md-6 text-center">
		  	<h3><?php echo get_post_meta(get_the_ID(), 'hes_right_section_heading', true); ?></h3>
		  	<p><?php echo get_post_meta(get_the_ID(), 'hes_right_section_details', true); ?></p>
		  </div>
	  </div>
  </div>
</section>
<?php get_footer(); ?>