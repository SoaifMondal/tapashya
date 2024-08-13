<?php
session_start();
/* Template Name: Logout Template */
get_header();
if(is_user_logged_in()){
	wp_logout();	
}
wp_redirect(get_bloginfo('url'));
?>