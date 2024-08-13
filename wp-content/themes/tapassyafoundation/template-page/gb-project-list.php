<?php 
//Template Name: gb project list
get_header(); ?>


<section class="dashboard-banner">
    <div class="dashboard-wrapper position-relative">
        <div class="dashboard-img">
            <img src="images/line-img-big.png" alt="">
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
                        <h3>Projects</h3>                    
                    </div>
                    <div class="dashboard-home-desc table-dashboard-home-desc">
                        <div class="dashboard-home-details">
                            <div class="table-responsive">
                            <?php
                            // Fetch all projects in descending order
                            $args = array(
                            'post_type'      => 'project',
                            'posts_per_page' => -1,          
                            'orderby'        => 'date',      
                            'order'          => 'DESC'       
                            );

                            $query = new WP_Query($args);
                            ?>

                            <table id="example" class="display member-dashboard nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>Request No.</th>
                                <th>Name</th>
                                <th>Source</th>
                                <th>Project</th>
                                <th>Request Amount</th>
                                <th>Request Date</th>
                                <th>Beneficiary Name</th>
                                <th>Approved Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            // Loop through each project
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    $request_no = get_post_meta(get_the_ID(), 'request_no', true);
                                    $name = get_post_meta(get_the_ID(), 'name', true);
                                    $source = get_post_meta(get_the_ID(), 'source', true);
                                    $project = get_the_title(); 
                                    $request_amount = get_post_meta(get_the_ID(), 'request_amount', true);
                                    $request_date = get_post_meta(get_the_ID(), 'request_date', true);
                                    $beneficiary_name = get_post_meta(get_the_ID(), 'beneficiary_name', true);
                                    $approved_date = get_post_meta(get_the_ID(), 'approved_date', true);
                                    $status = get_post_status(get_the_ID()); // e.g., 'Pending', 'Approved', 'Rejected'
                                    ?>

                                    <tr>
                                        <td><?php echo esc_html($request_no); ?></td>
                                        <td><?php echo esc_html($name); ?></td>
                                        <td><?php echo esc_html($source); ?></td>
                                        <td><?php echo esc_html($project); ?></td>
                                        <td><?php echo esc_html($request_amount); ?></td>
                                        <td><?php echo esc_html($request_date); ?></td>
                                        <td><?php echo esc_html($beneficiary_name); ?></td>
                                        <td><?php echo esc_html($approved_date); ?></td>
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
                                }
                            } else {
                                echo '<tr><td colspan="10">No projects found.</td></tr>';
                            }

                            // Reset post data
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
<script>
        jQuery(document).ready(function($) {
            $(".dlt").click(function() {
                var valdl = $(this).data('attribute');
                var clickedElement = this; 
                Swal.fire({
                title: "Are you sure?",
                text: "But you will still be able to retrieve this file.",
                icon: "warning", 
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, archive it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
                }).then((result) => {
                if (result.isConfirmed) {
                
                        jQuery.ajax({
                                url: ajaxurl,
                                type: 'POST',
                                data: { 
                                    action : 'project_delete',
                                    delval : valdl 
                                },
                                success: function(response) {
                                    Swal.fire({
                                                title: "success!",
                                                text:  "Delete successfully!",
                                                icon:  "success"
                                                }).then((result) => {
                                                if (result.isConfirmed) {
                                                    $(clickedElement).closest('tr').fadeOut(500, function() {
                                                        $(this).remove(); 
                                                    });
                                                }
                                            });
                                },
                                error: function(error) {
                                    Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                text: response.data || 'An unknown error occurred. Please try again.'
                                            });
                                        }
                            });

                    }
                });
            });
        });
</script>


<?php get_footer(); ?>