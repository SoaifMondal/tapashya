<?php 
// Template Name:Layout:Student Register
get_header();
?>
<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->   
<section class="contact-form-sec common-padding">
    <div class="container">
        <div class="contact-form-info">
            <div class="section-title text-center pb-3">
                <h2>Students Registration111111</h2>
            </div>
            <form >
                <div class="row form-info">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_name" class="form-control" placeholder="Student Name *" id="student_name">
                        </div>
                    </div>    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="date" name="student_dob" class="form-control" placeholder="DOB *" id="student_dob">
                        </div>
                    </div>    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number"  name="student_age"  class="form-control" placeholder="Age" id="student_age">
                        </div>
                    </div>  
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email:test@gamil.com" name="student_email" placeholder="Email *" class="form-control" id="student_email">
                        </div>
                    </div>  
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="number" placeholder="Contact *" name="student_contact" class="form-control" id="student_contact">
                        </div>
                    </div>                     
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" name="student_address" placeholder="Address *" id="student_address"></textarea>
                        </div>
                    </div>    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="student_father_name" placeholder="Father's Name *" id="student_father_name">
                        </div>
                    </div>                      
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number"  name="student_father_contact" class="form-control" placeholder="Contact *" id="student_father_contact">
                        </div>
                    </div>                     
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_mother_name" class="form-control" placeholder="Mother's Name *" id="student_mother_name">
                        </div>
                    </div>        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_mother_contact" class="form-control" placeholder="Contact *" id="student_mother_contact">
                        </div>
                    </div>                       
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_father_occupation " class="form-control" placeholder="Father's Occupation *" id="student_father_occupation ">
                        </div>
                    </div>                       
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_father_income " class="form-control" placeholder="Monthly Income *" id="student_father_income ">
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text"  name="student_mother_occupation " class="form-control" placeholder="Mother's Occupation " id="student_mother_occupation ">
                        </div>
                    </div>  
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_mother_income " class="form-control" placeholder="Monthly Income *" id="student_mother_income ">
                        </div>
                    </div>                     
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_guardian_name" class="form-control" placeholder="Guardian's Name other than Parents" id="student_guardian_name">
                        </div>
                    </div>                                        
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number"  name="student_guardian_contact"  class="form-control" placeholder="Contact *" id="student_guardian_contact">
                        </div>
                    </div>   
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text"  name="student_guardian_relation" class="form-control" placeholder="Relation with Student " id="student_guardian_relation">
                        </div>
                    </div>     
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number"  name="student_guardian_income" class="form-control" placeholder="Monthly Income *" id="student_guardian_income">
                        </div>
                    </div>   
                    <div class="col-lg-6">
                        <div class="form-group">
                            <textarea  name="student_guardian_address" class="form-control registration-textarea" placeholder="Address *" id="student_guardian_address"></textarea>
                        </div>
                    </div> 
                    <div class="col-lg-6">
                        <div class="form-group">
                            <textarea name="student_challanges" class="form-control registration-textarea" placeholder="What Challanges you are facing for pursuing higher Studies*(200 Words only)" id="student_challanges"></textarea>
                        </div>
                    </div> 
                </div>
                <div class="form-info table-sec">
                    <div class="form-title">
                        <h4>Details of the Course & Institution the student is studying or will be studying </h4>
                    </div>
                    <table class="ragistration-table">	
                        <thead>
                          <tr>
                            <th></th>
                            <th>Status</th>
                            <th>Marks</th>
                            <th>%</th>
                            <th>Year of passing</th>
                            <th>Sub</th>
                            <th>Institute Name</th>
                            <th>Board / Univ Name</th>
                          </tr>
                      </thead>
                      <tbody>

                          <tr>
                            <td>10</td>
                            <td>
                                <div class="custom-select">
                                    <select class="select-box" name="class_ten_details" id="class_ten_details">
                                        <option value="Select">Select Status</option>
                                        <option value="Select-one">Passed</option>
                                        <option value="Select-two">Pursuing</option>
                                    </select>
                                </div>                                
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_ten_mark"  class="form-control" placeholder="Mark" id="student_ten_mark">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_ten_percentage" class="form-control" placeholder="%" id="student_ten_percentage">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_ten_passing_year" class="form-control" placeholder="Year of passing" id="student_ten_passing_year">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_ten_Sub" class="form-control" placeholder="Sub" id="student_ten_Sub">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_ten_institute_name" class="form-control" placeholder="Institute Name" id="student_ten_institute_name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"  name="student_ten_board_name" class="form-control" placeholder="Board / Univ Name" id="student_ten_board_name">
                                </div>
                            </td>                            
                          </tr>
                          <tr>
                            <td>10+2</td>
                            <td>
                                <div class="custom-select">
                                    <select class="select-box" name="class_twelve_details" id="class_twelve_details">
                                        <option value="Select">Select Status</option>
                                        <option value="Select-one">Passed</option>
                                        <option value="Select-two">Pursuing</option>
                                    </select>
                                </div>                                
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_twelve_mark"  class="form-control" placeholder="Mark" id="student_twelve_mark">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"  name="student_twelve_percentage" class="form-control" placeholder="%" id="student_twelve_percentage">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_twelve_passing_year" class="form-control" placeholder="Year of passing" id="student_twelve_passing_year">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"  name="student_twelve_Sub" class="form-control" placeholder="Sub" id="student_twelve_Sub">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_twelve_institute_name" class="form-control" placeholder="Institute Name" id="student_twelve_institute_name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_twelve_board_name" class="form-control" placeholder="Board / Univ Name" id="student_twelve_board_name">
                                </div>
                            </td>                            
                          </tr>                          
                          <tr>
                            <td>10+2+2</td>
                            <td>
                                <div class="custom-select">
                                    <select class="select-box" name="class_diploma_details" id="class_diploma_details">
                                        <option value="Select">Select Status</option>
                                        <option value="Select-one">Passed</option>
                                        <option value="Select-two">Pursuing</option>
                                    </select>
                                </div>                                
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"  name="student_diploma_mark" class="form-control" placeholder="Marks" id="student_diploma_mark">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"  name="student_diploma_percentage" class="form-control" placeholder="%" id="student_diploma_percentage">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_diploma_passing_year" class="form-control" placeholder="Year of passing" id="student_diploma_passing_year">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_diploma_Sub" class="form-control" placeholder="Sub" id="student_diploma_Sub">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_diploma_institute_name" class="form-control" placeholder="Institute Name" id="student_diploma_institute_name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_diploma_board_name" class="form-control" placeholder="Board / Univ Name" id="student_diploma_board_name">
                                </div>
                            </td>                            
                          </tr>
                          <tr>
                            <td>10+2+3</td>
                            <td>
                                <div class="custom-select">
                                    <select class="select-box"  name="class_graduation_details" id="class_graduation_details">
                                        <option value="Select">Select Status</option>
                                        <option value="Select-one">Passed</option>
                                        <option value="Select-two">Pursuing</option>
                                    </select>
                                </div>                                
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"  name="student_graduation_mark" class="form-control" placeholder="Marks" id="student_graduation_mark">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_graduation_percentage" class="form-control" placeholder="%" id="student_graduation_percentage">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_graduation_passing_year" class="form-control" placeholder="Year of passing" id="student_graduation_passing_year"> 
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_graduation_Sub" class="form-control" placeholder="Sub" id="student_graduation_Sub">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_graduation_institute_name" class="form-control" placeholder="Institute Name" id="student_graduation_institute_name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_graduation_board_name" class="form-control" placeholder="Board / Univ Name" id="student_graduation_board_name">
                                </div>
                            </td>                            
                          </tr> 
                          <tr>
                            <td>Masters</td>
                            <td>
                                <div class="custom-select">
                                    <select class="select-box" name="class_masters_details" id="class_masters_details">
                                        <option value="Select">Select Status</option>
                                        <option value="Select-one">Passed</option>
                                        <option value="Select-two">Pursuing</option>
                                    </select>
                                </div>                                
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"   name="student_masters_mark" class="form-control" placeholder="Marks" id="student_masters_mark">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_masters_percentage" class="form-control" placeholder="%" id="student_masters_percentage">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"  name="student_masters_passing_year" class="form-control" placeholder="Year of passing" id="student_masters_passing_year">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_masters_Sub" class="form-control" placeholder="Sub" id="student_masters_Sub">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text"  name="student_masters_institute_name" class="form-control" placeholder="Institute Name" id="student_masters_institute_name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="student_masters_board_name" class="form-control" placeholder="Board / Univ Name" id="student_masters_board_name>
                                </div>
                            </td>                            
                          </tr>                            
                      </tbody>
                    </table>
                </div>

                <div class="row form-info assistance-form">
                    <div class="col-lg-12">
                        <div class="form-title">
                            <h4>What Assistance You except?</h4>
                        </div>
                    </div>                    
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="student_Assistance" id="student_Assistance">
                                <label class="form-check-label" for="donation-radio-1">
                                    Financial
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="student_Assistance" id="student_Assistance">
                                <label class="form-check-label" for="donation-radio-2">
                                    Computer or Laptop
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="student_Assistance" id="student_Assistance">
                                <label class="form-check-label" for="donation-radio-3">
                                    Career Counselling
                                </label>
                            </div>
                        </div>
                    </div>    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="student_course_name" class="form-control" placeholder="Course Name" id="student_course_name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="student_teacher_name" class="form-control" placeholder="Name of Inst./HOD/Teacher " id="student_teacher_name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="number" name="student_teacher_contact_no" class="form-control" placeholder="Contact No" id="student_teacher_contact_no">
                        </div>
                    </div> 
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="student_teacher_contact_email" class="form-control" placeholder="Email" id="student_teacher_contact_email">
                        </div>
                    </div>                      
                </div>

                <div class="scholarship-form">
                    <div class="form-title">
                        <h4>Scholarship Requirements </h4>
                    </div>
                    <div class="row form-info scholarship-row align-items-center">
                        <div class="col-lg-8">
                            <div class="form-group d-flex align-items-center">
                                <label class="input-label" for="">School/College/University Fees </label>
                                <input name="student_fees" type="text" class="form-control" placeholder="School/College/University Fees" id="student_fees">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_monthly"  class="form-check-input" type="radio"  id="student_fees_monthly">
                                        <label class="form-check-label" for="donation-radio-5">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_monthly" class="form-check-input" type="radio"  id="student_fees_monthly">
                                        <label class="form-check-label" for="donation-radio-6">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_monthly" class="form-check-input" type="radio"  id="student_fees_monthly">
                                        <label class="form-check-label" for="donation-radio-7">
                                            Yearly
                                        </label>
                                    </div>
                                </div>                                
                            </div>
                        </div>


                    </div>    
                    <div class="row form-info scholarship-row align-items-center">
                        <div class="col-lg-8">
                            <div class="form-group d-flex align-items-center">
                                <label class="input-label" for="">Private Tuition Frees </label>
                                <input name="student_fees_private" type="text" class="form-control" placeholder="" id="student_fees_private"> 
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_private_monthly" class="form-check-input" type="radio"  id="student_fees_private_monthly">
                                        <label class="form-check-label" for="donation-radio-8">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_private_monthly" class="form-check-input" type="radio"  id="student_fees_private_monthly">
                                        <label class="form-check-label" for="donation-radio-9">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input  name="student_fees_private_monthly" class="form-check-input" type="radio"  id="student_fees_private_monthly">
                                        <label class="form-check-label" for="donation-radio-10">
                                            Yearly
                                        </label>
                                    </div>
                                </div>                                
                            </div>
                        </div>


                    </div>                        
                    <div class="row form-info scholarship-row align-items-center">
                        <div class="col-lg-8">
                            <div class="form-group d-flex align-items-center">
                                <label class="input-label" for="">Books / Accessories </label>
                                <input name="student_fees_books" type="text" class="form-control" placeholder="" id="student_fees_books">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_books_monthly" class="form-check-input" type="radio"  id="student_fees_books_monthly">
                                        <label class="form-check-label" for="donation-radio-11">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_books_monthly" class="form-check-input" type="radio" id="student_fees_books_monthly">
                                        <label class="form-check-label" for="donation-radio-12">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_books_monthly" class="form-check-input" type="radio"  id="student_fees_books_monthly">
                                        <label class="form-check-label" for="donation-radio-13">
                                            Yearly
                                        </label>
                                    </div>
                                </div>                                
                            </div>
                        </div>


                    </div>    
                    <div class="row form-info scholarship-row align-items-center">
                        <div class="col-lg-8">
                            <div class="form-group d-flex align-items-center">
                                <label class="input-label" for="">Conveyance</label>
                                <input name="student_fees_conveyance" type="text" class="form-control" placeholder="" id="student_fees_conveyance">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_conveyance_monthly" class="form-check-input" type="radio"  id="student_fees_conveyance_monthly">
                                        <label class="form-check-label" for="donation-radio-14">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_conveyance_monthly"  class="form-check-input" type="radio"  id="student_fees_conveyance_monthly">
                                        <label class="form-check-label" for="donation-radio-15">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_conveyance_monthly"  class="form-check-input" type="radio"  id="student_fees_conveyance_monthly" >
                                        <label class="form-check-label" for="donation-radio-16">
                                            Yearly
                                        </label>
                                    </div>
                                </div>                                
                            </div>
                        </div>


                    </div>                       
                    <div class="row form-info scholarship-row align-items-center">
                        <div class="col-lg-8">
                            <div class="form-group d-flex align-items-center">
                                <label class="input-label" for="">Food</label>
                                <input name="student_fees_food" type="text" class="form-control" placeholder="Food" id="student_fees_food">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_food_monthly" class="form-check-input" type="radio"  id="student_fees_food_monthly">
                                        <label class="form-check-label" for="donation-radio-17">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input  name="student_fees_food_monthly" class="form-check-input" type="radio"  id="student_fees_food_monthly">
                                        <label class="form-check-label" for="donation-radio-18">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_food_monthly" class="form-check-input" type="radio"  id="student_fees_food_monthly">
                                        <label class="form-check-label" for="donation-radio-19">
                                            Yearly
                                        </label>
                                    </div>
                                </div>                                
                            </div>
                        </div>


                    </div>    
                    <div class="row form-info scholarship-row align-items-center">
                        <div class="col-lg-8">
                            <div class="form-group d-flex align-items-center">
                                <label class="input-label" for="">Hostel / Lodging</label>
                                <input name="student_fees_hostel" type="text" class="form-control" placeholder="" id="student_fees_hostel">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_hostel_monthly" class="form-check-input" type="radio"  id="student_fees_hostel_monthly">
                                        <label class="form-check-label" for="donation-radio-20">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input  name="student_fees_hostel_monthly" class="form-check-input" type="radio"  id="student_fees_hostel_monthly">
                                        <label class="form-check-label" for="donation-radio-21">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input  name="student_fees_hostel_monthly" class="form-check-input" type="radio"  id="student_fees_hostel_monthly">
                                        <label class="form-check-label" for="donation-radio-22">
                                            Yearly
                                        </label>
                                    </div>
                                </div>                                
                            </div>
                        </div>


                    </div>  
                    <div class="row form-info scholarship-row align-items-center">
                        <div class="col-lg-8">
                            <div class="form-group d-flex align-items-center">
                                <label class="input-label" for="">Others</label>
                                <input  name="student_fees_others"  type="text" class="form-control" placeholder="" id="student_fees_others">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input  name="student_fees_others_monthly" class="form-check-input" type="radio"  id="student_fees_others_monthly">
                                        <label class="form-check-label" for="donation-radio-23">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input  name="student_fees_others_monthly"  class="form-check-input" type="radio" id="student_fees_others_monthly">
                                        <label class="form-check-label" for="donation-radio-24">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input   name="student_fees_others_monthly"  class="form-check-input" type="radio"  id="student_fees_others_monthly">
                                        <label class="form-check-label" for="donation-radio-25">
                                            Yearly
                                        </label>
                                    </div>
                                </div>                                
                            </div>
                        </div>


                    </div>                      
                    <div class="row form-info assistance-form">                   
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text"   name="student_bank_name" class="form-control" placeholder="Applicant's Bank Name " id="student_bank_name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="number" name="student_bank_account_no" class="form-control" placeholder="Account No" id="student_bank_account_no">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="student_bank_ifsc_code" class="form-control" placeholder="IFSC Code" id="student_bank_ifsc_code"> 
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="number" name="student_scholarhip_amount" class="form-control" placeholder="Any Other Scholarhip amount " id="student_scholarhip_amount">
                            </div>
                        </div>                           
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="student_scholarhip_authority" class="form-control" placeholder="Authority/ Body " id="student_scholarhip_authority">
                            </div>
                        </div>                           
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text"  name="student_Frequency" class="form-control" placeholder="Frequency" id="student_Frequency">
                            </div>
                        </div>   
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="password" name="student_password"  class="form-control" placeholder="Password * " id="student_password">
                            </div>
                        </div>   
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="password" name="student_password_confirm"  class="form-control" placeholder="Confirm Password * " id="student_password_confirm">
                            </div>
                        </div>                                                   
                    </div>  
                    <div class="assistance-form pb-0">
                        <div class="form-title">
                            <h4>Documents Attached </h4>
                        </div>  
                        <div class="documents-attached d-flex justify-content-between">
                            <div class="documents-item">
                                <label class="file-label" for="">Adhaar Card:</label>
                                <div class="form-group">
                                    <input type="file" name="student_adhaar" id="file-input" class="file-input-input" id="student_adhaar" />
                                    <label class="file-input-label" for="file-input"><span>Choose File</span></label>
                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="">10th Marksheet :</label>
                                <div class="form-group">
                                    <input type="file" name="student_ten_marksheet" name="file-input" id="file-input" class="file-input-input" id="student_ten_marksheet"/>
                                    <label class="file-input-label" for="file-input"><span>Choose File</span></label>
                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="">10+2 Marksheet:</label>
                                <div class="form-group">
                                    <input type="file"  name="student_twelve_marksheet" id="file-input" class="file-input-input" id="student_twelve_marksheet"/>
                                    <label class="file-input-label" for="file-input"><span>Choose File</span></label>
                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="">10+2+2/3 Marksheet:</label>
                                <div class="form-group">
                                    <input type="file" name="student_diploma_marksheet" name="file-input" id="file-input" class="file-input-input"  id="student_diploma_marksheet"/>
                                    <label class="file-input-label" for="file-input"><span>Choose File</span></label>
                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="">Parents Income Certificate :</label>
                                <div class="form-group">
                                    <input type="file" name="student_parents_income" name="file-input" id="file-input" class="file-input-input" id="student_parents_income" />
                                    <label class="file-input-label" for="file-input"><span>Choose File</span></label>
                                </div>
                            </div>                            
                        </div>

                        <div class="check-box-div">
                            <div class="form-group">
                                <input name="student_commit" class="check-box" type="checkbox" id="student_commit">
                                <label for="html">I commit that I will use the scholarship amount only for the said purpose . I will update Tapassya members about progress of my studies on regular basis . The approved scholarship amount is only for the said period and will be revised or discontinued based on my conduct ,results,regular evaluation and feedback from teachers</label>
                              </div>
                        </div>

                        <div class="form-group text-center p-0 m-0">
                            <input type="submit" value="Submit" class="btn"> 
                        </div>
                    </div>                    
                
                </div>
                
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>