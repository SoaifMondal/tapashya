<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script> -->
    <!-- Favicon -->
    <link rel="icon" type="<?php echo get_template_directory_uri(); ?>/images/favicon.png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!-- header section start -->
    <header class="main-header">
        <div class="header-info">
            <div class="container">
                <div class="navigation-bar d-flex align-items-center justify-content-between ">
                    <?php if (!empty(get_field("header_logo", "option"))) { ?>
                        <div class="logo-block">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_field('header_logo', 'option') ?>" alt="<?php echo get_bloginfo('name') ?>"></a>
                        </div>
                    <?php } ?>
                    <div class="header-right d-flex align-items-center">
                        <div class="center-info d-flex align-items-center">
                            <div class="main-menu">
                                <ul class="nav">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'container'      => false,
                                        'items_wrap'     => '%3$s',
                                        'walker'         => new WP_Bootstrap_Navwalker()
                                    ));
                                    ?>
                                </ul>

                            </div>
                        </div>
                        <div class="header-right-btn d-flex align-items-center">
                            <div class="header-button">
                                <ul class="d-flex align-items-center">
                                    <li><a class="btn" href="<?php echo get_field('donate_now_button_link', 'option') ?>"><?php echo get_field('donate_now_button_text', 'option') ?></a></li>
                                    <?php if (is_user_logged_in()) { ?>
                                        <li class="me-3"><a class="btn" href="#">Profile</a></li>
                                        <li><a class="btn btn-red" href="<?= wp_logout_url(home_url()); ?>">Logout</a></li>
                                    <?php } else { ?>
                                        <li><a class="btn btn-red" href="<?php echo get_field('sign_in_button_link', 'option') ?>"><?php echo get_field('sign_in_button_text', 'option') ?></a></li>
                                    <?php } ?>
                                </ul>


                            </div>
                            <div class="nav-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-menu">
        <div class="menu-inner">
            <div class="mobile-top-section">
                <div class="container">
                    <div class="inner-row">
                        <?php if (!empty(get_field("_mobile_menu_header_logo", "option"))) { ?>
                            <div class="mobile-logo">
                                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_field('_mobile_menu_header_logo', 'option') ?>" alt="<?php echo get_bloginfo('name') ?>"></a>
                            </div>
                        <?php } ?>
                        <div class="top-right">
                            <div class="nav-btn-close">
                                <span class="top"></span>
                                <span class="bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-mid-section">
            <div class="container">
                <div class="main-menu">
                    <ul class="nav">
                        <?php wp_nav_menu(array('theme_location' => 'mobile', 'container' => false, 'items_wrap' => '%3$s', 'walker' => new WP_Bootstrap_Navwalker())); ?>
                    </ul>

                    <div class="header-button">
                        <ul class="d-flex align-items-center">
                            <li><a class="btn" href="<?php echo get_field('donate_now_button_link', 'option') ?>"><?php echo get_field('donate_now_button_text', 'option') ?></a></li>
                            <?php if (is_user_logged_in()) { ?>
                                <li><a class="btn" href="#">Profile</a></li>
                                <li><a class="btn btn-red" href="<?= wp_logout_url(home_url()); ?>">Logout</a></li>
                            <?php } else { ?>
                                <li><a class="btn btn-red" href="<?php echo get_field('sign_in_button_link', 'option') ?>"><?php echo get_field('sign_in_button_text', 'option') ?></a></li>
                            <?php } ?>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- body section start -->
    <main>