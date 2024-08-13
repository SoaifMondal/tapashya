<?php 
get_header();
if(have_posts()): while(have_posts()): the_post(); 
$user_id = get_post_meta(get_the_ID(), 'scholar_user_id', true);
$user = get_user_by( 'ID', $user_id );
?>
<section class="exit-section about-section">
  <div class="container">
  		<?php if(!current_user_can('student')){ ?>
	      <div class="section-heading">
	          <h2><?php echo $user->display_name; ?></h2>
	          <p class="text-center mb-5"><b>Registration No. :</b> <?php echo get_user_meta($user->ID, 'stu_registration_number', true); ?></p>
	      </div>
	      <div class="row">
	      	<div class="col-md-12 profile-pic-wrap text-center mb-5">
             <?php echo get_avatar($current_user->ID, 200);?>
          </div>
		  		<div class="col-md-4">
		  			<div class="biography-wrap mb-3">
		  				<h3>Biography</h3>
		  				<ul>
		  					<li><b>Name : </b><?php echo $user->display_name; ?></li>
		  					<li><b>Address : </b><?php echo get_user_meta($user->ID, 'stu_address', true); ?></li>
		  					<li><b>Phone Number : </b><?php echo get_user_meta($user->ID, 'stu_phone', true); ?></li>
		  					<li><b>Email : </b><?php echo $user->user_email; ?></li>
		  					<li><b>Father's Name : </b><?php echo get_user_meta($user->ID, 'stu_father_name', true); ?></li>
		  					<li><b>Father's Contact No. : </b><?php echo get_user_meta($user->ID, 'stu_father_contact', true); ?></li>
		  					<li><b>Mother's Name : </b><?php echo get_user_meta($user->ID, 'stu_mother_name', true); ?></li>
		  					<li><b>Mother's Contact No. : </b><?php echo get_user_meta($user->ID, 'stu_mother_contact', true); ?></li>
		  					<li><b>Father's Occupation : </b><?php echo get_user_meta($user->ID, 'stu_father_occupa', true); ?></li>
		  					<li><b>Father's Income : </b><?php echo get_user_meta($user->ID, 'stu_father_income', true); ?></li>
		  					<li><b>Mother's Occupation : </b><?php echo get_user_meta($user->ID, 'stu_mother_occupa', true); ?></li>
		  					<li><b>Mother's Income : </b><?php echo get_user_meta($user->ID, 'stu_mother_income', true); ?></li>
		  				</ul>
		  			</div>
	  		  </div>
		  		<div class="col-md-8">
		  			<div class="education-wrap">
	                <h3>Education</h3>
	                <table class="table table-striped">
	                  <thead>
	                    <tr>
	                      <th scope="col">Std.</th>
	                      <th scope="col">Status</th>
	                      <th scope="col">Marks</th>
	                      <th scope="col">%</th>
	                      <th scope="col">Year of Passing</th>
	                      <th scope="col">Subject</th>
	                      <th scope="col">Institute Name</th>
	                      <th scope="col">Board / Univ Name</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                        <?php if(!empty(get_user_meta($user->ID, 'std_secondary_status', true))){ ?>
	                        <tr>
	                          <th scope="row">10</th>
	                          <td><?php echo get_user_meta($user->ID, 'std_secondary_status', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_secondary_marks', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_secondary_parcent', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_secondary_passyear', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_secondary_subject', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_secondary_insti', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_secondary_boardname', true);?></td>
	                        </tr>
	                        <?php }?>
	                        <?php if(!empty(get_user_meta($user->ID, 'std_hs_status', true))){ ?>
	                        <tr>
	                          <th scope="row">10+2</th>
	                          <td><?php echo get_user_meta($user->ID, 'std_hs_status', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_hs_marks', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_hs_parcent', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_hs_passyear', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_hs_subject', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_hs_insti', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_hs_boardname', true);?></td>
	                        </tr>
	                        <?php }?>
	                        <?php if(!empty(get_user_meta($user->ID, 'std_iti_status', true))){ ?>
	                        <tr>
	                          <th scope="row">10+2+2</th>
	                          <td><?php echo get_user_meta($user->ID, 'std_iti_status', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_iti_marks', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_iti_parcent', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_iti_passyear', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_iti_subject', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_iti_insti', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_iti_boardname', true);?></td>
	                        </tr>
	                        <?php }?>
	                        <?php if(!empty(get_user_meta($user->ID, 'std_graduation_status', true))){ ?>
	                        <tr>
	                          <th scope="row">10+2+3</th>
	                          <td><?php echo get_user_meta($user->ID, 'std_graduation_status', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_graduation_marks', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_graduation_parcent', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_graduation_passyear', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_graduation_subject', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_graduation_insti', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_graduation_boardname', true);?></td>
	                        </tr>
	                        <?php }?>
	                        <?php if(!empty(get_user_meta($user->ID, 'std_master_status', true))){ ?>
	                        <tr>
	                          <th scope="row">Master</th>
	                          <td><?php echo get_user_meta($user->ID, 'std_master_status', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_master_marks', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_master_parcent', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_master_passyear', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_master_subject', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_master_insti', true);?></td>
	                          <td><?php echo get_user_meta($user->ID, 'std_master_boardname', true);?></td>
	                        </tr>
	                        <?php }?>
	                  </tbody>
	                </table>
	            </div>
		  		</div>
	      </div>
	      <div class="row">
	      	<div class="col-md-6">
	      		<h3>Approved Scholarship Amount: <?php echo get_user_meta($user->ID, 'approved_total_scholarship_amount', true); ?>/-</h3>
	      	</div>
	      	<div class="col-md-6">
	      		<h3>Frequency: <?php echo get_user_meta($user->ID, 'approved_total_scholarship_frequency', true); ?></h3>
	      	</div>
	      </div>
	      <div class="row">
	      		<div class="col-md-8">
		      		<h3>Approval Request</h3>
		      		<form action="" method="post" id="approve-request-form">
								<div class="form-group">
									<label for="approve_request_payment">Request for Payment <span>*</span> : </label>
									<select class="form-control" id="approve_request_payment" name="approve_request_payment">
										<?php 
										$requests = array('School/College/University Fees', 'Private Tuition Frees', 'Exam Frees', 'Books / Accessories', 'Conveyance', 'Food', 'Hostel / Lodging');
										foreach($requests as $request){
											$sel_request = (get_post_meta(get_the_ID(), 'request_for_payment', true) == $request)?'selected="selected"':'';
										?>
											<option value="<?php echo $request; ?>" <?php echo $sel_request; ?>><?php echo $request; ?></option>
										<?php } ?>
									</select>
									<div class="field_error" id="approve_request_payment_error"></div>
								</div>
								<div class="form-group mt-3 mb-3">
									<label for="approve_amount">Amount Requested<span>*</span> : </label>
									<input type="text" class="form-control" id="approve_amount" name="approve_amount" value="<?php echo get_post_meta(get_the_ID(), 'scholar_amount', true); ?>">
									<div class="field_error" id="approve_amount_error"></div>
								</div>
								<div class="form-group mt-3 mb-3">
									<label for="approve_amount">Approve Status <span>*</span> : </label>
									<tr>
									<td><?php echo get_post_meta(get_the_ID(), 'approved_status', true); ?></td>
									</tr>
									<div class="field_error" id="approve_status_error"></div>
								</div>
                <div class="form-group">
                    <span> <b>Request Description :</b> <?php the_content(); ?></span>
                </div>
								<div class="form-group">
		                <span>Uploaded Receipt/Bill Copy : 
		                	<?php if(has_post_thumbnail(get_the_ID())){ ?>
		                		<a href="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="fancybox">See Receipt/Bill Copy</a>
		                	<?php } else { ?>
		                		<p>Receipt/Bill Copy not uploaded</p>
		                	<?php } ?>
		                </span>
		            </div>
		            <div class="form-group">
		                <span>Approved Amount : <?php echo get_post_meta(get_the_ID(), 'approved_amount', true); ?></span>
		            </div>
		            <div class="form-group">
		                <span>Approved Date : <?php echo get_post_meta(get_the_ID(), 'approved_date', true); ?></span>
		            </div>
		            <input type="hidden" name="request_id" id="request_id" value="<?php echo get_the_ID(); ?>">
								<div class="approve-request" id="approve-request"></div>
								<button type="submit" class="btn btn-primary mt-3" name="approve-request-btn" id="approve-request-btn">Submit</button>
							</form>
		      	</div>

		      	<div class="col-md-4">
		      		<h3>Confirmation Details</h3>
		      		<div class="confirmation-details-wrap">
		      			<?php if(!empty(get_post_meta(get_the_ID(), 'con_scholar_bill', true ))){ ?>
		      				<a href="<?php echo get_post_meta(get_the_ID(), 'con_scholar_bill', true ); ?>" class="fancybox">
		      					<img src="<?php echo get_post_meta(get_the_ID(), 'con_scholar_bill', true ); ?>">
		      				</a>
		      			<?php }else{ ?>
		      				<p>Confirmation bill does not uploaded yet.</p>
		      			<?php } ?>
		      		</div>
		      	</div>
	      </div>
	      <div class="row">
	      	<div class="col-md-12 mt-5">
            <?php 
            $args = array(
                'post_type' => 'scholar_request',
                'orderby'   => 'date',
                'order'     => 'DESC',
                'posts_per_page' => 20,
                'posts_status'  => 'publish',
                'meta_key'     => 'scholar_user_id',
                'meta_value'   => $user->ID,
                'meta_compare' => '=',
            );
            query_posts($args);
            if(have_posts()):
            ?>
            <h3>All Requests</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Request No.</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Request For</th>
                  <th scope="col">Request Amount</th>
                  <th scope="col">Request Date</th>
                  <th scope="col">Approved Date</th>
                  <th scope="col">Approved Status</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                while(have_posts()): the_post();
                    $user_id = get_post_meta(get_the_ID(), 'scholar_user_id', true);
                    $user = get_user_by( 'ID', $user_id );
                    if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Approved'){
                        $color = '#0f5411';
                    }else if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Pending'){
                        $color = '#d6d934';
                    }else if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Deny'){
                        $color = '#f00';
                    }
                ?>
                    <tr>
                      <th scope="row"><?php echo get_post_meta(get_the_ID(), 'scholar_request_number', true); ?></th>
                      <td><?php echo $user->display_name; ?></td>
                      <td><?php echo $user->user_email; ?></td>
                      <td><?php echo get_user_meta($user_id, 'stu_phone', true); ?></td>
                      <td><?php echo get_post_meta(get_the_ID(), 'request_for_payment', true); ?></td>
                      <td><?php echo get_post_meta(get_the_ID(), 'scholar_amount', true); ?></td>
                      <td><?php the_time('d-m-Y'); ?></td>
                      <td><?php echo get_post_meta(get_the_ID(), 'approved_date', true); ?></td>
                      <td style="color: <?php echo $color; ?>;"><?php echo get_post_meta(get_the_ID(), 'approved_status', true); ?> Amt.:<?php echo get_post_meta(get_the_ID(), 'approved_amount', true); ?></td>
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
  </div>
</section>
<?php endwhile; endif;
get_footer(); ?>