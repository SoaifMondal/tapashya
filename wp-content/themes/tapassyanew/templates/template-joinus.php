<?php 
/*Template Name: Template Join Us*/
get_header(); 
if(have_posts()): while(have_posts()): the_post(); ?>
<div class="about-banner">

<img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(), 'joinus_banner_image', true); ?>" alt="First slide">
<div class="about-banner-text">
    <h1><?php echo get_post_meta(get_the_ID(), 'joinus_banner_heading', true); ?></h1>

</div>
</div>
</div>

<section class="joinus-section exit-section">
<div class="container">
    <div class="section-heading">
        <h2><?php echo get_post_meta(get_the_ID(), 'joinus_page_heading', true); ?></h2>
    </div>
    <div class="inner-section-join ">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <img src="<?php echo get_post_meta(get_the_ID(), 'joinus_page_leftimg', true); ?>" alt="">
            </div>
            <div class="col-lg-8 mb-4">
                <?php echo get_post_meta(get_the_ID(), 'joinus_page_rightdetails', true); ?>
            </div>

        </div>
        <?php echo get_post_meta(get_the_ID(), 'joinus_page_fullwidth_details', true); ?>
    </div>

</div>


</section>
<section class="contact-us-join">
    <div class="container">
        <div class="text-center">
            <a href="<?php echo get_permalink(80); ?>" class="btn join-btn">Register Yourself with Tapassya</a>
        </div>
    </div>
</section>

<section class="contact-us-join">
<div class="container">
    <?php echo do_shortcode('[contact-form-7 id="53" title="Share your thought"]');?>
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