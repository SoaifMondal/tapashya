<?php
//Template name: Benificiary member dashboard
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
            <!-- Benificiary Member menu side bar -->
            <?php echo get_sidebar('benificiarymenu'); ?>
            <!-- Benificiary Member menu side bar -->

            <div class="dashboard-desc">
                <div class="dashboard-desc-main student-dashboard">

                    <div class="student-dashboard-info">

                        <div class="dashboard-home-desc">
                            <div class="welcome-title">
                                <h2>Welcome to Nabadiganta Tapassya Foundation!</h2>
                                <h5>Hello, <?php echo $first_name; ?> <?php echo $last_name; ?>!</h5>
                                <p>We are thrilled to have you as part of our community. Here's what you can do from your dashboard:</p>

                            </div>
                            <div class="student-profile-wrap d-flex align-items-center justify-content-between">
                                <div class="profile-img-info d-flex align-items-center">
                                    <?php
                                    if (empty($imge_profile)) {
                                        $imge_profile = get_template_directory_uri() . "/assets/images/profile-img.jpg";
                                    }
                                    ?>
                                    <div class="img">
                                        <img src="<?php echo $imge_profile; ?>" alt="">
                                    </div>
                                    <div class="img-desc">
                                        <p>Name</p>
                                        <h6><?php echo $user_name; ?></h6>
                                    </div>
                                </div>
                                <div class="right-btn">
                                    <a class="btn" href="<?php the_permalink(2427); ?>">Update Biography</a>
                                </div>
                            </div>
                            <div class="my-profile-deatils border-0">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>DOB*</p>
                                            <h6><?php echo $formatted_date; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Age*</p>
                                            <h6><?php echo $stu_age; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Email Address*</p>
                                            <h6><?php echo $user_email; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Phone Number*</p>
                                            <h6><?php echo $stu_phone; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Address*</p>
                                            <h6><?php echo $stu_address; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Father's Name*</p>
                                            <h6><?php echo $stu_father_name; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Father's Contact Number*</p>
                                            <h6><?php echo $stu_father_name; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Mother's Name*</p>
                                            <h6><?php echo $stu_mother_name; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Mother's Contact Number*</p>
                                            <h6><?php echo $stu_mother_contact; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Father's Occupation*</p>
                                            <h6><?php echo $stu_father_occupa; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Father's Income*</p>
                                            <h6><?php echo $stu_father_income; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Mother's Occupation*</p>
                                            <h6><?php echo $stu_mother_occupa; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Mother's Income*</p>
                                            <h6><?php echo $stu_mother_income; ?></h6>
                                        </div>
                                    </div>
                                    <?php if (empty($stu_other_parent)) {
                                        $stu_other_parent = "---";
                                    } ?>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Guardian's Name other than Parents</p>
                                            <h6><?php echo $stu_other_parent; ?></h6>
                                        </div>
                                    </div>
                                    <?php
                                    if (empty($stu_otherparent_contact)) {
                                        $stu_otherparent_contact = "---";
                                    }
                                    ?>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Guardian's Contact</p>
                                            <h6><?php echo $stu_otherparent_contact; ?></h6>
                                        </div>
                                    </div>
                                    <?php
                                    if (empty($stu_otherparent_relation)) {
                                        $stu_otherparent_relation = "---";
                                    }
                                    ?>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Relation with Student </p>
                                            <h6><?php echo $stu_otherparent_relation; ?></h6>
                                        </div>
                                    </div>
                                    <?php
                                    if (empty($stu_otherparent_income)) {
                                        $stu_otherparent_income = "---";
                                    }
                                    ?>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Monthly Income</p>
                                            <h6><?php echo $stu_otherparent_income; ?></h6>
                                        </div>
                                    </div>
                                    <?php
                                    if (empty($stu_otherparent_address)) {
                                        $stu_otherparent_address = "---";
                                    }
                                    ?>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Address</p>
                                            <h6><?php echo $stu_otherparent_address; ?></h6>
                                        </div>
                                    </div>
                                    <?php
                                    if (empty($challengeFacing)) {
                                        $challengeFacing = "---";
                                    }
                                    ?>
                                    <div class="col-lg-12">
                                        <div class="profile-info">
                                            <p>What Challanges you are facing for pursuing higher Studies</p>
                                            <h6><?php echo $challengeFacing; ?></h6>
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