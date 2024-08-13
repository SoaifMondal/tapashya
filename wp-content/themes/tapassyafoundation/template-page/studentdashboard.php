<?php
// Template Name:Layout:Student Dashboard
 $user_id=$_SESSION['loginid'];
$home_url=site_url();
 if(empty($user_id)){
    wp_redirect($home_url);
 }
get_header();
get_template_part('template-parts/student/studentbanner');
$first_name=get_user_meta( $user_id,'first_name',true);
$last_name=get_user_meta( $user_id,'last_name', true );
$stu_dob=get_user_meta( $user_id ,'stu_dob',true);
$timestamp = strtotime($stu_dob);
$formatted_date = wp_date(' j, F Y', $timestamp);
$stu_age=get_user_meta( $user_id ,'stu_age',true);
$current_user = wp_get_current_user();
$user_email = $current_user->user_email;
$stu_phone=get_user_meta( $user_id ,'stu_phone',true);
$stu_address=get_user_meta( $user_id ,'stu_address',true);
$stu_father_name=get_user_meta( $user_id ,'stu_father_name',true);
$stu_father_name=get_user_meta( $user_id ,'stu_father_contact',true);
$stu_mother_name=get_user_meta( $user_id ,'stu_mother_name',true);
$stu_mother_contact=get_user_meta( $user_id ,'stu_mother_contact',true);
$stu_father_occupa=get_user_meta( $user_id ,'stu_father_occupa',true);
$stu_father_income=get_user_meta( $user_id ,'stu_father_income',true);
$stu_mother_occupa=get_user_meta( $user_id ,'stu_mother_occupa',true);
$stu_mother_income=get_user_meta( $user_id ,'stu_mother_income',true);
$stu_other_parent=get_user_meta( $user_id ,'stu_other_parent',true);
$stu_otherparent_contact=get_user_meta( $user_id ,'stu_otherparent_contact',true);
$stu_otherparent_relation=get_user_meta( $user_id ,'stu_otherparent_relation',true);
$stu_otherparent_income=get_user_meta( $user_id ,'stu_otherparent_income',true);
$stu_otherparent_address=get_user_meta( $user_id ,'stu_otherparent_address',true);
$challengeFacing=get_user_meta( $user_id ,'challengeFacing',true);
$image_id=get_user_meta($user_id, 'sk_user_avatar', true);
$imge_profile=wp_get_attachment_image_url( $image_id, '' ); //use default image size
?>
<section class="dashboard-sec common-padding">
    <div class="container">
        <div class="volunteer-div d-flex align-items-center justify-content-between">
            <div class="left-text">
                <h4>Do you want to become a volunteer?</h4>
            </div>
            <div class="right-text">
                <a class="btn" href="#">Become a Volunteer </a>
            </div>
        </div>        
        <div class="dashboard-main-wrap d-flex justify-content-between">
        <!-- student sidebar -->
         <?php echo get_template_part('template-parts/student/studentsidebar'); ?>
            <div class="dashboard-desc">
                <div class="dashboard-desc-main student-dashboard">
                    <div class="student-dashboard-info">
                        <div class="board-title">
                            <h3>Dashboard</h3>                    
                        </div>
                        <div class="dashboard-home-desc">
                            <div class="welcome-title">
                                <h2>Welcome to Nabadiganta Tapassya Foundation!</h2>
                                <h5>Hello, <?php echo $first_name;?> <?php echo $last_name;?>!</h5>
                                <p>We are thrilled to have you as part of our community. Here's what you can do from your dashboard:</p>
                            </div>
                        </div>
                    </div>
                    <div class="student-dashboard-info">
                        <div class="board-title">
                            <h3>Biography</h3>                    
                        </div>
                        <div class="dashboard-home-desc">
                            <div class="welcome-title">
                                <h2>Welcome to Nabadiganta Tapassya Foundation!</h2>
                                <h5>Hello, <?php echo $first_name;?> <?php echo $last_name;?>!</h5>
                                <p>We are thrilled to have you as part of our community. Here's what you can do from your dashboard:</p>
                            </div>
                            <div class="student-profile-wrap d-flex align-items-center justify-content-between">
                                <div class="profile-img-info d-flex align-items-center">
                                    <?php
                                    if(empty($imge_profile)){
                                        $imge_profile=get_template_directory_uri()."/assets/images/profile-img.jpg";
                                    }
                                    ?>
                                    <div class="img">
                                        <img src="<?php echo $imge_profile; ?>" alt="">
                                    </div>
                                    <div class="img-desc">
                                        <p>Name</p>
                                        <h6>Anima Khamari</h6>
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
                                     <?php if(empty($stu_other_parent)){
                                          $stu_other_parent="---";
                                     } ?> 
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Guardian's Name other than Parents</p>
                                            <h6><?php echo $stu_other_parent; ?></h6>
                                        </div>
                                    </div>
                                    <?php 
                                      if(empty($stu_otherparent_contact)){
                                        $stu_otherparent_contact="---";
                                      }
                                    ?>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Guardian's Contact</p>
                                            <h6><?php echo $stu_otherparent_contact; ?></h6>
                                        </div>
                                    </div> 
                                    <?php 
                                      if(empty($stu_otherparent_relation)){
                                        $stu_otherparent_relation="---";
                                      }
                                    ?> 
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Relation with Student </p>
                                            <h6><?php echo $stu_otherparent_relation; ?></h6>
                                        </div>
                                    </div>
                                    <?php 
                                      if(empty($stu_otherparent_income)){
                                        $stu_otherparent_income="---";
                                      }
                                    ?> 
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Monthly Income</p>
                                            <h6><?php echo $stu_otherparent_income; ?></h6>
                                        </div>
                                    </div> 
                                    <?php 
                                      if(empty($stu_otherparent_address)){
                                        $stu_otherparent_address="---";
                                      }
                                    ?>                                  
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="profile-info">
                                            <p>Address</p>
                                            <h6><?php echo $stu_otherparent_address;?></h6>
                                        </div>
                                    </div>
                                    <?php 
                                      if(empty($challengeFacing)){
                                        $challengeFacing="---";
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
                    <div class="student-dashboard-info">
                        <div class="board-title">
                            <h3>Education</h3>                    
                        </div>
                        <div class="dashboard-home-desc table-dashboard-home-desc">
                            <div class="welcome-title">
                                <div class="dashboard-donation-details d-flex align-items-center justify-content-between">
                                    <div class="left-title">
                                        <p>Your Education Details</p>
                                    </div>
                                    <div class="right-btn">
                                        <a class="btn" href="<?php echo get_permalink(2354);;?>">Update Education</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-home-details">
                                <div class="table-responsive">
                                    <table id="example" class="display member-dashboard nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>std</th>
                                                <th>Status</th>
                                                <th>Mark</th>
                                                <th>Percetage</th>
                                                <th>Year of Passing</th>
                                                <th>Subject</th>
                                                <th>Institute Name</th>
                                                <th>Board/Univ Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php 
                                            //  ========================Class 10 Details===================================
                                                $std_secondary_status=get_user_meta( $user_id ,'std_secondary_status',true);
                                                $std_secondary_marks=get_user_meta( $user_id ,'std_secondary_marks',true);
                                                $std_secondary_parcent=get_user_meta( $user_id ,'std_secondary_parcent',true);
                                                $std_secondary_passyear=get_user_meta( $user_id ,'std_secondary_passyear',true);
                                                $std_secondary_subject=get_user_meta( $user_id ,'std_secondary_subject',true);
                                                $std_secondary_insti=get_user_meta( $user_id ,'std_secondary_insti',true);
                                                $std_secondary_boardname=get_user_meta( $user_id ,'std_secondary_boardname',true);
                                             ?>
                                            <?php if(!empty($std_secondary_status)||!empty($std_secondary_marks)||!empty($std_secondary_parcent)||!empty($std_secondary_passyear)||!empty($std_secondary_subject)||!empty($std_secondary_insti)||!empty($std_secondary_boardname)){ ?>
                                            <tr>
                                                <td>10</td>
                                                <td><?php echo $std_secondary_status;?></td>
                                                <td><?php echo $std_secondary_marks; ?></td>
                                                <td><?php echo $std_secondary_parcent;?></td>
                                                <td><?php echo $std_secondary_passyear; ?></td>
                                                <td><?php echo $std_secondary_subject; ?></td>
                                                <td><?php echo $std_secondary_insti; ?></td>
                                                <td><?php echo $std_secondary_boardname ?></td>
                                            </tr>
                                             <?php } ?>
                                             <?php 
                                            //  ========================Class 12 Details=================
                                                $std_hs_status=get_user_meta( $user_id ,'std_hs_status',true);
                                                $std_hs_marks=get_user_meta( $user_id ,'std_hs_marks',true);
                                                $std_hs_parcent=get_user_meta( $user_id ,'std_hs_parcent',true);
                                                $std_hs_passyear=get_user_meta( $user_id ,'std_hs_passyear',true);
                                                $std_hs_subject=get_user_meta( $user_id ,'std_hs_subject',true);
                                                $std_hs_insti=get_user_meta( $user_id ,'std_hs_insti',true);
                                                $std_hs_boardname=get_user_meta( $user_id ,'std_hs_boardname',true);
                                             ?>
                                            <?php if(!empty($std_hs_status)||!empty($std_hs_marks)||!empty($std_hs_parcent)||!empty($std_hs_passyear)||!empty($std_hs_subject)||!empty($std_hs_insti)||!empty($std_hs_boardname)){ ?>
                                            <tr>
                                                <td>12</td>
                                                <td><?php echo $std_hs_status;?></td>
                                                <td><?php echo $std_hs_marks; ?></td>
                                                <td><?php echo $std_hs_parcent;?></td>
                                                <td><?php echo $std_hs_passyear; ?></td>
                                                <td><?php echo $std_hs_subject; ?></td>
                                                <td><?php echo $std_hs_insti; ?></td>
                                                <td><?php echo $std_hs_boardname ?></td>
                                            </tr>
                                             <?php } ?>

                                             <?php 
                                            //  ========================Class Diploma Details=================
                                                $std_iti_status=get_user_meta( $user_id ,'std_iti_status',true);
                                                $std_iti_marks=get_user_meta( $user_id ,'std_iti_marks',true);
                                                $std_iti_parcent=get_user_meta( $user_id ,'std_iti_parcent',true);
                                                $std_iti_passyear=get_user_meta( $user_id ,'std_iti_passyear',true);
                                                $std_iti_subject=get_user_meta( $user_id ,'std_iti_subject',true);
                                                $std_iti_insti=get_user_meta( $user_id ,'std_iti_insti',true);
                                                $std_iti_boardname=get_user_meta( $user_id ,'std_iti_boardname',true);
                                             ?>
                                            <?php if(!empty($std_hs_status)||!empty($std_hs_marks)||!empty($std_hs_parcent)||!empty($std_hs_passyear)||!empty($std_hs_subject)||!empty($std_hs_insti)||!empty($std_hs_boardname)){ ?>
                                            <tr>
                                                <td>Diploma</td>
                                                <td><?php echo $std_iti_status;?></td>
                                                <td><?php echo $std_iti_marks; ?></td>
                                                <td><?php echo $std_iti_parcent;?></td>
                                                <td><?php echo $std_iti_passyear; ?></td>
                                                <td><?php echo $std_iti_subject; ?></td>
                                                <td><?php echo $std_iti_insti; ?></td>
                                                <td><?php echo $std_iti_boardname ?></td>
                                            </tr>
                                             <?php } ?>

                                             <?php 
                                            //  ========================Class graduation Details=================
                                                $std_graduation_status=get_user_meta( $user_id ,'std_graduation_status',true);
                                                $std_graduation_marks=get_user_meta( $user_id ,'std_graduation_marks',true);
                                                $std_graduation_parcent=get_user_meta( $user_id ,'std_graduation_parcent',true);
                                                $std_graduation_passyear=get_user_meta( $user_id ,'std_graduation_passyear',true);
                                                $std_graduation_subject=get_user_meta( $user_id ,'std_graduation_subject',true);
                                                $std_graduation_insti=get_user_meta( $user_id ,'std_graduation_insti',true);
                                                $std_graduation_boardname=get_user_meta( $user_id ,'std_graduation_boardname',true);
                                             ?>
                                            <?php if(!empty($std_graduation_status)||!empty($std_graduation_marks)||!empty($std_graduation_parcent)||!empty($std_graduation_passyear)||!empty($std_graduation_subject)||!empty($std_graduation_insti)||!empty($std_graduation_boardname)){ ?>
                                            <tr>
                                                <td>Graduation</td>
                                                <td><?php echo $std_graduation_status;?></td>
                                                <td><?php echo $std_graduation_marks; ?></td>
                                                <td><?php echo $std_graduation_parcent;?></td>
                                                <td><?php echo $std_graduation_passyear; ?></td>
                                                <td><?php echo $std_graduation_subject; ?></td>
                                                <td><?php echo $std_graduation_insti; ?></td>
                                                <td><?php echo $std_graduation_boardname ?></td>
                                            </tr>
                                             <?php } ?>

                                               <?php 
                                            //  ========================Class Masters Details=================
                                                $std_master_status=get_user_meta( $user_id ,'std_master_status',true);
                                                $std_master_marks=get_user_meta( $user_id ,'std_master_marks',true);
                                                $std_master_parcent=get_user_meta( $user_id ,'std_master_parcent',true);
                                                $std_master_passyear=get_user_meta( $user_id ,'std_master_passyear',true);
                                                $std_master_subject=get_user_meta( $user_id ,'std_master_subject',true);
                                                $std_master_insti=get_user_meta( $user_id ,'std_master_insti',true);
                                                $std_master_boardname=get_user_meta( $user_id ,'std_master_boardname',true);
                                             ?>
                                            <?php if(!empty($std_master_status)||!empty($std_master_marks)||!empty($std_master_parcent)||!empty($std_master_passyear)||!empty($std_master_subject)||!empty($std_master_insti)||!empty($ $std_master_boardname)){ ?>
                                            <tr>
                                                <td>Masters</td>
                                                <td><?php echo $std_graduation_status;?></td>
                                                <td><?php echo $std_graduation_marks; ?></td>
                                                <td><?php echo $std_graduation_parcent;?></td>
                                                <td><?php echo $std_graduation_passyear; ?></td>
                                                <td><?php echo $std_graduation_subject; ?></td>
                                                <td><?php echo $std_graduation_insti; ?></td>
                                                <td><?php echo $std_graduation_boardname ?></td>
                                            </tr>
                                             <?php } ?>
                                                                                                                                               
                                        </tbody>
                                    </table>
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