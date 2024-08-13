<?php 
/*Template Name: Template Member List*/
get_header(); ?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<?php if(!current_user_can('student')){?>
				<div class="col-md-12">
					<h3>Member's List</h3>
					<div class="user-list-wrapper">
		                <table class="table table-striped">
		                  <thead>
		                    <tr>
		                      <th scope="col">Name</th>
		                      <th scope="col">Email</th>
		                      <th scope="col">Address</th>
		                      <th scope="col">Contact Number</th>
		                      <th scope="col">Interest Project Area</th>
		                      <?php if(current_user_can('accountant_member') || current_user_can('accountant_admin')){ ?>
			                      <th scope="col">PAN Number</th>
			                      <th scope="col">Relationship Status</th>
			                      <th scope="col">How You Contribute</th>
			                      <th scope="col">Contribution Amount</th>
			                      <th scope="col">Organization Name</th>
			                      <th scope="col">TAN Number</th>
			                      <th scope="col">Organization Address</th>
			                      <th scope="col">Organization Contact</th>
			                      <th scope="col">Organization Contact Email</th>
			                      <th scope="col">Interest Project Area</th>
			                  <?php } ?>
		                    </tr>
		                  </thead>
		                  <tbody>
		                  		<?php 
		                  		$args = array(
		                  			'role__in'	=> array('member')
		                  		);
		                  		$members = get_users($args);
		                  		if($members){
									foreach($members as $member){
										$interest = get_user_meta($member->ID, 'interest_project_area', true);
										$interests = implode(', ', $interest);
										$status = get_user_meta($member->ID, 'pw_user_status', true);
										if($status == 'approved'){
		                  		?>
			                        <tr>
			                          <td><?php echo $member->display_name; ?></td>
			                          <td><?php echo $member->user_email; ?></td>
			                          <td><?php echo get_user_meta($member->ID, 'address', true); ?></td>
			                          <td><?php echo get_user_meta($member->ID, 'phone_number', true); ?></td>
			                          <td><?php echo urldecode($interests); ?></td>
			                          <?php if(current_user_can('accountant_member') || current_user_can('accountant_admin')){ ?>
				                          <td><?php echo get_user_meta($member->ID, 'member_pan_number', true); ?></td>
				                          <td><?php echo get_user_meta($member->ID, 'relationship_status', true); ?></td>
				                          <td><?php echo get_user_meta($member->ID, 'how_you_contribute', true); ?></td>
				                          <td><?php echo get_user_meta($member->ID, 'contribution_amount', true); ?></td>
				                          <td><?php echo get_user_meta($member->ID, 'organization_name', true); ?></td>
				                          <td><?php echo get_user_meta($member->ID, 'tan_number', true); ?></td>
				                          <td><?php echo get_user_meta($member->ID, 'organization_address', true); ?></td>
				                          <td><?php echo get_user_meta($member->ID, 'organization_contact', true); ?></td>
				                          <td><?php echo get_user_meta($member->ID, 'organization_contactemail', true); ?></td>				                          
				                      <?php } ?>
			                        </tr>
			                    <?php }
			                    	} 
			                    } else { ?>
			                    	<tr><td colspan="19">Nothing found</td></tr>
			                    <?php } ?>
		                  </tbody>
		                </table>
		            </div>
				</div>
			<?php }else{ ?>
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Sorry! Only accountant can access this page</h2>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>