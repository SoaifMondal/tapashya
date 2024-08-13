
<?php 
//Template Name: Kishalaya Vidyaniketan
get_header();
?>

<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->

<!-- Overview Section -->
<section class="overview-section common-small-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="overview-text-info">
                    <h2><?php the_field('overview_section_title', get_the_id());?></h2>
                    <p><?php the_field('overview_section_text', get_the_id());?></p>
                    <ul class="list-unstyled p-0 m-0">
                    <?php 
                            if (have_rows('overview_section_list',get_the_id())) {
                            while (have_rows('overview_section_list', get_the_id())) {
                            the_row();
                                $list_text = get_sub_field('list_text', get_the_id());
                                if($list_text){
                        ?>
                                    <li><span class="view-icon"><img src="<?php the_sub_field('list_logo', get_the_id()); ?>" alt="<?php echo $list_text; ?>"></span> <span class="view-text"><?php echo $list_text; ?></span></li>
                        <?php
                                }
                            wp_reset_postdata();
                            }
                            }
                        ?>
                    </ul>
                    <p><strong><?php the_field('current_state_title', get_the_id());?></strong> <?php the_field('current_state_text', get_the_id());?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-image-info position-relative">
                    <?php 
                        $overview_big_image = get_field('current_state_big_banner_image', get_the_id());
                        if($overview_big_image){
                    ?>
                    <div class="image-big">
                        <img src="<?php echo $overview_big_image; ?>" alt="">
                    </div>
                    <?php 
                        }
                        $overview_small_image = get_field('current_state_small_banner_image', get_the_id());
                        if($overview_small_image){
                    ?>
                        <div class="image-small">
                            <img src="<?php echo $overview_small_image; ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Overview Section -->

<!-- Future Plans Section -->
<section class="future-plans common-padding" style="background-image: url(<?php the_field('future_section_background_image', get_the_id());?>);">
    <div class="container">
        <div class="section-tilte text-center text-white">
            <h2><?php the_field('future_plans_section_title', get_the_id());?></h2>
            <p><?php the_field('future_plans_section_text', get_the_id());?></p>
        </div>
        <div class="future-info">
            <div class="row">
            <?php 
                if (have_rows('future_plans_titles_&_images_repeater',get_the_id())) {
                while (have_rows('future_plans_titles_&_images_repeater', get_the_id())) {
                the_row();
                    $list_text = get_sub_field('future_plans_repeater_title', get_the_id());
                    $list_image = get_sub_field('future_plans_repeater_image', get_the_id());
                    if($list_text){
            ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="future-item">
                                <div class="icon">
                                    <img src="<?php echo $list_image; ?>" alt="<?php echo $list_text; ?>">
                                </div>
                                <div class="icon-desc">
                                    <h4><?php echo $list_text; ?></h4>
                                </div>
                            </div>                    
                        </div>
            <?php
                    }
                wp_reset_postdata();
                }
                }
            ?>
            </div>
        </div>


    </div>
</section>
<!-- Future Plans Section -->


<!-- Stories Events Section -->
<section class="events-section common-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2><?php the_field('stories_&_events_section_title', get_the_id());?></h2>
        </div>
        <div class="events-silder">
        <?php 
            if (have_rows('stories_&_events_section_slider_repeater',get_the_id())) {
            while (have_rows('stories_&_events_section_slider_repeater', get_the_id())) {
            the_row();
                $list_text = get_sub_field('stories_&_events_section_slider_title', get_the_id());
                $list_image = get_sub_field('stories_&_events_section_slider_image', get_the_id());
                if($list_text){
        ?>
                    <div class="item">
                        <div class="events-item-info">
                            <div class="events-img">
                                <img src="<?php echo $list_image; ?>" alt="<?php echo $list_text; ?>">
                            </div>
                            <div class="events-img-desc text-center">
                                <h4><?php echo $list_text; ?></h4>
                            </div>
                        </div>

                    </div>   
        <?php
                }
            wp_reset_postdata();
            }
            }
        ?>
        </div>
    </div>
</section>
<!-- Stories Events Section -->


<!-- Contact Form Section -->
<?php get_sidebar(); ?> 
<!-- Contact Form Section -->

<?php get_footer();?>