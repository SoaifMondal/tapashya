<?php
//Template name:Program Details
get_header();
$page_id = get_the_id();
?>

<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->

<!-- Overview section start -->
<?php if (get_field('show_overview_section', $page_id)) : ?>
    <section class="overview-details common-padding">
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty(get_field("_overviewtitle", $page_id))) { ?>
                    <h2><?php echo get_field("_overviewtitle", $page_id); ?></h2>
                <?php } ?>
                <?php $_overview_content = get_field('_overview_content');
                echo wpautop($_overview_content);
                ?>
                <ul class="list-unstyled d-flex justify-content-center rg-btn">
                    <?php if (!empty(get_field("_oregistration_button_text", $page_id))) { ?>
                        <li><a class="btn" href="<?php echo get_field("registration_button_link", $page_id); ?>"><?php echo get_field("_oregistration_button_text", $page_id); ?></a></li>
                    <?php } ?>

                    <?php if (!empty(get_field("_ovstudent_login_button_text", $page_id))) { ?>
                        <li><a class="btn btn-red" href="<?php echo get_field("_ovlogin_button_link", $page_id); ?>"><?php echo get_field("_ovstudent_login_button_text", $page_id); ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Overview section end-->

<section class="overview-section join-overview programs-details-view inner-overview common-padding">
    <div class="container">
        <div class="join-overview-info">
            <?php if (get_field('show_history_section', $page_id)) : ?>
                <!-- History & Success Story section start -->
                <div class="row join-overview-row align-items-center">
                    <div class="col-lg-6">
                        <div class="overview-image-info position-relative">
                            <?php if (!empty(get_field("_hisbig_image", $page_id))) { ?>
                                <div class="image-big">
                                    <img src="<?php echo get_field("_hisbig_image", $page_id); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                </div>
                            <?php } ?>

                            <?php if (!empty(get_field("_hissmall_image", $page_id))) { ?>
                                <div class="image-small">
                                    <img src="<?php echo get_field("_hissmall_image", $page_id); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overview-text-info">
                            <?php if (!empty(get_field("_hist_sutitle", $page_id))) { ?>
                                <h2><?php echo get_field("_hist_sutitle", $page_id); ?></h2>
                            <?php } ?>
                            <?php $history_st_content = get_field('history_st_content', $page_id);
                            echo wpautop($history_st_content);
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- History & Success Story section end-->



            <!-- Selection Criteria section start -->
            <?php if (get_field('show_selection_criteria_section_', $page_id)) : ?>
                <div class="row join-overview-row align-items-center">
                    <div class="col-lg-6">
                        <div class="overview-image-info position-relative">
                            <?php if (!empty(get_field("_select_image_copy", $page_id))) { ?>
                                <div class="image-big">
                                    <img src="<?php echo get_field("_select_image_copy", $page_id); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                </div>
                            <?php } ?>
                            <?php if (!empty(get_field("_selectl_image_copy", $page_id))) { ?>
                                <div class="image-small">
                                    <img src="<?php echo get_field("_selectl_image_copy", $page_id); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overview-text-info">
                            <?php if (!empty(get_field("selection_criteria_title", $page_id))) { ?>
                                <h2><?php echo get_field("selection_criteria_title", $page_id); ?></h2>
                            <?php } ?>
                            <?php $selection_criteria_content = get_field('selection_criteria_content', $page_id);
                            echo wpautop($selection_criteria_content);
                            ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Selection Criteria section end-->


            <!-- Current Students section start -->
            <?php if (get_field('show_current_students_section_', $page_id)) : ?>
                <div class="row join-overview-row align-items-center">
                    <div class="col-lg-6">
                        <div class="overview-image-info position-relative">
                            <?php if (!empty(get_field("_currbig_image", $page_id))) { ?>
                                <div class="image-big">
                                    <img src="<?php echo get_field("_currbig_image", $page_id); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                </div>
                            <?php } ?>
                            <?php if (!empty(get_field("_currsmall_image", $page_id))) { ?>
                                <div class="image-small">
                                    <img src="<?php echo get_field("_currsmall_image", $page_id); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overview-text-info">
                            <?php if (!empty(get_field("_currtitle", $page_id))) { ?>
                                <h2><?php echo get_field("_currtitle", $page_id); ?></h2>
                            <?php } ?>
                            <ul class="list-unstyled p-0 m-0">
                                <?php
                                if (have_rows('students_details_list', $page_id)) :
                                    while (have_rows('students_details_list', $page_id)) : the_row();
                                ?>
                                        <?php if (!empty(get_sub_field("_qualifications", $page_id))) { ?>
                                            <li><span class="view-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/check-icon-bg.svg" alt="<?php echo get_bloginfo('name') ?>"></span> <span class="view-text"><?php echo get_sub_field("_qualifications", $page_id); ?></span></li>
                                        <?php } ?>
                                <?php
                                    endwhile;
                                endif;
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Current Students section end -->

        </div>
    </div>
</section>

<!-- Projects Under Programs section section start-->
<?php if (get_field('show_projects_under_sc', $page_id)) : ?>
    <section class="events-section common-padding">
        <div class="container">
            <div class="section-title text-center">
                <?php if (!empty(get_field("_produntitle", $page_id))) { ?>
                    <h2><?php echo get_field('_produntitle', $page_id); ?></h2>
                <?php } ?>
                <?php if (!empty(get_field("_prounheader_text", $page_id))) { ?>
                    <p><?php echo get_field('_prounheader_text', $page_id); ?></p>
                <?php } ?>
            </div>
            <div class="events-silder">

                <?php
                if (have_rows('_unprojects_list', $page_id)) :
                    while (have_rows('_unprojects_list', $page_id)) : the_row();
                ?>
                        <div class="item">
                            <div class="events-item-info">
                                <?php if (!empty(get_sub_field("_unproject_image", $page_id))) { ?>
                                    <div class="events-img">
                                        <img src="<?php echo get_sub_field("_unproject_image", $page_id); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                    </div>
                                <?php } ?>
                                <?php if (!empty(get_sub_field("_unprojects_title", $page_id))) { ?>
                                    <div class="events-img-desc text-center">
                                        <h4><?php echo get_sub_field("_unprojects_title", $page_id); ?></h4>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Projects Under Programs section section end-->



<!-- Stories, Facts & Events section section start-->
<?php if (get_field('show_stories_facts_&_events_section_', $page_id)) : ?>
    <section class="stories-section stories-details-info common-padding">
        <div class="container">
            <?php if (!empty(get_field("_section_title", $page_id))) { ?>
                <div class="section-title text-center">
                    <h2><?php echo get_field('_section_title', $page_id) ?></h2>
                </div>
            <?php } ?>
            <div class="stories-slider stories-wrap">
                <?php
                if (have_rows('stories_&_events_list', $page_id)) :
                    while (have_rows('stories_&_events_list', $page_id)) : the_row();
                ?>
                        <div class="item">
                            <div class="item-info d-flex">
                                <?php if (!empty(get_sub_field("_strimage", $page_id))) { ?>
                                    <div class="stories-image">
                                        <img src="<?php echo get_sub_field("_strimage", $page_id); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                    </div>
                                <?php } ?>
                                <?php if (!empty(get_sub_field("_strcontent", $page_id))) { ?>
                                    <div class="stories-img-desc">
                                        <p><?php echo get_sub_field("_strcontent", $page_id); ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Stories, Facts & Events section section end-->

<?php get_sidebar(); ?>


<?php get_footer(); ?>