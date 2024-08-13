<?php
//Template Name:Layout:Our Programs
get_header();

$image_one = get_field('image_one');
$image_two = get_field('image_two');
$section_one_heading = get_field('section_one_heading');
$section_one_description = get_field('section_one_description');
$button_one_url = get_field('button_one_url');
$button_one_title = get_field('button_one_title');
$button_two_url = get_field('button_two_url');
$button_two_title = get_field('button_two_title');

$section_two_heading = get_field('section_two_heading');
$section_two_description = get_field('section_two_description');
$image_section_two = get_field('image');

$section_three_heading = get_field('section_three_heading');
$section_three_description = get_field('section_three_description');
$criteria_description = get_field('criteria_description');

$image_list = get_field('image');
$section_four_heading = get_field('section_four_heading');


$section_five_heading = get_field('section_five_heading');
$section_five_description = get_field('section_five_description');
$section_five_button_one_title = get_field('section_five_button_one_title');
$section_five_button_two_title = get_field('section_five_button_two_title');
$section_five_button_three_title = get_field('section_five_button_three_title');


?>
<!-- body section start -->
<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->


<section class="overview-section inner-overview common-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="overview-image-info position-relative">
                    <?php
                    if (empty($image_one)) {
                        $image_one = get_template_directory_uri() . "/assets/images/overview-img-1.jpg";
                    }
                    ?>
                    <div class="image-big">
                        <img src="<?php echo $image_one; ?>" alt="">
                    </div>
                    <?php
                    if (empty($image_two)) {
                        $image_two = get_template_directory_uri() . "/assets/images/overview-img-2.jpg";
                    }
                    ?>
                    <div class="image-small">
                        <img src="<?php echo $image_two; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-text-info">
                    <?php
                    if (!empty($section_one_heading)) {
                    ?>
                        <h2><?php echo $section_one_heading; ?></h2>
                    <?php } ?>
                    <?php
                    if (!empty($section_one_description)) {
                    ?>
                        <p><?php echo $section_one_description; ?></p>
                    <?php } ?>
                    <ul class="reg-btn d-flex p-0 m-0">
                        <?php if (!empty($button_one_url) || !empty($button_one_title)) { ?>
                            <li><a class="btn" href="<?php echo $button_one_url; ?>"><?php echo $button_one_title; ?></a>
                            </li>
                        <?php } ?>
                        <?php if (!empty($button_two_url) || !empty($button_two_title)) { ?>
                            <li><a class="btn btn-red"
                                    href="<?php echo $button_two_url; ?>"><?php echo $button_two_title; ?></a></li>
                        <?php } ?>

                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="join-us-sec reverse position-relative">
    <?php if (empty($image_section_two)) {
        $image_section_two = get_template_directory_uri() . "/assets/images/success-img.jpg";
    } ?>
    <div class="join-image">
        <img src="<?php echo $image_section_two; ?>" alt="">
    </div>
    <div class="join-us-main position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 join-text-col">
                    <div class="join-text-info text-white position-relative z-2">
                        <?php if (!empty($section_two_heading)) { ?>
                            <h2><?php echo $section_two_heading; ?></h2>
                        <?php } ?>
                        <?php if (!empty($section_two_description)) { ?>
                            <p><?php echo $section_two_description; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>
</section>

<section class="our-selection-sec common-padding">
    <div class="container">
        <div class="section-title text-center">
            <?php if (!empty($section_three_heading)) { ?>
                <h2><?php echo $section_three_heading; ?></h2>
            <?php } ?>
            <?php if (!empty($section_three_description)) { ?>
                <p><?php echo $section_three_description; ?></p>
            <?php } ?>
        </div>
        <div class="selection-info">
            <div class="row">
                <?php if (have_rows('criteria_description')): ?>
                    <?php while (have_rows('criteria_description')):
                        the_row();
                        $criteria_number = get_sub_field('criteria_number');
                        $description = get_sub_field('description');
                        if ($criteria_number && $description) {
                    ?>

                            <div class="col-lg-6">
                                <div class="selection-item d-flex align-items-center">
                                    <div class="num">
                                        <h4><?php echo $criteria_number; ?></h4>
                                    </div>
                                    <div class="selection-desc">
                                        <h5><?php echo $description; ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>

<section class="current-students common-padding position-relative">
    <div class="container">
        <div class="row align-items-center position-relative z-2">
            <div class="col-lg-6">
                <?php if (empty($image_list)) {
                    $image_list = get_template_directory_uri() . "/assets/images/cu-students.jpg";
                } ?>
                <div class="students-img">
                    <img src="<?php echo $image_list; ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="students-desc">
                    <?php if (!empty($section_four_heading)) { ?>
                        <h2><?php echo $section_four_heading; ?></h2>
                    <?php } ?>
                    <ul class="list-unstyled p-0 m-0">
                        <?php if (have_rows('list_item')): ?>
                            <?php while (have_rows('list_item')):
                                the_row();
                                $list = get_sub_field('list');
                                if (!empty($list)) {
                            ?>
                                    <li> <span class="view-icon"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/check-icon-bg.svg"
                                                alt=""></span> <span class="view-text"><?php echo $list; ?></span>
                                    </li>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="projects-under common-padding">
    <div class="container">
        <div class="section-title text-center">
            <?php if (!empty($section_five_heading)) { ?>
                <h2><?php echo $section_five_heading; ?></h2>
            <?php } ?>
            <?php if (!empty($section_five_description)) { ?>
                <p> <?php echo $section_five_description; ?></p>
            <?php } ?>
        </div>






        <?php
        // Get the categories
        $categories = get_categories(
            array(
                'taxonomy' => 'project_category',
                'order' => 'ASC'
            )
        );
        ?>

        <div class="tab-info text-center">
            <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
                <?php foreach ($categories as $index => $category): ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>"
                            id="tab-<?php echo $category->slug; ?>" data-bs-toggle="tab"
                            data-bs-target="#tab-pane-<?php echo $category->slug; ?>" type="button" role="tab"
                            aria-controls="tab-pane-<?php echo $category->slug; ?>"
                            aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                            <?php echo $category->name; ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="tab-content accordion" id="myTabContent">
                <?php foreach ($categories as $index => $category): ?>
                    <?php

                    $query = new WP_Query(
                        array(
                            'post_type' => "project",
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'project_category',
                                    'field' => 'term_id',
                                    'terms' => array($category->term_id),
                                ),
                            ),
                        )
                    );

                    ?>
                    <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?> accordion-item"
                        id="tab-pane-<?php echo $category->slug; ?>" role="tabpanel"
                        aria-labelledby="tab-<?php echo $category->slug; ?>" tabindex="0">
                        <h2 class="accordion-header d-lg-none" id="heading-<?php echo $category->slug; ?>">
                            <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $category->slug; ?>"
                                aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-controls="collapse-<?php echo $category->slug; ?>">
                                <?php echo $category->name; ?>
                            </button>
                        </h2>
                        <div id="collapse-<?php echo $category->slug; ?>"
                            class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?> d-lg-block"
                            aria-labelledby="heading-<?php echo $category->slug; ?>" data-bs-parent="#myTabContent">
                            <div class="accordion-body">
                                <div class="project-bottom-info">
                                    <div class="row">
                                        <?php if ($query->have_posts()): ?>
                                            <?php while ($query->have_posts()):
                                                $query->the_post(); ?>
                                                <div class="col-lg-4">
                                                    <div class="project-bottom-item">
                                                        <div class="image">
                                                            <?php if (has_post_thumbnail()): ?>
                                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                                                    alt="<?php echo get_the_title(); ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="image-desc">
                                                            <h4><?php echo get_the_title(); ?></h4>
                                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>




    </div>
    </div>
    </div>
</section>

<?php get_sidebar(); ?>


<!-- body section end -->
<?php get_footer(); ?>