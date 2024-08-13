
<section class="dashboard-banner">
    <div class="dashboard-wrapper position-relative">
    <?php 
    $bannerimage= the_post_thumbnail();
    if (!has_post_thumbnail() ) { 
        $bannerimage=get_template_directory_uri()."/assets/images/line-img-big.png";
     }  
        ?>
        <div class="dashboard-img">
            <img src="<?php echo  $bannerimage; ?>" alt="">
        </div>
        <div class="container dashboard-content-container">
            <div class="dashboard-content text-center text-white">
                <h1><?php echo get_the_title(); ?></h1>
            </div>                    
        </div>
    </div>
</section>