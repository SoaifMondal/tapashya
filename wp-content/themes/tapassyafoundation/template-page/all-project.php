<?php 
//Template Name: all project
get_header(); ?>
<section class="dashboard-banner">
    <div class="dashboard-wrapper position-relative">
        <div class="dashboard-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-img-big.png" alt="">
        </div>
        <div class="container dashboard-content-container">
            <div class="dashboard-content text-center text-white">
                <h1>My Account</h1>
            </div>                    
        </div>
    </div>
</section>

<section class="dashboard-sec common-padding">
    <div class="container">
        <div class="volunteer-div d-flex align-items-center justify-content-between">
            <div class="left-text">
                <h4>Do you want to become a volunteer?</h4>
            </div>
            <div class="right-text">
                <a class="btn" href="#">Become a Volunteer</a>
            </div>
        </div>        
        <div class="dashboard-main-wrap d-flex justify-content-between">
           <?php get_sidebar('membermenu'); ?>
            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <h3>All Project</h3>                    
                    </div>
                    
                    <?php
                    $user_id = get_current_user_id();
                    
                    // if ( $user_id != 0 ) {
                    //     $user_info = get_userdata( $user_id );
                    //     echo 'User ID: ' . $user_info->ID . '<br>';
                    //     echo 'Username: ' . $user_info->user_login . '<br>';
                    //     echo 'Email: ' . $user_info->user_email . '<br>';
                    //     echo 'Display Name: ' . $user_info->display_name . '<br>';
                    // } else {
                    //     echo 'No user is logged in.';
                    // }
                    ?>
                    
                  
                    <div class="dashboard-home-desc table-dashboard-home-desc">                  
                        <div class="dashboard-home-details">
                            <div class="table-responsive">
                            <table id="example" class="display member-dashboard nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Project Id</th>
                                        <th>Name of project</th>
                                        <th>Purpose</th>
                                        <th>Description</th>
                                        <th>Project ShortCode</th>
                                        <th>Beneficiary Type</th>
                                        <th>Details Of Beneficiary</th>
                                        <th>Status</th>
                                         <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $args = array(
                                        'post_type' => 'project',
                                        'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash'),
                                        'posts_per_page' => -1,
                                        'author' => $user_id
                                    );
                                    $projects = new WP_Query($args);
                                    if ($projects->have_posts()) :
                                        while ($projects->have_posts()) : $projects->the_post();
                                         echo   $project_id = get_the_ID();
                                           echo $pId = get_post_meta($project_id, 'project_id', true);
                                            $project_name = get_the_title();
                                            $purpose = get_the_excerpt();
                                            $short_description = get_post_meta($project_id, 'short_description', true);
                                            $short_code = get_post_meta($project_id, 'short_code', true);
                                            $beneficiary_type = get_post_meta($project_id, 'beneficiary_type', true);
                                            $beneficiaries_details = get_post_meta($project_id, 'beneficiaries_details', true);
                                            $status = get_post_status($project_id );
                                            ?>
                                            <tr>
                                                <td><?php echo $pId; ?></td>
                                                <td><?php echo esc_html($project_name); ?></td>
                                                <td><?php echo esc_html($pId); ?></td>
                                                <td><?php echo esc_html($short_description); ?></td>
                                                <td><?php echo esc_html($short_code); ?></td>
                                                <td><?php echo esc_html($beneficiary_type); ?></td>
                                                <td><?php echo esc_html($beneficiaries_details); ?></td>
                                                <td><span class="approval-text <?php echo strtolower(esc_attr($status)); ?>"><?php echo esc_html($status); ?></span></td>
                                                <td>
                                                <span class="action-details">
                                                    <span class="view-icon action-details-icon"><a href="<?php echo site_url('/project-details?id=' . get_the_ID()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eye-icon.svg" alt=""></a></span>
                                                    <span class="detail-icon action-details-icon"><a href="<?php echo site_url('/update-project?id=' . get_the_ID()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/edite-icon.svg" alt=""></a></span>
                                                    <span class="delete-icon action-details-icon">
                                                        <a href="#" class= "dlt" data-attribute = "<?php echo get_the_ID() ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/delete-icon.svg" alt=""></a>
                                                    </span>
                                                </span>
                                                </td>
                                            </tr>
                                            <?php
                                        endwhile;
                                    else :
                                        ?>
                                        <tr>
                                            <td colspan="8">No projects found.</td>
                                        </tr>
                                        <?php
                                    endif;
                                    wp_reset_postdata(); 
                                    ?>
                                </tbody>
                            </table>

                            </div>
    
                        </div>
    
                    </div>                    
                </div>
            </div>

        </div>

    </div>
</section>
<?php get_footer(); ?>