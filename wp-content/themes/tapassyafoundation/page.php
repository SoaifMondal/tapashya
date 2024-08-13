<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
?>
  <!-- About Start -->
  <section class="abt-page-wrp common-padd">
    <div class="container">
      <div>
        <div class="inner-abt-img">
          <div class="abt-img">
            <img src="<?php echo  get_field("_add_contact_banner_image",68); ?>" alt="" />
          </div>
        </div>
        <div class="abt-txt">
          <div class="title">
            <h2><?php echo  get_the_title(); ?></h2>
          </div>
         <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- About End -->
  <div class="clearfix"></div>
<?php
endwhile; // End of the loop.

get_footer();
