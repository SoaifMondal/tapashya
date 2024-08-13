<?php
/*Template Name: Template Other Request Dashboard*/
global $current_user, $paged;
$member_responsibility = (get_the_author_meta( 'member_responsibility', $current_user->ID ));
get_header(); ?>
<section class="exit-section about-section">
  	<div class="container">
      	<div class="section-heading">
          	<h2>Welcome <?php echo $current_user->display_name; ?></h2>
      	</div>
      	<?php if(current_user_can('treasure') || (current_user_can('member') && $member_responsibility == 'hes-admin')){ ?>
			<h2 class="text-center mb-5">Student's Requests</h2>
	      	<div class="row">
	      		<div class="col-md-12">
	      			<?php 
	      			global $paged;
	      			$args = array(
				  		'post_type' => 'scholar_request',
				  		'orderby'	=> 'date',
				  		'order'		=> 'DESC',
				  		'posts_per_page' => 10,
				  		'posts_status'	=> 'publish',
				  		'paged'		=> $paged,
				  	);
				  	query_posts($args);
				  	if(have_posts()):
	      			?>
	      			<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">Request No.</th>
					      <th scope="col">Student Name</th>
					     <!-- <th scope="col">Email</th> -->
					      <th scope="col">Phone Number</th>
					      <th scope="col">Request For</th>
					      <th scope="col">Request Amount</th>
					      <th scope="col">Request Date</th>
					      <th scope="col">Approval Date</th>
					      <th scope="col">Approval Status</th>
					      <th scope="col">Request Details</th>
					      <th scope="col">Payment Status</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					  	while(have_posts()): the_post();
					  		$user_id = get_post_meta(get_the_ID(), 'scholar_user_id', true);
					  		$user = get_user_by( 'ID', $user_id );
					  		if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Approved'){
					  			$color = '#0f5411';
					  			$payment_done = '<a href="javascript:void(0)" class="student-payment-done-btn" data-id="'.get_the_ID().'">Payment Awaited</a>';
					  		}else if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Pending'){
					  			$color = '#d6d934';
					  			$payment_done = '';
					  		}else if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Deny'){
					  			$color = '#f00';
					  			$payment_done = '';
					  		}
					  	?>
						    <tr>
						      <th scope="row"><?php echo get_post_meta(get_the_ID(), 'scholar_request_number', true); ?></th>
						      <td><?php echo $user->display_name; ?></td>
						 <!-- <td>//<?php echo $user->user_email; ?></td>   -->
						      <td><?php echo get_user_meta($user_id, 'stu_phone', true); ?></td>
						      <td><?php echo get_post_meta(get_the_ID(), 'request_for_payment', true); ?></td>
						      <td><?php echo get_post_meta(get_the_ID(), 'scholar_amount', true); ?></td>
						      <td><?php the_time('d-m-Y'); ?></td>
						      <td><?php echo get_post_meta(get_the_ID(), 'approved_date', true); ?></td>
						      <td style="color: <?php echo $color; ?>;"><?php echo get_post_meta(get_the_ID(), 'approved_status', true); ?> Amt.:<?php echo get_post_meta(get_the_ID(), 'approved_amount', true); ?></td>
						      <td><a href="<?php the_permalink(); ?>">View</a></td>
						      <?php if(get_post_meta(get_the_ID(), 'payment_status', true) != 1){ ?>
					      		<td><?php echo $payment_done; ?></td>
	      					  <?php }else{ ?>
					      		<td>Payment Completed</td>
					      	  <?php } ?>
						    </tr>
						<?php endwhile; ?>
					  </tbody>
					</table>
					<div class="pagination-wrap text-right"><?php show_pagination(); ?></div> 
					<?php wp_reset_query();
						endif; 
					?>
	      		</div>
	      	</div>
		<?php } ?>


      	<?php if(current_user_can('gbmem') || current_user_can('treasure')){ ?>
      		<h2 class="text-center mt-5">Other Requests</h2>
	      	<div class="row">
	      		<div class="col-md-12">
	      			<?php 
	      			$args = array(
				  		'post_type' => 'other_request',
				  		'orderby'	=> 'date',
				  		'order'		=> 'DESC',
				  		'posts_per_page' => 20,
				  		'posts_status'	=> 'publish',
				  		'paged'		=> $paged,
				  	);
				  	query_posts($args);
				  	if(have_posts()):
	      			?>
	      			<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">Request No.</th>
					      <th scope="col">Requester Name</th>
					      <th scope="col">Request For</th>
					      <th scope="col">Beneficiary Name</th>
					      <th scope="col">Requested Amount</th>
					      <th scope="col">Request Date</th>
					      <th scope="col">Disbursement Date</th>
					      <th scope="col">Approval Status</th>
					      <th scope="col">Request Details</th>
					      <?php if(current_user_can('treasure')){ ?>
					      	<th scope="col">Payment Status</th>
					      <?php } ?>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					  	while(have_posts()): the_post();
					  		$user_id = get_post_meta(get_the_ID(), 'request_member_id', true);
					  		$user = get_user_by( 'ID', $user_id );
					  		if(get_post_meta(get_the_ID(), 'other_request_approved_status', true) == 'Approved'){
					  			$color = '#0f5411';
					  			$payment_done = '<a href="javascript:void(0)" class="payment-done-btn" data-id="'.get_the_ID().'">Payment Awaited</a>';
					  		}else if(get_post_meta(get_the_ID(), 'other_request_approved_status', true) == 'Pending'){
					  			$color = '#d6d934';
					  			$payment_done = '';
					  		}else if(get_post_meta(get_the_ID(), 'other_request_approved_status', true) == 'Rejected'){
					  			$color = '#f00';
					  			$payment_done = '';
					  		}
					  		
					  		$request_date = get_post_meta(get_the_ID(), 'other_request_date', true);
					  		if(empty($request_date)){ $request_date = get_the_date('Y-m-d', get_the_ID()); }
					  	?>
						    <tr>
						      <th scope="row"><?php the_title(); ?></th>
						      <td><?php echo $user->display_name; ?></td>
						      <td><?php echo get_post_meta(get_the_ID(), 'other_request_for_payment', true); ?></td>
						      <td><?php echo get_post_meta(get_the_ID(), 'other_request_details_beneficiary', true); ?></td>
						      <td><?php echo get_post_meta(get_the_ID(), 'other_request_amount', true); ?></td>
					         <!--  <td><?php //the_time('Y-m-d'); ?></td>  -->
					          <td><?php echo $request_date; ?></td> 
						      <td><?php echo get_post_meta(get_the_ID(), 'other_request_disbursed_date', true); ?></td>
						      <td style="color: <?php echo $color; ?>;"><?php echo get_post_meta(get_the_ID(), 'other_request_approved_status', true); ?> <?php if(!empty(get_post_meta(get_the_ID(), 'other_request_approved_amount', true))){ ?>Amt.:<?php echo get_post_meta(get_the_ID(), 'other_request_approved_amount', true); }?></td>
						      <td><a href="<?php the_permalink(); ?>">View</a></td>
						      <?php if(current_user_can('treasure')){ ?>
						      	<?php if(get_post_meta(get_the_ID(), 'payment_status', true) != 1){ ?>
						      		<td><?php echo $payment_done; ?></td>
						      	<?php }else{ ?>
						      		<td>Payment Completed</td>
						      	<?php } ?>
						      <?php } ?>
						    </tr>
						<?php endwhile; ?>
					  </tbody>
					</table>
					<div class="pagination-wrap text-right"><?php show_pagination(); ?></div> 
					<?php wp_reset_query();
						endif; 
					?>
	      		</div>
	      	</div>
	    <?php }else{ ?>
	    	<div class="row">
	    		<div class="col-md-12 text-center">
	    			<h3>GBMem and Treasure users can access this page</h3>
	    		</div>
	    	</div>
	    <?php } ?>
    </div>
</section>
<?php get_footer(); ?>