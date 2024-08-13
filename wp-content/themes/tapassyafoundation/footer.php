</main>
<!-- body section end -->

<!-- footer section start -->
<footer class="main-footer common-padding-top">
    <div class="container">
        <div class="ftr-center-info">
            <div class="row">

                <!-- Company -->
                <div class="col-lg-3 col-md-6">
                    <div class="ftr-menu text-white">
                        <?php if (!empty(get_field("_company_menu_title", "option"))) { ?>
                            <h4><?php echo get_field('_company_menu_title', 'option') ?></h4>
                        <?php } ?>
                        <ul class="list-unstyled p-0 m-0">
                            <?php wp_nav_menu(array('theme_location' => 'secondary', 'container' => false, 'items_wrap' => '%3$s')); ?>
                        </ul>
                    </div>
                </div>

                <!-- Our Programs -->
                <div class="col-lg-3 col-md-6">
                    <div class="ftr-menu text-white">
                        <?php if (!empty(get_field("_our_programs_menu_title", "option"))) { ?>
                            <h4><?php echo get_field('_our_programs_menu_title', 'option') ?></h4>
                        <?php } ?>
                        <ul class="list-unstyled p-0 m-0">
                            <?php wp_nav_menu(array('theme_location' => 'our_programs', 'container' => false, 'items_wrap' => '%3$s')); ?>
                        </ul>
                    </div>
                </div>

                <!-- Other Link -->
                <div class="col-lg-3 col-md-6">
                    <div class="ftr-menu text-white">
                        <?php if (!empty(get_field("_other_link_menu_title", "option"))) { ?>
                            <h4><?php echo get_field('_other_link_menu_title', 'option') ?></h4>
                        <?php } ?>
                        <ul class="list-unstyled p-0 m-0">
                            <?php wp_nav_menu(array('theme_location' => 'other_links', 'container' => false, 'items_wrap' => '%3$s')); ?>
                        </ul>
                    </div>
                </div>


                <!-- Contact Us -->
                <div class="col-lg-3 col-md-6">
                    <div class="ftr-menu text-white">
                        <?php if (!empty(get_field("_contact_us_menu_title", "option"))) { ?>
                            <h4><?php echo get_field('_contact_us_menu_title', 'option') ?></h4>
                        <?php } ?>
                        <div class="ftr-social">

                            <?php
                            if (have_rows('_lists_contact_details', 'option')) :
                                while (have_rows('_lists_contact_details', 'option')) : the_row();
                                    $contact_detail_link = get_sub_field('_concontact_link', 'option');
                                    $contact_icon = get_sub_field('_conli_icon', 'option');
                                    $contact_id = get_sub_field('_conlicontact_id', 'option');
                            ?>
                                    <div class="box d-flex align-items-center">
                                        <?php if (!empty($contact_icon)) { ?>
                                            <div class="icon">
                                                <img src="<?php echo esc_url($contact_icon); ?>" alt="<?php echo get_bloginfo('name') ?>">
                                            </div>
                                        <?php } ?>
                                        <div class="icon-text">
                                            <?php if (!empty($contact_detail_link)) : ?>
                                                <a href="<?php echo esc_url($contact_detail_link); ?>" target="_blank">
                                                    <?php echo esc_html($contact_id); ?>
                                                </a>
                                            <?php else : ?>
                                                <?php echo esc_html($contact_id); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-info d-flex align-content-center justify-content-between">
            <div class="left">
                <p><?php echo get_field('_copyright_text', 'option'); ?> © <?php echo get_the_date('Y') ?> <?php echo get_field('_tcompany_name', 'option'); ?> - <?php echo get_field('_all_rights_reserved_text', 'option'); ?>.</p>
            </div>
            <div class="right">

                <ul class="list-unstyled p-0 m-0">
                    <?php
                    if (have_rows('_rptsoacial_medias', 'option')) :
                        while (have_rows('_rptsoacial_medias', 'option')) : the_row();
                    ?>
                            <?php if (!empty(get_sub_field("_social_media_link", "option"))) { ?>
                                <li><a href="<?php echo get_sub_field('_social_media_link', 'option'); ?>" target="_blank"><img src="<?php echo get_sub_field('_social_icon', 'option'); ?>" alt="<?php echo get_bloginfo('name') ?>"></a></li>
                            <?php } ?>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->


<?php wp_footer(); ?>
</body>

</html>