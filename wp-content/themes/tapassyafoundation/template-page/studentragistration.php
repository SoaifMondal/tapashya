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
            <?php $get_title = get_the_title(); ?>
            <div class="section-title text-center pb-3">
                <h2><?php echo $get_title; ?></h2>
            </div>
            <form action="" id="myForm" method="post" enctype="multipart/form-data">
                <div class="row form-info">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_name" class="form-control" placeholder="Student Name *"
                                id="student_name">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="date" name="student_dob" class="form-control" placeholder="DOB *" max="2023"
                                id="student_dob">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_age" class="form-control" placeholder="Age"
                                id="student_age" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email:test@gamil.com" name="student_email" placeholder="Email *"
                                class="form-control" id="student_email">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="number" placeholder="Contact *" name="student_contact" class="form-control"
                                id="student_contact">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" name="student_address"
                                placeholder="Address *" id="student_address"></textarea>
                            <span class="messages"></span>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="student_father_name"
                                placeholder="Father's Name *" id="student_father_name">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_father_contact" class="form-control"
                                placeholder="Contact *" id="student_father_contact">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_mother_name" class="form-control"
                                placeholder="Mother's Name *" id="student_mother_name">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_mother_contact" class="form-control"
                                placeholder="Contact *" id="student_mother_contact">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_father_occupation" class="form-control"
                                placeholder="Father's Occupation *" id="student_father_occupation">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_father_income" class="form-control"
                                placeholder="Monthly Income *" id="student_father_income">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_mother_occupation" class="form-control"
                                placeholder="Mother's Occupation*" id="student_mother_occupation">
                            <span class="messages"></span>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_mother_income" class="form-control"
                                placeholder="Monthly Income *" id="student_mother_income">
                            <span class="messages"></span>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_guardian_name" class="form-control"
                                placeholder="Guardian's Name other than Parents" id="student_guardian_name">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_guardian_contact" class="form-control"
                                placeholder="Contact *" id="student_guardian_contact">

                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" name="student_guardian_relation" class="form-control"
                                placeholder="Relation with Student*" id="student_guardian_relation">
                            <span class="messages"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="student_guardian_income" class="form-control"
                                placeholder="Monthly Income *" id="student_guardian_income">
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <textarea name="student_guardian_address" class="form-control registration-textarea"
                                placeholder="Address *" id="student_guardian_address"></textarea>
                            <span class="messages"></span>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <textarea name="student_challanges" class="form-control registration-textarea"
                                placeholder="What Challanges you are facing for pursuing higher Studies*(200 Words only)"
                                id="student_challanges"></textarea>
                                <span class="messages"></span>
                        </div>
                    </div>
                </div>
                <div class="form-info table-sec">
                    <div class="form-title">
                        <h4>Details of the Course & Institution the student is studying or will be studying </h4>
                    </div>
                    <div class="table-responsive">
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
                                        <div class="custom-select form-group">
                                            <select class="select-box" name="class_ten_details" id="class_ten_details">
                                                <option value="Select">Select Status</option>
                                                <option value="Passed">Passed</option>
                                                <option value="Pursuing">Pursuing</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_ten_mark" class="form-control"
                                                placeholder="Mark" id="student_ten_mark">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_ten_percentage" class="form-control"
                                                placeholder="%" id="student_ten_percentage">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_ten_passing_year" class="form-control"
                                                placeholder="Year of passing" id="student_ten_passing_year">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_ten_Sub" class="form-control"
                                                placeholder="Sub" id="student_ten_Sub">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_ten_institute_name" class="form-control"
                                                placeholder="Institute Name" id="student_ten_institute_name">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_ten_board_name" class="form-control"
                                                placeholder="Board / Univ Name" id="student_ten_board_name">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10+2</td>
                                    <td>
                                        <div class="custom-select form-group">
                                            <select class="select-box" name="class_twelve_details"
                                                id="class_twelve_details">
                                                <option value="Select">Select Status</option>
                                                <option value="Passed">Passed</option>
                                                <option value="Pursuing">Pursuing</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_twelve_mark" class="form-control"
                                                placeholder="Mark" id="student_twelve_mark">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_twelve_percentage" class="form-control"
                                                placeholder="%" id="student_twelve_percentage">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_twelve_passing_year" class="form-control"
                                                placeholder="Year of passing" id="student_twelve_passing_year">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_twelve_Sub" class="form-control"
                                                placeholder="Sub" id="student_twelve_Sub">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_twelve_institute_name" class="form-control"
                                                placeholder="Institute Name" id="student_twelve_institute_name">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_twelve_board_name" class="form-control"
                                                placeholder="Board / Univ Name" id="student_twelve_board_name">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10+2+2</td>
                                    <td>
                                        <div class="custom-select form-group">
                                            <select class="select-box" name="class_diploma_details"
                                                id="class_diploma_details">
                                                <option value="Select">Select Status</option>
                                                <option value="Passed">Passed</option>
                                                <option value="Pursuing">Pursuing</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_diploma_mark" class="form-control"
                                                placeholder="Marks" id="student_diploma_mark">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_diploma_percentage" class="form-control"
                                                placeholder="%" id="student_diploma_percentage">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_diploma_passing_year" class="form-control"
                                                placeholder="Year of passing" id="student_diploma_passing_year">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_diploma_Sub" class="form-control"
                                                placeholder="Sub" id="student_diploma_Sub">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_diploma_institute_name"
                                                class="form-control" placeholder="Institute Name"
                                                id="student_diploma_institute_name">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_diploma_board_name" class="form-control"
                                                placeholder="Board / Univ Name" id="student_diploma_board_name">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10+2+3</td>
                                    <td>
                                        <div class="custom-select form-group">
                                            <select class="select-box" name="class_graduation_details"
                                                id="class_graduation_details">
                                                <option value="Select">Select Status</option>
                                                <option value="Passed">Passed</option>
                                                <option value="Pursuing">Pursuing</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_graduation_mark" class="form-control"
                                                placeholder="Marks" id="student_graduation_mark">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_graduation_percentage" class="form-control"
                                                placeholder="%" id="student_graduation_percentage">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_graduation_passing_year"
                                                class="form-control" placeholder="Year of passing"
                                                id="student_graduation_passing_year">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_graduation_Sub" class="form-control"
                                                placeholder="Sub" id="student_graduation_Sub">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_graduation_institute_name"
                                                class="form-control" placeholder="Institute Name"
                                                id="student_graduation_institute_name">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_graduation_board_name" class="form-control"
                                                placeholder="Board / Univ Name" id="student_graduation_board_name">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Masters</td>
                                    <td>
                                        <div class="custom-select form-group">
                                            <select class="select-box" name="class_masters_details"
                                                id="class_masters_details">
                                                <option value="Select">Select Status</option>
                                                <option value="Passed">Passed</option>
                                                <option value="Pursuing">Pursuing</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_masters_mark" class="form-control"
                                                placeholder="Marks" id="student_masters_mark">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_masters_percentage" class="form-control"
                                                placeholder="%" id="student_masters_percentage">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_masters_passing_year" class="form-control"
                                                placeholder="Year of passing" id="student_masters_passing_year">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_masters_Sub" class="form-control"
                                                placeholder="Sub" id="student_masters_Sub">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_masters_institute_name"
                                                class="form-control" placeholder="Institute Name"
                                                id="student_masters_institute_name">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" name="student_masters_board_name" class="form-control"
                                                placeholder="Board / Univ Name" id="student_masters_board_name">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="row form-info assistance-form">
                    <div class="col-lg-12">
                        <div class="form-title">
                            <h4>What Assistance You except?</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" id="student_Assistance_0" type="radio" value="Financial"
                                    name="student_Assistance">
                                <label class="form-check-label" for="student_Assistance_0">
                                    Financial
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" id="student_Assistance_1" type="radio"
                                    value="Computer or Laptop" name="student_Assistance">
                                <label class="form-check-label" for="student_Assistance_1">
                                    Computer or Laptop
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" id="student_Assistance_2" type="radio"
                                    value="Career Counselling" name="student_Assistance">
                                <label class="form-check-label" for="student_Assistance_2">
                                    Career Counselling
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="student_course_name" class="form-control" placeholder="Course Name"
                                id="student_course_name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="student_teacher_name" class="form-control"
                                placeholder="Name of Inst./HOD/Teacher " id="student_teacher_name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="number" name="student_teacher_contact_no" class="form-control"
                                placeholder="Contact No" id="student_teacher_contact_no">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="student_teacher_contact_email" class="form-control"
                                placeholder="Email" id="student_teacher_contact_email">
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
                                <label class="input-label" for="student_fees_1">School/College/University Fees </label>
                                <input name="student_fees" type="text" class="form-control"
                                    placeholder="School/College/University Fees" id="student_fees_1">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_monthly" id="student_fees_monthly_1" value="Monthly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="student_fees_monthly_1">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_monthly" id="student_fees_monthly_2" value="Quarterly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="student_fees_monthly_2">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_monthly" id="student_fees_monthly_3" value="Yearly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="student_fees_monthly_3">
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
                                <label class="input-label" for="student_fees_private_1">Private Tuition Frees </label>
                                <input name="student_fees_private" type="text" class="form-control" placeholder=""
                                    id="student_fees_private_1">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_private_monthly" id="student_fees_private_monthly_1"
                                            value="Monthly" class="form-check-input" type="radio">
                                        <label class="form-check-label" for="student_fees_private_monthly_1">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_private_monthly" value="Quarterly"
                                            class="form-check-input" id="student_fees_private_monthly_2" type="radio">
                                        <label class="form-check-label" for="student_fees_private_monthly_2">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_private_monthly" id="student_fees_private_monthly"
                                            value="Yearly" class="form-check-input" type="radio">
                                        <label class="form-check-label" for="student_fees_private_monthly_3">
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
                                <input name="student_fees_books" type="text" class="form-control" placeholder=""
                                    id="student_fees_books">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_books_monthly" id="student_fees_books_monthly_1"
                                            value="Monthly" class="form-check-input" type="radio">
                                        <label class="form-check-label" for="student_fees_books_monthly_1">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_books_monthly" id="student_fees_books_monthly_2"
                                            value="Quarterly" class="form-check-input" type="radio">
                                        <label class="form-check-label" for="student_fees_books_monthly_2">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_books_monthly" id="student_fees_books_monthly_3"
                                            value="Yearly" class="form-check-input" type="radio">
                                        <label class="form-check-label" for="student_fees_books_monthly_3">
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
                                <input name="student_fees_conveyance" type="text" class="form-control" placeholder=""
                                    id="student_fees_conveyance">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_conveyance_monthly" value="Monthly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="donation-radio-14">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_conveyance_monthly" value="Quarterly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="donation-radio-15">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_conveyance_monthly" value="Yearly"
                                            class="form-check-input" type="radio">
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
                                <input name="student_fees_food" type="text" class="form-control" placeholder="Food"
                                    id="student_fees_food">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_food_monthly" value="Monthly" class="form-check-input"
                                            type="radio">
                                        <label class="form-check-label" for="donation-radio-17">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_food_monthly" value="Quarterly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="donation-radio-18">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_food_monthly" value="Yearly" class="form-check-input"
                                            type="radio">
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
                                <input name="student_fees_hostel" type="text" class="form-control" placeholder=""
                                    id="student_fees_hostel">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_hostel_monthly" value="Monthly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="donation-radio-20">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_hostel_monthly" value="Quarterly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="donation-radio-21">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_hostel_monthly" value="Yearly"
                                            class="form-check-input" type="radio">
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
                                <input name="student_fees_others" type="text" class="form-control" placeholder=""
                                    id="student_fees_others">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-end">
                            <div class="frequency-info d-flex align-items-center">
                                <div class="frequency-title">
                                    <h5>Frequency:</h5>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_others_monthly" value="Monthly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="donation-radio-23">
                                            Monthly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_others_monthly" value="Quarterly"
                                            class="form-check-input" type="radio">
                                        <label class="form-check-label" for="donation-radio-24">
                                            Quarterly
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group small-check-label">
                                    <div class="form-check">
                                        <input name="student_fees_others_monthly" value="Yearly"
                                            class="form-check-input" type="radio">
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
                                <input type="text" name="student_bank_name" class="form-control"
                                    placeholder="Applicant's Bank Name " id="student_bank_name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="number" name="student_bank_account_no" class="form-control"
                                    placeholder="Account No" id="student_bank_account_no">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="student_bank_ifsc_code" class="form-control"
                                    placeholder="IFSC Code" id="student_bank_ifsc_code">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="number" name="student_scholarhip_amount" class="form-control"
                                    placeholder="Any Other Scholarhip amount " id="student_scholarhip_amount">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="student_scholarhip_authority" class="form-control"
                                    placeholder="Authority/ Body " id="student_scholarhip_authority">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" name="student_Frequency" class="form-control" placeholder="Frequency"
                                    id="student_Frequency">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password * "
                                    id="password">
                                    <span class="messages"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="password" name="confirm-password" class="form-control"
                                    placeholder="Confirm Password * " id="confirm-password">
                                    <span class="messages"></span>

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
                                    <input type="file" name="student_adhaar" id="student_adhaar"
                                        class="file-input-input image_file_set" id="file-input"
                                        accept="image/*,application/pdf" />
                                    <label class="file-input-label image_file_upload" for="student_adhaar"><span>Choose
                                            File</span></label>
                                            <div class="documents-upload">
                                                <img id="student_adhaar_upload" class="image_upload" src="" alt="Image preview"
                                                    style="display:none; max-width: 200px; max-height: 200px;" />
                                            </div>
                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="">10th Marksheet :</label>
                                <div class="form-group">
                                    <input type="file" name="student_ten_marksheet" id="student_ten_marksheet"
                                        class="file-input-input image_file_set" accept="image/*,application/pdf" />
                                    <label class="file-input-label image_file_upload"
                                        for="student_ten_marksheet"><span>Choose File</span></label>
                                        <div class="documents-upload">
                                            <img id="student_ten_marksheet_upload" class="image_upload" src="" alt="Image preview" style="display:none; max-width: 200px; max-height: 200px;" />                                        
                                        </div>

                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="">10+2 Marksheet:</label>
                                <div class="form-group">
                                    <input type="file" name="student_twelve_marksheet" id="student_twelve_marksheet"
                                        class="file-input-input image_file_set" accept="image/*,application/pdf" />
                                    <label class="file-input-label image_file_upload "
                                        for="student_twelve_marksheet"><span>Choose File</span></label>
                                        <div class="documents-upload">
                                            <img id="student_twelve_marksheet_upload" class="image_upload" src=""
                                                alt="Image preview"
                                                style="display:none; max-width: 200px; max-height: 200px;" />
                                        </div>

                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="">10+2+2/3 Marksheet:</label>
                                <div class="form-group">
                                    <input type="file" name="student_diploma_marksheet" id="student_diploma_marksheet"
                                        class="file-input-input image_file_set" accept="image/*,application/pdf" />
                                    <label class="file-input-label image_file_upload"
                                        for="student_diploma_marksheet"><span>Choose File</span></label>
                                        <div class="documents-upload">
                                            <img id="student_diploma_marksheet_upload" class="image_upload" src=""
                                        alt="Image preview"
                                        style="display:none; max-width: 200px; max-height: 200px;" />

                                        </div>

                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="">Parents Income Certificate :</label>
                                <div class="form-group">
                                    <input type="file" name="student_parents_income"
                                        class="file-input-input image_file_set" id="student_parents_income"
                                        accept="image/*,application/pdf" />
                                    <label class="file-input-label image_file_upload"
                                        for="student_parents_income"><span>Choose File</span></label>

                                    <div class="documents-upload">
                                        <img id="student_parents_income_upload" class="image_upload" src=""
                                            alt="Image preview"
                                            style="display:none; max-width: 200px; max-height: 200px;" />
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="check-box-div">
                            <div class="form-group">
                                <input name="student_commit" class="check-box" type="checkbox" id="student_commit">
                                <label for="student_commit" class="student_commit_border">I commit that I will use the
                                    scholarship amount only for the said
                                    purpose . I will update Tapassya members about progress of my studies on regular
                                    basis . The approved scholarship amount is only for the said period and will be
                                    revised or discontinued based on my conduct ,results,regular evaluation and feedback
                                    from teachers</label>
                            </div>
                        </div>

                        <div class="form-group text-center p-0 m-0">
                            <input type="submit" id="student_upload_btn" value="Submit" class="btn">
                            <div class="loader_button">

                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function () {
        // Before using it we must add the parse and format functions
        // Here is a sample implementation using moment.js
        validate.extend(validate.validators.datetime, {
            // The value is guaranteed not to be null or undefined but otherwise it
            // could be anything.
            parse: function (value, options) {
                return +moment.utc(value);
            },
            // Input is a unix timestamp
            format: function (value, options) {
                var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
                return moment.utc(value).format(format);
            }
        });

        // These are the constraints used to validate the form
        var constraints = {
            student_name: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },



            student_dob: {
                // The user needs to give a birthday
                presence: true,
                // and must be born at least 18 years ago
                date: {
                    latest: moment().subtract(18, "years"),
                    message: "^You must be at least 18 years old to use this service"
                }
            },



            student_email: {
                // Email is required
                presence: true,
                // and must be an email (duh)
                email: true
            },



            student_contact: {
                // Presence ensures the field is not empty
                presence: true,
                // Format using a regex pattern to match desired phone number format

            },



            student_address: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },




            student_father_name: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },



            student_father_contact: {
                // Presence ensures the field is not empty
                presence: true,
                // Format using a regex pattern to match desired phone number format

            },



            student_mother_name: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },


            student_mother_contact: {
                // Presence ensures the field is not empty
                presence: true,
            },



            student_father_occupation: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },




            student_father_income: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
            },



            student_mother_occupation: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },


            student_mother_income: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters lon
            },


            student_guardian_name: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },



    student_guardian_contact: {
        presence: {
          message: "is required"
        },
        numericality: {
          onlyInteger: true,
          notGreaterThan: 999999,
          notLessThan: 1000,
          message: "must be between 1000 and 999999"
        },
        length: {
          minimum: 4,
          maximum: 6,
          message: "must be between 4 and 6 digits"
        }
      },

            student_guardian_relation: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },

            student_guardian_income: {
                // Presence ensures the field is not empty
                presence: true,

            },



            student_guardian_address: {
                // You need to pick a username too
                presence: true,
                // And it must be between 3 and 20 characters long
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    // We don't allow anything that a-z and 0-9
                    pattern: "[a-zA-Z0-9 ]+",
                    // but we don't care if the username is uppercase or lowercase
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },


            password: {
                // Password is also required
                presence: true,
                // And must be at least 5 characters long
                length: {
                    minimum: 5
                }
            },
            "confirm-password": {
                // You need to confirm your password
                presence: true,
                // and it needs to be equal to the other password
                equality: {
                    attribute: "password",
                    message: "^The passwords does not match"
                }
            },


        
        };


        // Hook up the form so we can prevent it from being posted
        var form = document.querySelector("form#myForm");
        form.addEventListener("submit", function (ev) {
            ev.preventDefault();
            console.log('souarv');
            handleFormSubmit(form);
        });

        // Hook up the inputs to validate on the fly
        var inputs = document.querySelectorAll("input, textarea, select")
        for (var i = 0; i < inputs.length; ++i) {
            inputs.item(i).addEventListener("change", function (ev) {
                var errors = validate(form, constraints) || {};
                showErrorsForInput(this, errors[this.name])
            });
        }

        function handleFormSubmit(form, input) {
            // validate the form against the constraints
            var errors = validate(form, constraints);
            // then we update the form to reflect the results
            showErrors(form, errors || {});
            if (!errors) {
                showSuccess();
            }
        }

        // Updates the inputs with the validation errors
        function showErrors(form, errors) {
            // We loop through all the inputs and show the errors for that input
            _.each(form.querySelectorAll("input[name], select[name],textarea[name]"), function (input) {
                // Since the errors can be null if no errors were found we need to handle
                // that
                showErrorsForInput(input, errors && errors[input.name]);
            });
        }

        // Shows the errors for a specific input
        function showErrorsForInput(input, errors) {
            // This is the root of the input
            // console.log(input.parentNode);
            var formGroup = closestParent(input.parentNode, "form-group")
                // Find where the error messages will be insert into
                , messages = formGroup.querySelector(".messages");
            // First we remove any old messages and resets the classes
            resetFormGroup(formGroup);
            // If we have errors
            if (errors) {
                // we first mark the group has having errors
                formGroup.classList.add("has-error");
                // then we append all the errors
                _.each(errors, function (error) {
                    addError(messages, error);
                });
            } else {
                // otherwise we simply mark it as success
                formGroup.classList.add("has-success");
            }
        }

        // Recusively finds the closest parent that has the specified class
        function closestParent(child, className) {
            if (!child || child == document) {
                return null;
            }
            if (child.classList.contains(className)) {
                return child;
            } else {
                return closestParent(child.parentNode, className);
            }
        }

        function resetFormGroup(formGroup) {
            // Remove the success and error classes
            formGroup.classList.remove("has-error");
            formGroup.classList.remove("has-success");
            // and remove any old messages
            _.each(formGroup.querySelectorAll(".help-block.error"), function (el) {
                el.parentNode.removeChild(el);
            });
        }

        // Adds the specified error with the following markup
        // <p class="help-block error">[message]</p>
        function addError(messages, error) {
            var block = document.createElement("p");
            block.classList.add("help-block");
            block.classList.add("error");
            block.innerText = error;
            messages.appendChild(block);
        }

        function showSuccess() {
            var form = document.getElementById('myForm');
            var formData = new FormData(form);
            formData.append('action', 'handle_student_file_upload');
            isValid=true;
            // checkbox validation
            const checkbox = document.getElementById('student_commit');
            if (!checkbox.checked) {
                isValid = false;
                jQuery('.student_commit_border').addClass('error_border');
                // $(".student_commit_border").css("border-color", "red");

            }
            if (isValid) {
                jQuery('.loader_button').html('<img src="<?php echo get_template_directory_uri() ?>/assets/images/studentloader.svg" >');

                jQuery.ajax({
                    url: ajaxurl, // Use the WordPress AJAX URL
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                        const jsonObject = jQuery.parseJSON(response);
                        const msg = jsonObject.msg;
                        if (msg) {
                            Swal.fire({
                                title: "Good job!",
                                text: msg,
                                icon: "success"
                            });
                        }
                        const msg_err = jsonObject.msg_err;
                        if (msg_err) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: msg_err,
                               
                            });
                        }
                        jQuery('.loader_button').html('');


                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error('AJAX Error: ' + textStatus + ': ' + errorThrown);
                    }
                });
            }
        }



        jQuery('.image_file_upload').click(function () {
            const data = jQuery(this).parent().parent();
            const imageFile = data.find('.image_file_set')[0];
            const imageFileSet = data.find('.image_upload')[0].id;
            const pdfImage = "<?php echo get_template_directory_uri() . '/assets/images/pdf.jpg'; ?>";
            const studentParentsIncome = document.getElementById(imageFile.id);
            const studentParentsIncomeUpload = document.getElementById(imageFileSet);
            const uniqueId = studentParentsIncome.id + '_progress';
            studentParentsIncome.onchange = evt => {
                // Insert the HTML with the dynamically generated ID
                studentParentsIncomeUpload.insertAdjacentHTML('beforebegin',
                    '<div class="progress">' +
                    '<div class="progress-bar" id="' + uniqueId + '" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' +
                    '</div>'
                );
                const progress_bar = data.find('.progress-bar')[0].id;
                const progressBar = document.getElementById(progress_bar);
                let currentValue = parseInt(progressBar.getAttribute('aria-valuenow'));
                const interval = setInterval(function () {
                    if (currentValue < 100) {
                        currentValue += 10;
                        progressBar.setAttribute('aria-valuenow', currentValue);
                        progressBar.style.width = currentValue + '%';
                    } else {
                        clearInterval(interval);
                        //       console.log('time end');
                        //   console.log('File input changed');
                        //    [file] = studentParentsIncome.files;
                        const [file] = studentParentsIncome.files;

                        if (file) {
                            console.log(file.type);
                            console.log(file.size);
                            // Check file type
                            const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png']; // Add other allowed MIME types as needed
                            const maxSizeInBytes = 5 * 1024 * 1024; // 5 MB in bytes

                            if (allowedTypes.includes(file.type)) {
                                if (file.size <= maxSizeInBytes) {
                                    if (file.type === 'application/pdf') {
                                        console.log('pdf');

                                        studentParentsIncomeUpload.src = pdfImage;
                                        studentParentsIncomeUpload.style.display = 'block';

                                    } else {
                                        studentParentsIncomeUpload.src = URL.createObjectURL(file);
                                        studentParentsIncomeUpload.style.display = 'block';
                                    }

                                } else {
                                    alert('File size exceeds 5 MB. Please upload a smaller file.');
                                    studentParentsIncomeUpload.style.display = 'none';
                                }
                            } else {
                                alert('Invalid file type. Please upload a PDF, JPEG, or PNG file.');
                                studentParentsIncomeUpload.style.display = 'none';
                            }
                        } else {
                            studentParentsIncomeUpload.style.display = 'none';
                        }

                        jQuery(".progress").hide();
                    }
                }, 100);

            }

        })

        // ===================date of birth calculate==========================


        jQuery('#student_dob').on('change', function () {
            var dob = jQuery(this).val();
            console.log(dob);
            // Ensure a date is selected
            if (dob) {
                var dobDate = new Date(dob);
                var today = new Date();

                // Calculate age
                var age = today.getFullYear() - dobDate.getFullYear();
                var monthDifference = today.getMonth() - dobDate.getMonth();
                jQuery('#student_age').val(age);
            }
        });
    });
</script>
<?php get_footer(); ?>
<!-- 
<script>
    // jQuery(document).ready(function ($) {
        jQuery('.image_file_upload').click(function () {
            const data = jQuery(this).parent().parent();
            const imageFile = data.find('.image_file_set')[0];
            const imageFileSet = data.find('.image_upload')[0].id;
            const pdfImage = "<?php echo get_template_directory_uri() . '/assets/images/pdf.jpg'; ?>";
            const studentParentsIncome = document.getElementById(imageFile.id);
            const studentParentsIncomeUpload = document.getElementById(imageFileSet);
            const uniqueId = studentParentsIncome.id + '_progress';
            studentParentsIncome.onchange = evt => {
                // Insert the HTML with the dynamically generated ID
                studentParentsIncomeUpload.insertAdjacentHTML('beforebegin',
                    '<div class="progress">' +
                    '<div class="progress-bar" id="' + uniqueId + '" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' +
                    '</div>'
                );
                const progress_bar = data.find('.progress-bar')[0].id;
                const progressBar = document.getElementById(progress_bar);
                let currentValue = parseInt(progressBar.getAttribute('aria-valuenow'));
                const interval = setInterval(function () {
                    if (currentValue < 100) {
                        currentValue += 10;
                        progressBar.setAttribute('aria-valuenow', currentValue);
                        progressBar.style.width = currentValue + '%';
                    } else {
                        clearInterval(interval);
                        //       console.log('time end');
                        //   console.log('File input changed');
                        //    [file] = studentParentsIncome.files;
                        const [file] = studentParentsIncome.files;

                        if (file) {
                            console.log(file.type);
                            console.log(file.size);
                            // Check file type
                            const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png']; // Add other allowed MIME types as needed
                            const maxSizeInBytes = 5 * 1024 * 1024; // 5 MB in bytes

                            if (allowedTypes.includes(file.type)) {
                                if (file.size <= maxSizeInBytes) {
                                    if (file.type === 'application/pdf') {
                                        console.log('pdf');

                                        studentParentsIncomeUpload.src = pdfImage;
                                        studentParentsIncomeUpload.style.display = 'block';

                                    } else {
                                        studentParentsIncomeUpload.src = URL.createObjectURL(file);
                                        studentParentsIncomeUpload.style.display = 'block';
                                    }

                                } else {
                                    alert('File size exceeds 5 MB. Please upload a smaller file.');
                                    studentParentsIncomeUpload.style.display = 'none';
                                }
                            } else {
                                alert('Invalid file type. Please upload a PDF, JPEG, or PNG file.');
                                studentParentsIncomeUpload.style.display = 'none';
                            }
                        } else {
                            studentParentsIncomeUpload.style.display = 'none';
                        }

                        jQuery(".progress").hide();
                    }
                }, 100);

            }

        })


        // ===================date of birth calculate==========================


        $('#student_dob').on('change', function () {
            var dob = $(this).val();

            // Ensure a date is selected
            if (dob) {
                var dobDate = new Date(dob);
                var today = new Date();

                // Calculate age
                var age = today.getFullYear() - dobDate.getFullYear();
                var monthDifference = today.getMonth() - dobDate.getMonth();
                jQuery('#student_age').val(age);
            }
        });

        // $('#myForm').submit(function (event) {
            // event.preventDefault();

            var form = document.getElementById('myForm');
            var formData = new FormData(form);
            formData.append('action', 'handle_student_file_upload');

            // From Validation 
            jQuery('.error').text('');
            // Form validation
            let isValid = true;
            // List of fields to validate
            let fields = [
                'student_name', 'student_dob', 'student_email', 'student_contact', 'student_address', 'student_father_name', 'student_father_contact', 'student_mother_name', 'student_mother_contact', 'student_father_occupation', 'student_father_income',
                'student_mother_occupation',
                'student_mother_income', 'student_guardian_contact',
                'student_guardian_income',
                'student_guardian_address'
            ];

            // Validate each field
            fields.forEach(function (field) {
                if (jQuery('#' + field).val() === '') {
                    isValid = false;
                    jQuery('#error_' + field).text('This field is required').css('color', 'red');
                }
            });

            // checkbox validation
            const checkbox = document.getElementById('student_commit');
            if (!checkbox.checked) {
                isValid = false;
                $('.student_commit_border').addClass('error_border');
                // $(".student_commit_border").css("border-color", "red");

            }
            //    if(jQuery('#student_commit').val===''){
            //     jQuery('#error_' + field).text('This field is required').css('color', 'red');
            //    }





            // Text fields validation
            // let textFields = ['student_name', 'student_email', 'student_contact', 'student_address', 'student_father_name', 'student_father_contact', 'student_mother_name', 'student_mother_contact', 'student_father_occupation', 'student_father_income', 'student_father_income', 'student_mother_occupation', 'student_mother_income', 'student_guardian_contact', 'student_guardian_income', 'student_guardian_address'];
            // textFields.forEach(function (field) {
            //     if (jQuery('#' + field).val() !== '' && !/^[a-zA-Z\s]*$/.test(jQuery('#' + field).val())) {
            //         isValid = false;
            //         jQuery('#error-' + field).text('Text only').css('color', 'red');
            //     }
            // });

            // Password match validation
            let password = jQuery('#student_password').val();
            let confirmPassword = jQuery('#student_password_confirm').val();
            if (password !== confirmPassword) {
                isValid = false;
                jQuery('#error_student_password').text('Passwords do not match').css('color', 'red');
                jQuery('#error_student_password_confirm').text('Passwords do not match').css('color', 'red');
            }
            console.log(isValid);
            if (isValid) {
                jQuery('.loader_button').html('<img src="<?php echo get_template_directory_uri() ?>/assets/images/studentloader.svg" >');

                $.ajax({
                    url: ajaxurl, // Use the WordPress AJAX URL
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                        const jsonObject = jQuery.parseJSON(response);
                        const msg = jsonObject.msg;
                        if (msg) {
                            Swal.fire({
                                title: "Good job!",
                                text: msg,
                                icon: "success"
                            });
                        }
                        const msg_err = jsonObject.msg_err;
                        if (msg_err) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: msg_err,
                               
                            });
                        }
                        jQuery('.loader_button').html('');


                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error('AJAX Error: ' + textStatus + ': ' + errorThrown);
                    }
                });
            }
        });

    });

</script> -->