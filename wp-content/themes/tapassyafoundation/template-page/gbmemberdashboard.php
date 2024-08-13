<?php
//template name: GB member Dashboard
get_header();
$current_user = wp_get_current_user();

$id = $current_user->ID;
$user_email = $current_user->user_email;
$user_name = $current_user->user_login;
?>
<!-- Banner Section -->
<?php echo get_template_part('template-parts/members/memberbanner'); ?>
<!-- Banner Section -->

<section class="dashboard-sec common-padding">
    <div class="container">
        <!-- volunteer part -->
        <?php echo get_template_part('template-parts/members/volunteer'); ?>

        <div class="dashboard-main-wrap d-flex justify-content-between">
           <!-- Member menu side bar -->
            <?php echo get_sidebar('membermenu'); ?>
          <!-- Member menu side bar -->
            <div class="dashboard-desc">
                <div class="dashboard-desc-main student-dashboard">

                    <div class="student-dashboard-info">
                        <div class="board-title">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="scholarship-amount-info scholarship-main">
                            <div class="welcome-title">
                                <?php echo the_content(); ?>
                                <h5>Hello, <?php echo $user_name; ?> !</h5>
                                <p>We are thrilled to have you as part of our community. Here's what you can do from your dashboard:</p>
                            </div>
                            <div class="row amount-info-row">
                                <div class="col-lg-6">
                                    <div class="scholarship-amount-item d-flex align-items-center">
                                        <div class="amount-box-top d-flex align-items-center">
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/amount-icon.svg" alt="">
                                            </div>
                                            <div class="icon-desc">
                                                <h4>Modify Project</h4>
                                            </div>
                                        </div>
                                        <div class="roght-btn-info">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="scholarship-amount-item d-flex align-items-center">
                                        <div class="amount-box-top d-flex align-items-center">
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/approve-icon.svg" alt="">
                                            </div>
                                            <div class="icon-desc">
                                                <h4>Approve Payment Request</h4>
                                            </div>
                                        </div>
                                        <div class="roght-btn-info">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.svg" alt=""></a>
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