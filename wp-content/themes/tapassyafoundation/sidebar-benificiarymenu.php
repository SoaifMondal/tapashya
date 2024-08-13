<?php
$page_id = get_queried_object_id();

$current_user = wp_get_current_user();
$id = $current_user->ID;
$user_email = $current_user->user_email;
// $user_name = $current_user->user_login;
$user_name = $current_user->display_name;

// Check user role
$user_roles = $current_user->roles;
// echo '<pre>';
// print_r($user_roles);
// echo '</pre>';
$is_member = in_array('member', $user_roles);
$is_gb_member = in_array('gbmem', $user_roles);

$image = get_user_meta($id, 'profile_image', true);
$image_url = wp_get_attachment_url($image);
?>
<div class="side-bar-header">
    <div class="user-name-info position-relative">
        <div class="name-info toggle-on">
            <a class="side-bar-profile-desc" href="javascript:void(0);">
                <?php if (!empty($image_url)) { ?>
                    <div class="profile-img"> <img src="<?php echo $image_url; ?>" alt="tapassya-profile-img"></div>
                <?php } ?>
                <div class="profile-name-desc">
                    <h4 id="full-name"><?php echo $user_name; ?></h4>
                    <p><?php echo $user_email; ?></p>
                </div>
            </a>
        </div>
        <div class="name-info toggle-off">
            <a href="javascript:void(0);">
                <h4 id="initials"></h4>
            </a>
        </div>
        <div id="toggle-arrow-add" class="toggle-arrow">
            <a href="javascript:void(0)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-toggle-arrow.svg" alt="">
            </a>
        </div>
    </div>
    <div class="side-bar-btm">
        <div class="center-menu">
            <ul class="list-unstyled p-0 m-0">
                <li <?php if ($page_id == 2573) echo 'class="active"'; ?>><a href="<?php echo esc_url(site_url('/benificiary-member-dashboard')); ?>"><span class="menu-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-icon.svg" alt=""></span><span class="menu-text">Benificiary Member Dashboard</span></a></li>
                <li <?php if ($page_id == 2365) echo 'class="active"'; ?>><a href="<?php echo esc_url(site_url('/#')); ?>"><span class="menu-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/beneficiary-icon.svg" alt=""></span><span class="menu-text">Payment Request & Recieved List</span></a></li>
                <li <?php if ($page_id == 2365) echo 'class="active"'; ?>><a href="<?php echo esc_url(site_url('/#')); ?>"><span class="menu-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/summery-icon.svg" alt=""></span><span class="menu-text">Confirm Payment Recieved</span></a></li>
                <li <?php if ($page_id == 2371) echo 'class="active"'; ?>><a href="<?php echo esc_url(site_url('/#')); ?>"><span class="menu-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/raise-icon.svg" alt=""></span><span class="menu-text">Raise Payment Requests</span></a></li>
            </ul>
        </div>
        <div class="log-out-btn">
            <ul class="list-unstyled p-0 m-0">
                <li><a href="<?= wp_logout_url(home_url()); ?>"><span class="log-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/log-out-icon.svg" alt=""></span><span class="log-text">Log Out</span></a></li>
            </ul>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fullNameElement = document.getElementById('full-name');
        const initialsElement = document.getElementById('initials');
        const toggleButton = document.getElementById('toggle-arrow-add');

        // Function to get initials from the full name
        function getInitials(name) {
            const nameParts = name.split(' ');
            if (nameParts.length < 2) {
                return nameParts[0].charAt(0).toUpperCase();
            }
            return nameParts[0].charAt(0).toUpperCase() + nameParts[1].charAt(0).toUpperCase();
        }

        // Set initials on page load
        initialsElement.innerText = getInitials(fullNameElement.innerText);

        // Toggle display on button click
        toggleButton.addEventListener('click', function() {
            const toggleOn = document.querySelector('.name-info.toggle-on');
            const toggleOff = document.querySelector('.name-info.toggle-off');

            if (toggleOn.style.display === 'none') {
                toggleOn.style.display = 'block';
                toggleOff.style.display = 'none';
            } else {
                toggleOn.style.display = 'none';
                toggleOff.style.display = 'block';
            }
        });
    });
</script>