<?php 
// page_only_visible("before-login");
/*Template Name: Template Member Area*/
get_header(); ?>
<?php if(has_post_thumbnail(get_the_ID())){ ?>
<div class="about-banner">  
  <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="First slide">
</div>
<?php } ?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
<!-- 	        <h2><?php //the_title(); ?></h2> -->
	      </div>
			  <?php //the_content(); ?>
			  <div class="registration-form-section reg-sm">
				  	<h2 class="text-center">LOGIN</h2>
					<form action="" method="post" id="member-signin-form">
						<div class="form-group">
							<label for="user_email">Email <span>*</span></label>
							<input type="text" class="form-control" id="user_email" name="user_email" placeholder="Enter email or username">
							<div class="field_error" id="user_email_error"></div>
						</div>
						<div class="form-group mt-3 mb-3">
							<label for="user_password">Password <span>*</span></label>
							<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter Password">
							<div class="field_error" id="user_password_error"></div>
						</div>
						<div class="sign_in" id="sign_in"></div>
						<button type="submit" class="btn btn-primary" name="signin_btn" id="signin_btn">LOGIN</button>
						<a href="<?php echo get_permalink(686); ?>">Forgot Password?</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>