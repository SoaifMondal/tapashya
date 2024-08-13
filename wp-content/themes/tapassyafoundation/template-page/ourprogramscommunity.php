<?php
//Template Name:Layout:Our Programs Community
get_header();
?>
<!-- body section start -->
 <!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->   
    <section class="projects-under common-padding">
        <div class="container">
            <?php
            $page_Id = get_the_ID();
            $sec1_heading = get_field('heading', $page_Id);
            $sec1_tittle = get_field('tittle', $page_Id);
            // $sec1_tittle=get_field('tittle',$page_Id);
            
            ?>
            <div class="section-title text-center">
                <?php if (!empty($sec1_heading)) { ?>
                    <h2><?= $sec1_heading; ?></h2>
                <?php } ?>

                <?php if (!empty($sec1_tittle)) { ?>
                    <p><?= $sec1_tittle ?></p>
                <?php } ?>

            </div>

            <?php if (have_rows('section_1_category_tab')): ?>
                <div class="tab-info text-center">
                    <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
                        <?php $i = 0; ?>
                        <?php while (have_rows('section_1_category_tab')):
                            the_row();
                            $Button_text = get_sub_field('button_text_'); ?>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" id="tab-<?php echo $i; ?>"
                                    data-bs-toggle="tab" data-bs-target="#tab-pane-<?php echo $i; ?>" type="button" role="tab"
                                    aria-controls="tab-pane-<?php echo $i; ?>"
                                    aria-selected="<?php echo $i == 0 ? 'true' : 'false'; ?>"><?php echo $Button_text; ?></button>
                            </li>

                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </ul>

                    <div class="tab-content accordion" id="myTabContent">
                        <?php $i = 0; ?>

                        <?php while (have_rows('section_1_category_tab')):
                            the_row();
                            $Button_text = get_sub_field('button_text_');
                            $tab_heading = get_sub_field('tab_heading');
                            $tab_content = get_sub_field('tab_content');
                            $tab_image_1 = get_sub_field('tab_image_1',$page_Id);
                            $tab_image_2 = get_sub_field('tab_image_2',$page_Id);

                            if (empty($tab_image_1)) {
                                $tab_image_1 = get_template_directory_uri() . '/assets/images/noimage1.jpg';
                            }

                            if (empty($tab_image_2)) {
                                $tab_image_2 = get_template_directory_uri() . '/assets/images/noimage1.jpg';
                            }
                            ?>

                            <div class="tab-pane fade show <?php echo $i == 0 ? 'active' : ''; ?> accordion-item"
                                id="tab-pane-<?php echo $i; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>"
                                tabindex="0">

                                <h2 class="accordion-header d-lg-none" id="heading-<?php echo $i; ?>">
                                    <button class="accordion-button <?php echo $i != 0 ? 'collapsed' : ''; ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i; ?>"
                                        aria-expanded="<?php echo $i == 0 ? 'true' : 'false'; ?>"
                                        aria-controls="collapse-<?php echo $i; ?>"><?php echo $Button_text; ?></button>
                                </h2>
                                <div id="collapse-<?php echo $i; ?>"
                                    class="accordion-collapse collapse <?php echo $i == 0 ? 'show' : ''; ?> d-lg-block"
                                    aria-labelledby="heading-<?php echo $i; ?>" data-bs-parent="#myTabContent">
                                    <div class="accordion-body">
                                        <div class="project-bottom-info">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="overview-text-info">
                                                        <?php if (!empty($tab_heading)) { ?>
                                                            <h2><?php echo $tab_heading; ?></h2>
                                                        <?php } ?>
                                                        <?php if (!empty($tab_content)) { ?>
                                                            <?php echo $tab_content; ?>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                                <?php if (!empty($tab_image_1) || !empty($tab_image_2)): ?>
                                                    <div class="col-lg-6">
                                                        <div class="overview-image-info position-relative">
                                                            <div class="image-big">
                                                                <img src="<?php echo $tab_image_1; ?>"
                                                                    alt="<?php echo $tab_image_1; ?>">
                                                            </div>
                                                            <div class="image-small">
                                                                <img src="<?php echo $tab_image_2; ?>"
                                                                    alt="<?php echo $tab_image_2; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>

                </div>

            <?php endif; ?>
    </section>

    <section class="join-us-sec position-relative">
        <?php
        $sec_2_Heading = get_field('section_2_heading', $page_Id);
        $sec_2_content = get_field('section_2_content', $page_Id);

        $sec_2_image = get_field('section_2_image_section', $page_Id);
        if (empty($sec_2_image)) {
            $sec_2_image = get_template_directory_uri() . '/assets/images/noimage1.jpg';
        }


        ?>
        <div class="join-image">
            <img src="<?php echo $sec_2_image; ?>" alt="">
        </div>
        <div class="join-us-main position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 join-text-col">
                        <div class="join-text-info text-white position-relative z-2">
                            <?php if (!empty($sec_2_Heading)) { ?>
                                <h2><?= $sec_2_Heading; ?></h2>
                            <?php } ?>

                            <?php if (!empty($sec_2_content)) { ?>
                                <?= $sec_2_content; ?>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stories-section common-padding">
        <div class="container">
            <?php $sec_3_heading = get_field('section_3_heading', $page_Id);
            if (!empty($sec_3_heading)) {
                ?>

                <div class="section-title text-center">
                    <h2><?= $sec_3_heading; ?></h2>
                </div>
            <?php } ?>
            <?php
            if (have_rows('secton_3_repeater_section', $page_Id)):
                ?>
                <div class="stories-slider stories-wrap">
                    <?php while (have_rows('secton_3_repeater_section', $page_Id)):
                        the_row();
                        $sub_value_Content = get_sub_field('section_3_content');
                        $sub_value_image = get_sub_field('section_3_image_section');
                        if (empty($sub_value_image)) {
                            $sub_value_image = get_template_directory_uri() . '/assets/images/noimage1.jpg';
                        }
                        ?>
                        <div class="item">
                            <div class="item-info d-flex">
                                <div class="stories-image">
                                    <img src="<?php echo $sub_value_image; ?>" alt="">
                                </div>
                                <?php if (!empty($sub_value_Content)) { ?>
                                    <div class="stories-img-desc">
                                        <?= $sub_value_Content; ?>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php get_sidebar(); ?>


<!-- body section end -->
<?php
get_footer();
?>