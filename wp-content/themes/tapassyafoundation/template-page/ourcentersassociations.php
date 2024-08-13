<?php
//Template Name:Layout:Our Centers Associations
get_header();
$section_one_heading = get_field('section_one_heading');
$section_one_description = get_field('section_one_description');

?>
<!-- body section start -->
<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->

<section class="centers-associations common-padding">
    <div class="container">
        <div class="section-title text-center">
            <?php if (!empty($section_one_heading)) { ?>
                <h2><?php echo $section_one_heading; ?></h2>
            <?php } ?>
            <?php if (!empty($section_one_description)) { ?>
                <p><?php echo $section_one_description; ?></p>
            <?php } ?>
        </div>
        <div class="associations-info">
            <?php if (have_rows('section_one_centers')): ?>
                <ul class="slides">
                    <?php while (have_rows('section_one_centers')):
                        the_row();
                        $centers_image = get_sub_field('centers_image');
                        if (empty($centers_image)) {
                            $centers_image = get_template_directory_uri() . "/assets/images/noimage1.jpg";
                        }
                        $centers_heading = get_sub_field('centers_heading');
                        $centers_description = get_sub_field('centers_description');

                        ?>

                        <div class="row associations-row align-items-center">
                            <div class="col-lg-6">
                                <div class="associations-img">
                                    <img src="<?php echo $centers_image; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="associations-desc">
                                    <?php if (!empty($centers_heading)) { ?>
                                        <h3><?php echo $centers_heading; ?></h3>
                                    <?php } ?>
                                    <?php if (!empty($centers_description)) { ?>
                                        <p><?php echo $centers_description; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <!-- <div class="row associations-row align-items-center">
                <div class="col-lg-6">
                    <div class="associations-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/associations-img-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="associations-desc">
                        <h3>Tapassya Bhavan, Hatpara Vivek Seva Niketan at Joynagar, South 24 Parganas, West Bengal</h3>
                        <p>Along with another NGO, Hatpara Vivek Seva Niketan (HVSN), we are operating a day care centre for 23 boys and girls between 6 - 15 years of age. Here we offer them two meals, tuition classes in the morning and evening and training on co-curricular activities like music, drawing and gymnastic under the guidance of professional instructors. We also participate in the medical check-up camps organised by HSVN for villagers, distribution of clothes, blankets and books on occasions. We have jointly constructed another building here as an extension of earlier facilities as part of the fully residential setup.</p>
                    </div>
                </div>
            </div>
            <div class="row associations-row align-items-center">
                <div class="col-lg-6">
                    <div class="associations-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/associations-img-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="associations-desc">
                        <h3>Matri Ashram, Duttapukur A New Start with Blessings of "Ma"</h3>
                        <p>Duttapukur Matri Ashram, an organization founded nearly 3 decades ago, is getting integrated with TAPASSYA in 2018 due to inability of the existing members to run the operations because of their old age. TAPASSYA will bear the entire expenditure and management to provide education to poor students, medical support to villagers, handicrafts/jute training to women and computer training to young students. Current Services - Class 1 to 4 Coaching Class. Runs 6 days a week for 2 hours every morning. Total Enrolled students 37. Computer training center for basic computer training. Open for all age. Total enrolled students 30+ (mostly school goers) Homeopathic Clinic, Twice a week, Average footfall 20 per day. Basic medicine are distributed free of cost for above clinic.</p>
                    </div>
                </div>
            </div> -->
        </div>


    </div>
</section>

<section class="gallery-section common-padding">
    <div class="container">
        <div class="section-title text-center">
        <?php 
        $section_two_heading=get_field('section_two_heading');
        if (!empty($section_two_heading)) { ?>
            <h2><?php echo $section_two_heading; ?></h2>
            <?php } ?>
        </div>
        <div class="gallery-info">
    <div class="gallery-row">
        <?php
        $section_two_gallery = get_field('section_two_gallery');
        if ($section_two_gallery):
            $initial_load = 3; 
            foreach ($section_two_gallery as $index => $image):
                if ($index < $initial_load): ?>
                    <div class="item">
                        <div class="item-inner">
                            <a class="position-relative" href="<?php echo $image['url']; ?>" data-lightbox="gallery">
                                <div class="image-holder">
                                    <img src="<?php echo $image['url']; ?>" alt="">
                                </div>
                                <div class="overlay-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eye-icon.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endif;
            endforeach; ?>
        <?php endif; ?>
    </div>
     <div id="loder-svg">
        <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/loder.svg" height="100" alt="">
     </div>
    <?php if (count($section_two_gallery) > $initial_load): ?>
        <div class="gallery-btn text-center">
            <a id="load-more" class="btn" href="#">Load More</a>
        </div>
    <?php endif; ?>
</div>

    </div>
</section>
<?php get_sidebar(); ?>
<script>
 jQuery(document).ready(function($) {
    $('#loder-svg').hide();
    var page_id=<?php echo get_the_ID(); ?>;
    var initial_load = 3;
    var total_images = <?php echo count($section_two_gallery); ?>;
    var loaded_images = initial_load;
    

    $('#load-more').click(function(e) {
        $('#loder-svg').show();
        e.preventDefault();
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                action: 'load_more_gallery',
                offset: loaded_images,
                page_id: page_id,
                initial_load: initial_load
            },
            success: function(response) {
                $('.gallery-row').append(response);
                $('#loder-svg').hide();
                loaded_images += initial_load;
                if (loaded_images >= total_images) {
                    $('#load-more').hide();
                }
            }
        });
    });
});

</script>
<!-- body section end -->
<?php get_footer(); ?>