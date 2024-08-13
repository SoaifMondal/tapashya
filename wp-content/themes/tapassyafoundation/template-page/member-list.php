<?php
//Template name:Member List
get_header();
?>

<!-- Banner Section -->
<?php echo get_template_part('template-parts/members/memberbanner') ?>
<!-- Banner Section -->


<section class="dashboard-sec common-padding">
    <div class="container">

        <!-- volunteer Banner Section -->
        <?php echo get_template_part('template-parts/members/volunteer') ?>
        <!-- volunteer Banner Section -->

        <div class="dashboard-main-wrap d-flex justify-content-between">

            <!-- Sidebar Dashboard Menu -->
            <?php echo get_template_part('sidebar-membermenu') ?>

            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <h3>Member's List</h3>                    
                    </div>
                    <div class="dashboard-home-desc table-dashboard-home-desc">                  
                        <div class="dashboard-home-details">
                            <div class="table-responsive">
                                <table id="example" class="display member-dashboard nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Interest Project Area</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $args = array(
                                                'role'    => 'member', 
                                                'orderby' => 'display_name', 
                                                'order'   => 'ASC',
                                                'number'  => -1, // Number of users per page
                                                'offset'  => 0,
                                            );

                                            // Create the WP_User_Query object
                                            $user_query = new WP_User_Query($args);

                                            // Get the results
                                            $users = $user_query->get_results();

                                            if (!empty($users)) {
                                                foreach ($users as $user) {
                                                    // Get user meta data
                                                    $user_id = $user->ID;
                                                    $user_info = get_userdata($user_id);
                                                    $user_meta = get_user_meta($user_id);
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $user_info->display_name ?></td>
                                                        <td><?php echo $user_info->user_email ?></td>
                                                        <td><?php echo $user_meta['address'][0] ?></td>
                                                        <td><?php echo $user_meta['phone_number'][0] ?></td>
                                                        <td><?php echo $user_meta['involve_social_project'][0] ?></td>
                                                    </tr>
                                                <?php 
                                                }
                                            }
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