<?php
//template name: My Profile
get_header();

$current_user = wp_get_current_user();

$user_name = $current_user->display_name;
$user_email = $current_user->user_email;

$user_id = $current_user->ID;
$phone_number = get_user_meta($user_id, 'phone_number', true);
$address = get_user_meta($user_id, 'address', true);
$reg_type = get_user_meta($user_id, 'relationship_status', true);
$reference_member_name = get_user_meta($user_id, 'reference_member_name', true);
$why_want_to_join = get_user_meta($user_id, 'why_want_to_join', true);
$adhaar_number = get_user_meta($user_id, 'adhaar_number', true);
$pan_number = get_user_meta($user_id, 'pan_number', true);
$tapssya_whatsapp_group_no = get_user_meta($user_id, 'tapssya_whatsapp_group_no', true);
$contribution_type = get_user_meta($user_id, 'contribution_type', true);
$annual_contribution_amount = get_user_meta($user_id, 'annual_contribution_amount', true);
$involve_social_project = get_user_meta($user_id, 'involve_social_project', true);

$user_roles = $current_user->roles;
$is_member = in_array('member', $user_roles);
$is_gb_member = in_array('gbmem', $user_roles);
?>
<!-- Member Banner Section -->
<?php echo get_template_part('template-parts/members/memberbanner'); ?>

<section class="dashboard-sec common-padding">
    <div class="container">

        <!-- volunteer part -->
        <?php echo get_template_part('template-parts/members/volunteer'); ?>

        <div class="dashboard-main-wrap d-flex justify-content-between">
            <!-- Member menu side bar -->
            <?php echo get_sidebar('membermenu'); ?>

            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <?php if ($is_member) { ?>
                            <h3>Member Profile</h3>
                        <?php } elseif ($is_gb_member) { ?>
                            <h3>GB Member Profile</h3>
                        <?php } ?>
                    </div>
                    <div class="dashboard-home-desc">
                        <div class="welcome-title">
                            <div class="dashboard-donation-details d-flex align-items-center justify-content-between">
                                <div class="left-title">
                                    <p>Profile Details</p>
                                </div>
                                <div class="right-btn">
                                    <a class="btn" href="#">Raise Request</a>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-home-details">
                            <div class="my-profile-deatils">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Name*</p>
                                            <h6><?php echo $user_name; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Email Address*</p>
                                            <h6><?php echo $user_email; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Phone Number*</p>
                                            <h6><?php echo $phone_number; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Address*</p>
                                            <h6><?php echo $address; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Register Type*</p>
                                            <h6><?php echo $reg_type;  ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Tapassya Reference Members Name*</p>
                                            <h6><?php echo $reference_member_name; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="profile-info">
                                            <p>Why you want to join Tapassya?*</p>
                                            <h6><?php echo $why_want_to_join; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Adhaar Number*</p>
                                            <h6><?php echo $adhaar_number; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>PAN Number*</p>
                                            <h6><?php echo $pan_number; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Your Tapassya WA group number*</p>
                                            <h6><?php echo $tapssya_whatsapp_group_no; ?></h6>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12">
                                        <div class="profile-info">
                                            <p>Relationship Status with Nabadiganta Tapassya Foundation : "We need you as a member to serve the community"*</p>
                                            <h6>Member & Volunteer : Participation & Financial commitment (Min: 6000, Desirable: 15000 Yearly - Mainly used for General Opex)</h6>
                                        </div>
                                    </div> -->
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>How You Want to Contribute*</p>
                                            <h6><?php echo $contribution_type; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="profile-info">
                                            <p>Annual Contribution Amount (INR)*</p>
                                            <h6><?php echo $annual_contribution_amount; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="profile-info">
                                            <p>Get involved in any of the Social Projects (Not related with financial contribution)*</p>
                                            <h6><?php echo $involve_social_project; ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="edit-profile">
                                            <a class="btn" href="<?php echo site_url('/edit-profile'); ?>">Edit Profile</a>
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