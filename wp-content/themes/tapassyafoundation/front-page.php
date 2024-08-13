<?php get_header(); 

    $pi = get_the_ID();
    $bannerImage = get_field('banner_image_home', $pi );
    $bannerTitle = get_field('title_home', $pi );
    $bannerSubitle = get_field('sub_title_home', $pi );
?>
<section class="banner">
    <div class="banner-wrapper position-relative">
        <?php if(!empty($bannerImage)){ ?>
        <div class="banner-img">
            <img src="<?=$bannerImage?>" alt=""banner-img>
        </div>
        <?php } ?>
        <div class="container banner-content-container">
            <div class="banner-content text-center text-white">
            <?php if(!empty($bannerTitle)){ ?> <h1><?=$bannerTitle?></h1><?php } ?>
            <?php if(!empty($bannerSubitle)){ ?> <p><?=$bannerSubitle?></p><?php } ?>
                <?php 
                    $link = get_field('button_link', $pi);
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                ?>
                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>                    
        </div>
    </div>
</section>


<?php 
    $missionTitle = get_field('title_ms', $pi );
    $missionContent = get_field('content_ms', $pi );
    $missionIcon = get_field('icon_ms', $pi );

    $historyImage = get_field('image_hs', $pi );
    $historyTitle = get_field('title_hs', $pi );
    $historyContent = get_field('content_hs', $pi );
    $historyIcon = get_field('icon_hs', $pi );
?>


<section class="our-mission-section common-padding-btm">
    <div class="container">
        <div class="mission-wrap">
            <div class="row">
            <?php if(!empty($missionTitle)){ ?>
                <div class="col-lg-5">
                    <div class="mission-info-wrap h-100">
                        <div class="mission-text-info h-100 text-white">
                            <?php if(!empty($missionIcon)){ ?> <img src="<?=$missionIcon?>" alt="icon"><?php } ?>
                            <?php if(!empty($missionTitle)){ ?> <h3><?=$missionTitle?></h3><?php } ?>
                            <?php if(!empty($missionContent)){ ?> <p><?=$missionContent?></p><?php } ?>
                           <?php 
                                $link = get_field('button_name_ms', $pi);
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                            ?>
                           <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                           <?php endif; ?>
                        </div>                        
                    </div>
                </div>
                <?php }  if(!empty($historyImage)){ ?>
                <div class="col-lg-7">
                    <div class="mission-info-wrap h-100 d-flex flex-wrap">
                    <?php if(!empty($historyImage)){ ?>
                        <div class="mission-image-info">
                            <img src="<?=$historyImage?>" alt="mission-img">
                        </div>
                        <?php } ?>
                        <div class="mission-text-info bg-yellow text-white">
                            <?php if(!empty($historyIcon)){ ?> <img src="<?=$historyIcon?>" alt="icon"><?php } ?>
                            <?php if(!empty($historyTitle)){ ?> <h3><?=$historyTitle?></h3><?php } ?>
                            <?php if(!empty($historyContent)){ ?> <p><?=$historyContent?></p><?php } ?>
                            <?php 
                                $link = get_field('button_name_hs', $pi);
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>  
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<?php 
    $wedoTitle = get_field('title_wwd', $pi );
    $wedoSubtitle = get_field('sub_title_wwd', $pi );
    $wedoImage = get_field('image_wwd', $pi );
    $wedoImagetag = get_field('image_tag_wwd', $pi );
    $wedoContenttitle = get_field('content_title_wwd', $pi );
    $wedoContent = get_field('content_wwd', $pi );
    $wedoproTitle = get_field('projects_title_wwd', $pi );
    $wedoList = get_field('projects_list_wwd', $pi );
?>
<section class="what-we-do-sec common-padding position-relative" style="background-image: url(<?php echo  get_template_directory_uri(); ?>/assets/images/what-we-do-bg.jpg);">
    <div class="container position-relative z-2">
        <div class="section-title text-black text-center">
        <?php if(!empty($wedoTitle)){ ?> <h2><?=$wedoTitle?></h2><?php } ?>
        <?php if(!empty($wedoSubtitle)){ ?> <p><?=$wedoSubtitle?></p><?php } ?>
        </div>
        <div class="project-top-info bg-white">
            <div class="row">
                <div class="col-lg-6">
                    <div class="top-project-img-info position-relative">
                        <div class="image">
                        <?php if(!empty($wedoImage)){ ?> <img src="<?=$wedoImage?>" alt="icon"><?php } ?>
                        </div>
                        <div class="overlay-text">
                        <?php if(!empty($wedoImagetag)){ ?> <p><?=$wedoImagetag?></p><?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="top-project-title">
                    <?php if(!empty($wedoContenttitle)){ ?> <h2><?=$wedoContenttitle?></h2><?php } ?>
                    <?php if(!empty($wedoContent)){ ?> <p><?=$wedoContent?></p><?php } ?>
                    <?php if(!empty($wedoproTitle)){ ?> <h4><?=$wedoproTitle?></h4><?php } ?>
                        <ul class="list-unstyled p-0 m-0">
                        <?php if(!empty($wedoList)){ 
                              foreach ($wedoList as  $val) {
                            ?>
                            <li><span><img src="<?php echo  get_template_directory_uri(); ?>/assets/images/school-icon.svg" alt="icon"></span>
                            <?=$val['projects_name']?></li>
                            <?php }} ?>
                        </ul>
                        <?php 
                                $link = get_field('button_link_wwd', $pi);
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-bottom-info">
            <div class="row justify-content-center">
                <?php $list = get_field('other_project_list',$pi);
                        if(!empty($list)){
                        foreach ($list as  $value) {
                            $image = $value['image'];
                            $title = $value['title'];
                            $content = $value['content'];
                            $url = $value['url'];
                    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="project-bottom-item">
                    <?php if(!empty($image)){ ?>
                        <div class="image">
                            <img src="<?=$image?>" alt="">
                        </div>
                        <?php } ?>
                        <div class="image-desc">
                       <?php if(!empty($url)){ ?> <a class="btn-icon" href="<?=$url?>"><img src="<?php echo  get_template_directory_uri(); ?>/assets/images/right-bg-arrow.svg" alt=""></a> <?php } ?>
                       <?php if(!empty($title)){ ?><h4><?=$title?></h4><?php } ?>
                        <?php if(!empty($content)){ ?><p><?=$content?></p><?php } ?>
                        </div>
                    </div>
                </div>
                 <?php }} ?>      
                
            </div>
        </div>


    </div>
</section>

<?php 
    $overviewTitle = get_field('title_ov', $pi );
    $overviewSubtitle = get_field('content_ov', $pi );
    $overviewList = get_field('listing', $pi );
    $overviewBimage = get_field('big_image', $pi );
    $overviewSimage = get_field('small_image', $pi );
?>
<section class="overview-section common-small-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="overview-text-info">
                <?php if(!empty($overviewTitle)){ ?> <h2><?=$overviewTitle?></h2><?php } ?>
                <?php if(!empty($overviewSubtitle)){ ?> <p><?=$overviewSubtitle?></p><?php } ?>
                    <ul class="list-unstyled p-0 m-0">
                    <?php if(!empty($overviewList)){ 
                              foreach ($overviewList as  $vals) {
                            ?>
                        <li><span class="view-icon"><img src="<?php echo  get_template_directory_uri(); ?>/assets/images/check-icon-bg.svg" alt=""></span> <span class="view-text"><?=$vals['points']?></span></li>
                        <?php }} ?>
                    </ul>
                            <?php 
                                $link = get_field('button_link_ov', $pi);
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-image-info position-relative">
                <?php if(!empty($overviewBimage)){ ?> 
                    <div class="image-big">
                        <img src="<?=$overviewBimage?>" alt="">
                    </div>
                    <?php } if(!empty($overviewSimage)){ ?> 
                    <div class="image-small">
                        <img src="<?=$overviewSimage?>" alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    $JoinTitle = get_field('title_jwu', $pi );
    $JoinImage = get_field('image_jwu', $pi );
    $JoinQuote = get_field('quote_area', $pi );
    $JoinAuthore = get_field('authore_name', $pi );
?>

<section class="join-us-sec position-relative">
    <?php if(!empty($JoinImage)){ ?>
    <div class="join-image">
        <img src="<?=$JoinImage?>" alt="">
    </div>
    <?php  } ?>
    <div class="join-us-main position-relative">
        <div class="container">        
            <div class="row">   
                <div class="col-lg-6"></div>
                <div class="col-lg-6 join-text-col">
                    <div class="join-text-info text-white position-relative z-2">
                    <?php if(!empty($JoinTitle)){ ?> <h4><?=$JoinTitle?></h4><?php } ?>
                    <?php if(!empty($JoinQuote)){ ?> <h2><?=$JoinQuote?></h2><?php } ?>
                    <?php if(!empty($JoinAuthore)){ ?><h2 class="title-name"><?=$JoinAuthore?></h2><?php } ?>
                    <?php 
                                $link = get_field('button_link_jwu', $pi);
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                    ?>
                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

  