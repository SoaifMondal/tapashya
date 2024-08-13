<?php
// Template Name:Layout:Update Student Education
$user_id = $_SESSION['loginid'];
$home_url = site_url();
if (empty($user_id)) {
    wp_redirect($home_url);
}
get_header();
get_template_part('template-parts/student/studentbanner');
//  ========================Class 10 Details===================================
$std_secondary_status = get_user_meta($user_id, 'std_secondary_status', true);
$std_secondary_marks = get_user_meta($user_id, 'std_secondary_marks', true);
$std_secondary_parcent = get_user_meta($user_id, 'std_secondary_parcent', true);
$std_secondary_passyear = get_user_meta($user_id, 'std_secondary_passyear', true);
$std_secondary_subject = get_user_meta($user_id, 'std_secondary_subject', true);
$std_secondary_insti = get_user_meta($user_id, 'std_secondary_insti', true);
$std_secondary_boardname = get_user_meta($user_id, 'std_secondary_boardname', true);
//  ========================Class 12 Details=====================================
$std_hs_status = get_user_meta($user_id, 'std_hs_status', true);
$std_hs_marks = get_user_meta($user_id, 'std_hs_marks', true);
$std_hs_parcent = get_user_meta($user_id, 'std_hs_parcent', true);
$std_hs_passyear = get_user_meta($user_id, 'std_hs_passyear', true);
$std_hs_subject = get_user_meta($user_id, 'std_hs_subject', true);
$std_hs_insti = get_user_meta($user_id, 'std_hs_insti', true);
$std_hs_boardname = get_user_meta($user_id, 'std_hs_boardname', true);
//  ========================Class Diploma Details=================================
$std_iti_status = get_user_meta($user_id, 'std_iti_status', true);
$std_iti_marks = get_user_meta($user_id, 'std_iti_marks', true);
$std_iti_parcent = get_user_meta($user_id, 'std_iti_parcent', true);
$std_iti_passyear = get_user_meta($user_id, 'std_iti_passyear', true);
$std_iti_subject = get_user_meta($user_id, 'std_iti_subject', true);
$std_iti_insti = get_user_meta($user_id, 'std_iti_insti', true);
$std_iti_boardname = get_user_meta($user_id, 'std_iti_boardname', true);
//  ========================Class graduation Details==============================
$std_graduation_status = get_user_meta($user_id, 'std_graduation_status', true);
$std_graduation_marks = get_user_meta($user_id, 'std_graduation_marks', true);
$std_graduation_parcent = get_user_meta($user_id, 'std_graduation_parcent', true);
$std_graduation_passyear = get_user_meta($user_id, 'std_graduation_passyear', true);
$std_graduation_subject = get_user_meta($user_id, 'std_graduation_subject', true);
$std_graduation_insti = get_user_meta($user_id, 'std_graduation_insti', true);
$std_graduation_boardname = get_user_meta($user_id, 'std_graduation_boardname', true);
//  ========================Class Masters Details==================================
$std_master_status = get_user_meta($user_id, 'std_master_status', true);
$std_master_marks = get_user_meta($user_id, 'std_master_marks', true);
$std_master_parcent = get_user_meta($user_id, 'std_master_parcent', true);
$std_master_passyear = get_user_meta($user_id, 'std_master_passyear', true);
$std_master_subject = get_user_meta($user_id, 'std_master_subject', true);
$std_master_insti = get_user_meta($user_id, 'std_master_insti', true);
$std_master_boardname = get_user_meta($user_id, 'std_master_boardname', true);
?>
<section class="dashboard-sec common-padding">
    <div class="container">
        <div class="dashboard-main-wrap d-flex justify-content-between">
            <?php echo get_template_part('template-parts/student/studentsidebar'); ?>
            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <h3><span class="left-arrow me-2"><a href="#"><img src="images/left-arrow.svg"
                                        alt=""></a></span>Update Education</h3>
                    </div>
                    <div class="dashboard-home-desc">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php the_permalink(111); ?>">Student Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Update Education</li>
                            </ol>
                        </nav>
                        <div class="dashboard-home-details">
                            <form action="" id="updateeducation">
                                <div class="form-info table-sec">
                                    <div class="form-title">
                                        <h4>Details of the Course Institution the student is studying or will be
                                            studying </h4>
                                        <p>Details of the Course & Institution the student is studying or will be
                                            studying :</p>
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
                                                        <div class="custom-select form-group has-success">
                                                            <select class="select-box" name="class_ten_details"
                                                                id="class_ten_details">
                                                                <option value="">Select Status</option>
                                                                <?php
                                                                $status = array('Passed');
                                                                foreach ($status as $sts) {
                                                                    $sel = ($sts == $std_secondary_status) ? 'selected="selected"' : '';
                                                                    ?>
                                                                    <option value="<?php echo $sts; ?>" <?php echo $sel; ?>>
                                                                        <?php echo $sts; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" name="student_ten_mark"
                                                                value="<?php echo $std_secondary_marks; ?>"
                                                                class="form-control" placeholder="Mark"
                                                                id="student_ten_mark">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_secondary_parcent; ?>"
                                                                name="student_ten_percentage" class="form-control"
                                                                placeholder="%" id="student_ten_percentage">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_secondary_passyear; ?>"
                                                                name="student_ten_passing_year" class="form-control"
                                                                placeholder="Year of passing"
                                                                id="student_ten_passing_year">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_secondary_subject; ?>"
                                                                name="student_ten_Sub" class="form-control"
                                                                placeholder="Sub" id="student_ten_Sub">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_secondary_insti; ?>"
                                                                name="student_ten_institute_name" class="form-control"
                                                                placeholder="Institute Name"
                                                                id="student_ten_institute_name">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_secondary_boardname; ?>"
                                                                name="student_ten_board_name" class="form-control"
                                                                placeholder="Board / Univ Name"
                                                                id="student_ten_board_name">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>
                                                        <div class="custom-select form-group">
                                                            <select class="select-box" name="class_twelve_details"
                                                                id="class_twelve_details">
                                                                <option value="">Select Status</option>
                                                                <?php
                                                                $status = array('Passed');
                                                                foreach ($status as $sts) {
                                                                    $sel = ($sts == $std_hs_status) ? 'selected="selected"' : '';
                                                                    ?>
                                                                    <option value="<?php echo $sts; ?>" <?php echo $sel; ?>>
                                                                        <?php echo $sts; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_hs_marks; ?>"
                                                                name="student_twelve_mark" class="form-control"
                                                                placeholder="Mark" id="student_twelve_mark">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_hs_parcent; ?>"
                                                                name="student_twelve_percentage" class="form-control"
                                                                placeholder="%" id="student_twelve_percentage">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_hs_passyear; ?>"
                                                                name="student_twelve_passing_year" class="form-control"
                                                                placeholder="Year of passing"
                                                                id="student_twelve_passing_year">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_hs_subject; ?>"
                                                                name="student_twelve_Sub" class="form-control"
                                                                placeholder="Sub" id="student_twelve_Sub">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_hs_insti; ?>"
                                                                name="student_twelve_institute_name"
                                                                class="form-control" placeholder="Institute Name"
                                                                id="student_twelve_institute_name">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_hs_boardname; ?>"
                                                                name="student_twelve_board_name" class="form-control"
                                                                placeholder="Board / Univ Name"
                                                                id="student_twelve_board_name">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Diploma</td>
                                                    <td>
                                                        <div class="custom-select form-group">
                                                            <select class="select-box" name="class_diploma_details"
                                                                id="class_diploma_details">
                                                                <option value="">Select Status</option>
                                                                <?php
                                                                $status = array('Passed');
                                                                foreach ($status as $sts) {
                                                                    $sel = ($sts == $std_iti_status) ? 'selected="selected"' : '';
                                                                    ?>
                                                                    <option value="<?php echo $sts; ?>" <?php echo $sel; ?>>
                                                                        <?php echo $sts; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_iti_marks; ?>"
                                                                name="student_diploma_mark" class="form-control"
                                                                placeholder="Marks" id="student_diploma_mark">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_iti_parcent; ?>"
                                                                name="student_diploma_percentage" class="form-control"
                                                                placeholder="%" id="student_diploma_percentage">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_iti_passyear; ?>"
                                                                name="student_diploma_passing_year" class="form-control"
                                                                placeholder="Year of passing"
                                                                id="student_diploma_passing_year">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_iti_subject; ?>"
                                                                name="student_diploma_Sub" class="form-control"
                                                                placeholder="Sub" id="student_diploma_Sub">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_iti_insti; ?>"
                                                                name="student_diploma_institute_name"
                                                                class="form-control" placeholder="Institute Name"
                                                                id="student_diploma_institute_name">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_iti_boardname; ?>"
                                                                name="student_diploma_board_name" class="form-control"
                                                                placeholder="Board / Univ Name"
                                                                id="student_diploma_board_name">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Graduation</td>
                                                    <td>
                                                        <div class="custom-select form-group">
                                                            <select class="select-box" name="class_graduation_details"
                                                                id="class_graduation_details">
                                                                <option value="">Select Status</option>
                                                                <?php
                                                                $status = array('Passed');
                                                                foreach ($status as $sts) {
                                                                    $sel = ($sts == $std_graduation_status) ? 'selected="selected"' : '';
                                                                    ?>
                                                                    <option value="<?php echo $sts; ?>" <?php echo $sel; ?>>
                                                                        <?php echo $sts; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_graduation_marks; ?>"
                                                                name="student_graduation_mark" class="form-control"
                                                                placeholder="Marks" id="student_graduation_mark">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_graduation_parcent; ?>"
                                                                name="student_graduation_percentage"
                                                                class="form-control" placeholder="%"
                                                                id="student_graduation_percentage">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_graduation_passyear; ?>"
                                                                name="student_graduation_passing_year"
                                                                class="form-control" placeholder="Year of passing"
                                                                id="student_graduation_passing_year">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_graduation_subject; ?>"
                                                                name="student_graduation_Sub" class="form-control"
                                                                placeholder="Sub" id="student_graduation_Sub">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_graduation_insti; ?>"
                                                                name="student_graduation_institute_name"
                                                                class="form-control" placeholder="Institute Name"
                                                                id="student_graduation_institute_name">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_graduation_boardname; ?>"
                                                                name="student_graduation_board_name"
                                                                class="form-control" placeholder="Board / Univ Name"
                                                                id="student_graduation_board_name">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Masters</td>
                                                    <td>
                                                        <div class="custom-select form-group">
                                                            <select class="select-box" name="class_masters_details"
                                                                id="class_masters_details">
                                                                <option value="">Select Status</option>
                                                                <?php
                                                                $status = array('Passed');
                                                                foreach ($status as $sts) {
                                                                    $sel = ($sts == $std_master_status) ? 'selected="selected"' : '';
                                                                    ?>
                                                                    <option value="<?php echo $sts; ?>" <?php echo $sel; ?>>
                                                                        <?php echo $sts; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_master_marks; ?>"
                                                                name="student_masters_mark" class="form-control"
                                                                placeholder="Marks" id="student_masters_mark">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_master_parcent; ?>"
                                                                name="student_masters_percentage" class="form-control"
                                                                placeholder="%" id="student_masters_percentage">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_master_passyear; ?>"
                                                                name="student_masters_passing_year" class="form-control"
                                                                placeholder="Year of passing"
                                                                id="student_masters_passing_year">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_master_subject; ?>"
                                                                name="student_masters_Sub" class="form-control"
                                                                placeholder="Sub" id="student_masters_Sub">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" value="<?php echo $std_master_insti; ?>"
                                                                name="student_masters_institute_name"
                                                                class="form-control" placeholder="Institute Name"
                                                                id="student_masters_institute_name">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                value="<?php echo $std_master_boardname; ?>"
                                                                name="student_masters_board_name" class="form-control"
                                                                placeholder="Board / Univ Name"
                                                                id="student_masters_board_name">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group text-start pt-3 p-0 m-0">
                                        <input type="submit" value="Update" class="btn">
                                        <div class="loader_button">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<script>
    jQuery(document).ready(function () {
        jQuery('#updateeducation').submit(function (e) {
            e.preventDefault();
            console.log('form submit');
            var form = document.getElementById('updateeducation');
            var formData = new FormData(form);
            formData.append('action', 'update_student_education');
            formData.append('studentid', '<?php echo $user_id; ?>');
            jQuery('.loader_button').html('<img src="<?php echo get_template_directory_uri(); ?>/assets/images/studentloader.svg" >');
            jQuery.ajax({
                url: ajaxurl, // Use the WordPress AJAX URL
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    // console.log(response);
                    jQuery('.loader_button').html('');
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

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error: ' + textStatus + ': ' + errorThrown);
                }
            });
        });
    });

</script>

<?php echo get_footer(); ?>