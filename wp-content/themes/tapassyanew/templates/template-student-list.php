<?php 
/*Template Name: Template Student List*/
get_header(); ?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<?php if(!current_user_can('student')){?>
				<div class="col-md-12">
					<h3>Student's List</h3>
					<div class="user-list-wrapper">
		                <table class="table table-striped">
		                  <thead>
		                    <tr>
		                    	<th scope="col">Registration No.</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Address</th>
								<th scope="col">Contact Number</th>
								<th scope="col">Father's Name</th>
								<th scope="col">Father's Contact No.</th>
								<th scope="col">Father's Occupation</th>
								<th scope="col">Father's Income</th>
								<th scope="col">Mother's Name</th>
								<th scope="col">Mother's Contact No.</th>
								<th scope="col">Mother's Occupation</th>
								<th scope="col">Mother's Income</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                  		<?php 
		                  		$args = array(
		                  			'role__in'	=> array('student')
		                  		);
		                  		$students = get_users($args);
		                  		if($students){
									foreach($students as $student){
		                  		?>
			                        <tr>
			                        	<td><?php echo get_user_meta($student->ID, 'stu_registration_number', true); ?></td>
										<td><?php echo $student->display_name; ?></td>
										<td><?php echo $student->user_email; ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_address', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_phone', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_father_name', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_father_contact', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_father_occupa', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_father_income', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_mother_name', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_mother_contact', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_mother_occupa', true); ?></td>
										<td><?php echo get_user_meta($student->ID, 'stu_mother_income', true); ?></td>
			                        </tr>
			                    <?php } 
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