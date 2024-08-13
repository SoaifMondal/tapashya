<?php 
//Template Name: Project Details
get_header(); 


?>


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
<?php $project_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($project_id) {
     $project = get_post($project_id);
    print_r($project);
     echo '<h1>' . esc_html($project->post_title) . '</h1>';
}
       ?>
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
                        <h3>Member Dashboard</h3>                    
                    </div>
                    <div class="dashboard-home-desc">                        
                        <div class="welcome-title">
                            <div class="dashboard-donation-details d-flex align-items-center justify-content-between">
                                <div class="left-title">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">Projects</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="right-btn">
                                    <a class="btn" href="#">Update Project</a>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-home-details">
                            <div class="my-profile-deatils">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Name of The Project*</p>
                                            <h6><?php echo  esc_html($project->post_title); ?></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Purpose*</p>
                                            <h6>Child Development</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Project Description*</p>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit</h6>
                                        </div>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Project Short Code*</p>
                                            <h6>1039</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Beneficiary Type*</p>
                                            <h6>Children</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Details of Beneficiaries*</p>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit</h6>
                                        </div>
                                    </div>                                
                                    <div class="col-lg-8">
                                        <div class="profile-info pe-5">
                                            <p>Location of the project / beneficiaries*</p>
                                            <h6>Skyline Residency, Block B, Flat 3C, 476 West Mahamayapur Road, Garia Gardens, Kolkata 700084</h6>
                                        </div>
                                    </div>  
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Duration of The Project*</p>
                                            <h6>24 months</h6>
                                        </div>
                                    </div>                                     
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Project Type*</p>
                                            <h6>Short Term 1 yr (ST) </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Budget Monthly*</p>
                                            <h6>10,000</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Source Of Budget*</p>
                                            <h6>Donations</h6>
                                        </div>
                                    </div>                                                                       
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Members Responsible</p>
                                            <h6>---</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Local Contact Person Name</p>
                                            <h6>---</h6>
                                        </div>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="profile-info">
                                            <p>Local Contact Person Phone Number</p>
                                            <h6>---</h6>
                                        </div>
                                    </div>                             
                                    
                                </div>
                            </div>
                            <form>
                                <div class="row form-info">                                     
                                    <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" name="" id="">
                                                <option value="Approved">Approved</option>
                                                <option value="Select-one">Select-one</option>
                                                <option value="Select-two">Select-two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group text-start p-0 m-0">
                                            <input type="submit" value="Submit" class="btn"> 
                                        </div>
                                    </div>                          
                                </div>
                            </form>
                        </div>
    
                    </div>                
                </div>

            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>