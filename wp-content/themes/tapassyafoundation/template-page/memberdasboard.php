<?php
//Template name: Member dashboard
get_header();

$current_user = wp_get_current_user();

$id = $current_user->ID;
$user_email = $current_user->user_email;
$user_name = $current_user->display_name;
?>
<!-- Member Banner Section -->
<?php echo get_template_part('template-parts/members/memberbanner'); ?>
<!-- Member Banner Section -->

<section class="dashboard-sec common-padding">
    <div class="container">
        <!-- volunteer part -->
        <?php echo get_template_part('template-parts/members/volunteer'); ?>
        <!-- volunteer part -->

        <div class="dashboard-main-wrap d-flex justify-content-between">
            <!-- Member menu side bar -->
            <?php echo get_sidebar('membermenu'); ?>
            <!-- Member menu side bar -->

            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="dashboard-home-desc">
                        <div class="welcome-title">
                            <?php echo the_content(); ?>
                            <h5>Hello, <?php echo $user_name; ?> !</h5>
                            <p>We are thrilled to have you as part of our community. Here's what you can do from your dashboard:</p>
                        </div>
                        <div class="dashboard-home-details">
                            <div class="row dashboard-home-row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="dashboard-home-info">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/donation-icon.svg" alt="">
                                        </div>
                                        <div class="icon-desc">
                                            <h4>Donation Details</h4>
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-toggle-arrow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="dashboard-home-info">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raise-icon.svg" alt="">
                                        </div>
                                        <div class="icon-desc">
                                            <h4>Raise Request</h4>
                                            <a href="<?php echo esc_url(site_url('/raise-payment-requests')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-toggle-arrow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="dashboard-home-info">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/up-profile.svg" alt="">
                                        </div>
                                        <div class="icon-desc">
                                            <h4>Update Your Profile</h4>
                                            <a href="<?php echo site_url('/edit-profile'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-toggle-arrow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="dashboard-home-info">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-icon.svg" alt="">
                                        </div>
                                        <div class="icon-desc">
                                            <h4>Contact Us</h4>
                                            <a href="<?php echo esc_url(site_url('/contact-us')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-toggle-arrow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>