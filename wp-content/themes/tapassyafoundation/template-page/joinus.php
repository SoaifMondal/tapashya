
<?php 
//Template Name: Join Us
get_header();
?>

<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->

<section class="overview-section join-overview inner-overview common-padding">
    <div class="container">
        <div class="join-overview-info">
            <div class="row join-overview-row align-items-center">
                <div class="col-lg-6">
                    <div class="overview-image-info position-relative">
                        <?php 
                            $involve_big_image = get_field('involved_section_1st_banner_image_', get_the_id());
                            if($involve_big_image){
                        ?>
                            <div class="image-big">
                                <img src="<?php echo $involve_big_image; ?>" alt="">
                            </div>
                        <?php 
                            }
                            $involve_small_image = get_field('involved_section_2nd_banner_image_', get_the_id());
                            if($involve_small_image){
                        ?>
                            <div class="image-small">
                                <img src="<?php echo $involve_small_image; ?>" alt="">
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overview-text-info">
                        <h2><?php the_field('involved_section_1st_title_', get_the_id()); ?></h2>
                        <p><?php the_field('involved_section_1st_text_', get_the_id()); ?></p> 
                        <h4><?php the_field('involved_section_2nd_title_', get_the_id()); ?></h4>                     
                        <p><?php the_field('involved_section_2ns_text_', get_the_id()); ?></p>                        
                    </div>
                </div>                                    
            </div>        
            <div class="row join-overview-row align-items-center">
                <div class="col-lg-6">
                    <div class="overview-image-info position-relative">
                        <?php 
                            $donate_big_image = get_field('donate_section_big_banner_image', get_the_id()); 
                            if($donate_big_image ){
                        ?>
                            <div class="image-big">
                                <img src="<?php echo $donate_big_image; ?>" alt="">
                            </div>
                        <?php 
                            }
                            $donate_small_image = get_field('donate_section_small_banner_image', get_the_id());
                            if($donate_small_image){
                        ?>
                            <div class="image-small">
                                <img src="<?php echo $donate_small_image; ?>" alt="">
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overview-text-info">
                        <h2><?php the_field('donate_section_1st_title', get_the_id()); ?></h2>
                        <p><?php the_field('donate_section_1st_text', get_the_id()); ?></p>        
                        <h4><?php the_field('donate_section_2nd_title', get_the_id()); ?></h4>     
                        <p><?php the_field('donate_section_2nd_text', get_the_id()); ?></p> 
                        
                    </div>
                </div>
            
            </div>
            <?php 
            $button_text = get_field('register_button_text', get_the_id());
            if($button_text){ ?>
            <div class="register-btn text-center pt-4">
                <a class="btn" href="<?php the_field('register_button_link', get_the_id()); ?>"><?php echo $button_text; ?></a>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<?php get_sidebar(); ?> 
<!-- Contact Form Section -->

<?php get_footer();?>