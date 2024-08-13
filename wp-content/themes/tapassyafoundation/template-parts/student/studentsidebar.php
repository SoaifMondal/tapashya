<?php 
 $user_id=$_SESSION['loginid'];
 $first_name=get_user_meta( $user_id,'first_name',true);
 $last_name=get_user_meta( $user_id,'last_name', true );
 $current_user = wp_get_current_user();
 $user_email = $current_user->user_email;
 $first_letter_name = strtoupper(substr($first_name, 0, 1));
 $first_letter_title = strtoupper(substr($last_name, 0, 1));
$pageid= get_the_ID();
 ?>
<div class="side-bar-header">
                <div class="user-name-info position-relative">
                    <div class="name-info toggle-on">                        
                        <h4> <?php echo $first_name;?> <?php echo $last_name;?></h4>
                        <p><?php echo $user_email; ?></p>
                    </div>
                    <div class="name-info toggle-off">                        
                        <h4><?php echo $first_letter_name; echo $first_letter_title; ?></h4>
                    </div>                    
                    <div id="toggle-arrow-add" class="toggle-arrow">
                        <a href="javascript:void(0)">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-toggle-arrow.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="side-bar-btm">
                    <div class="center-menu">
                        <ul class="list-unstyled p-0 m-0 ">
                            <li><a class="<?php echo ($pageid == 111) ? 'active' : ''; ?>" href="<?php the_permalink(111); ?>"><span class="menu-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dashboard-icon.svg" alt=""></span><span class="menu-text">Student Dashboard</span></a></li>                    
                            <li><a class="<?php echo ($pageid == 2424) ? 'active' : ''; ?>" href="<?php the_permalink(2424) ?>"><span class="menu-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/raise-icon.svg" alt=""></span><span class="menu-text">Raise Payment Requests</span></a></li>               
                        </ul>
                    </div>
                    <div class="log-out-btn">   
                        <ul class="list-unstyled p-0 m-0">
                            <li><a href="#"><span class="log-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/log-out-icon.svg" alt=""></span><span class="log-text">Log Out</span></a></li>
                        </ul>             
                    </div>
                </div>
         </div>