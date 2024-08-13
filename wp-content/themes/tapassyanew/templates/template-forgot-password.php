<?php 
page_only_visible('before-login');
/*Template Name: Forgot Password Template*/
get_header(); 
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
				  	<h2 class="text-center">FORGOT PASSWORD</h2>
					<form action="" method="post" id="forgot_pass_form">
						<div class="form-group">
							<label for="user_email">Email <span>*</span></label>
							<input type="text" class="form-control" id="user_email" name="user_email" placeholder="Registered Email">
							<div class="field_error" id="user_email_error"></div>
						</div>
						<div class="forget_pass" id="forget_pass"></div>
						<button type="submit" class="btn btn-primary mt-3" name="send_email_button" id="send_email_button">Send instructions</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php  endwhile; endif; 
get_footer();?>