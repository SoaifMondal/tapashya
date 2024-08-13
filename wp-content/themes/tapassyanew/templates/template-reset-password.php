<?php 
page_only_visible('before-login');
/*Template Name: Reset Password Template*/
get_header(); 
$user_key = $_REQUEST['k'];
$get_key = get_user_meta($_REQUEST['uid'], 'reset_pass_code', true);
get_header(); 
if($get_key == $user_key){
if ( have_posts() ) : while (have_posts()) : the_post();?>
<div class="about-banner">  
	<?php if(has_post_thumbnail(get_the_ID())){ ?>
 		<img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="First slide">
	<?php }else{ ?>
		<img class="d-block w-100" src="https://tapassya.org/tapassya-new/wp-content/uploads/2022/04/banner-image.jpg" alt="First slide">
	<?php } ?>
</div>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
<!-- 	        <h2><?php //the_title(); ?></h2> -->
	      </div>
			  <?php //the_content(); ?>
			  <div class="registration-form-section reg-sm">
				  	<h2 class="text-center">RESET PASSWORD</h2>
					<form action="" method="post" id="reset_pass_form">
						<div class="form-group">
							<label for="new_password">New Password <span>*</span></label>
							<input type="password" class="form-control" id="new_password" name="new_password" placeholder="********">
							<div class="field_error" id="new_password_error"></div>
						</div>
						<div class="form-group mt-3 mb-3">
							<label for="new_password_confirm">Confirm Password <span>*</span></label>
							<input type="password" class="form-control" id="new_password_confirm" name="new_password_confirm" placeholder="Enter Password">
							<div class="field_error" id="new_password_confirm_error"></div>
						</div>
						<div class="reset_pass" id="reset_pass"></div>
						<input type="hidden" name="user_key" id="user_key" value="<?php echo $_REQUEST['k']?>">
						<input type="hidden" name="user_id" id="user_id" value="<?php echo $_REQUEST['uid']?>">
						<input type="hidden" name="user_reg_key" id="user_reg_key" value="<?php echo $_REQUEST['key']?>">
						<button type="submit" class="btn btn-primary mt-3" name="reset_pass_button" id="reset_pass_button">Reset Password</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; 
}else{
	echo '<div class="error_key">Sorry! Key does not match for reset your password. Try again.</div>';
}
get_footer();?>