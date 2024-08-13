<?php
//Template name: Our Programs List
get_header();
$page_id = get_the_id();
?>

    <!-- Banner Section -->
    <?php echo get_template_part('template-parts/bannersection') ?>
    <!-- Banner Section -->

    <section class="stories-section common-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2><?php the_content(); ?></h2>
            </div>
            <div class="stories-wrap stories-list">
                <div class="row">
                    <?php
                    if (have_rows('programs_list', $page_id)) :
                        while (have_rows('programs_list', $page_id)) : the_row();
                    ?>
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="item-info d-flex">
                                        <?php if (!empty(get_sub_field("_programs_image", $page_id))) { ?>
                                            <div class="stories-image">
                                                <img src="<?php echo get_sub_field('_programs_image', $page_id) ?>" alt="<?php echo get_bloginfo('name') ?>">
                                            </div>
                                        <?php } else { ?>
                                            <div class="stories-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="<?php echo get_bloginfo('name') ?>">
                                            </div>
                                        <?php } ?>
                                        <div class="stories-img-desc">
                                            <?php if (!empty(get_sub_field("_programs_title", $page_id))) { ?>
                                                <h4><?php echo get_sub_field('_programs_title', $page_id) ?></h4>
                                            <?php } ?>

                                            <?php if (!empty(get_sub_field("programs_about", $page_id))) { ?>
                                                <p><?php echo get_sub_field('programs_about', $page_id) ?></p>
                                            <?php } ?>
                                            <?php if (!empty(get_sub_field("_prglbutton_text", $page_id))) { ?>
                                                <a class="btn" href="<?php echo get_sub_field('_prgllink', $page_id) ?>"><?php echo get_sub_field('_prglbutton_text', $page_id) ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>