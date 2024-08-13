<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>
<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<!--/head-->
<body <?php body_class(); ?>>
<!--header sction-->
<!-- <div class="header-top">
    <p><?php //echo get_theme_value('weaversweb_topheader_text');?></p>

</div> -->
<header class="main-header">
    <div class="container-fluid header-row">
        <div class="logo">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_value('weaversweb_header_logo');?>" alt=""></a>
        </div>
        <div class="hdr-rt">
            <div class="main-menu">
                <div class="nav_close" onclick="menu_close()">
                    <i class="far fa-times-circle"></i>
                </div>
                <div class="hdr-rt-log-reg mobile">

                </div>
                <?php if(!is_user_logged_in()){ ?>
                    <?php wp_nav_menu(array('theme_location'=>'primary','menu_class'=>'','container_class'=>'','container'=>'')); ?>
                <?php }else{ ?>
                    <?php if(current_user_can('student')){ ?>
                        <?php wp_nav_menu(array('theme_location'=>'primary-after-login-student','menu_class'=>'','container_class'=>'','container'=>'')); ?>
                    <?php }elseif(current_user_can('accountant_admin') || current_user_can('accountant_member')){ ?>
                        <?php wp_nav_menu(array('theme_location'=>'primary-after-login-account','menu_class'=>'','container_class'=>'','container'=>'')); ?>
                    <?php }else{ ?>
                        <?php wp_nav_menu(array('theme_location'=>'primary-after-login-member','menu_class'=>'','container_class'=>'','container'=>'')); ?>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="hdr-rt-srch-cart">
                <ul>
                    <li><a href="javascript:void(0);" class="srch-tgl"><img src="<?php bloginfo('template_url'); ?>/images/srch.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/cart.png" alt=""></a></li>
                </ul>
            </div>

            <div onclick="menu_open()" class="nav_btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>


</header>