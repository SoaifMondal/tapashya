function menu_open() {
    jQuery(".main-menu").css({"transform":"translateX(0)"}) 
}
function menu_close() { 
    jQuery(".main-menu").css({"transform":"translateX(320px)"})
}

// jQuery(window).scroll(function(){
//   if (jQuery(window).scrollTop() >= 100) {
//     jQuery('header').addClass('fixed');
//    }
//    else {
//     jQuery('header').removeClass('fixed');
//    }
// });

jQuery(document).ready(function(){
  jQuery(".srch-tgl, .srch-close").click(function(){
    jQuery(".srch-pop").toggle();
  });
});



jQuery(document).ready(function(){
    //
    // var button = document.getElementById('member-raise-request-btn');

    //     // Add a click event listener to the button
    //     button.addEventListener('click', function() {
    //         // Redirect to the specified URL
    //         window.location.href = 'https://tapassya.org/tapassya-new/other-request-dashboard/';
    //     });

    //
    jQuery('#interest_project_area').multiSelect();
    jQuery('#what-we-do').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    jQuery('#photo-gallery').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    jQuery(".fancybox").fancybox();

    jQuery('input[name="relationship_status"]').change(function(){
        var value = jQuery(this).val();
        var how_to_contribute = jQuery('input[name="how_you_contribute"]:checked').val();
        if(value == "Participation & Financial commitment (Min: 8000, Desirable: 15000 Yearly)" && how_to_contribute != "No Financial Commitment" ){
            jQuery('#corporate').slideUp();
            jQuery('#member-welwisher').slideDown();
            jQuery('#organization_name').val('');
            jQuery('#pan_number').val('');
            jQuery('#tan_number').val('');
            jQuery('#organization_address').val('');
            jQuery('#company_profile').val('');
            jQuery('#unit_head_name').val('');
            jQuery('#csr_manager_name').val('');
            jQuery('#organization_contact').val('');
            jQuery('#organization_contactemail').val('');
        }else if(value == "Well-Wishers & Volunteer : Guidance & Participation , Financial support occasionally" && how_to_contribute != "No Financial Commitment"){
            jQuery('#corporate').slideUp();
            jQuery('#member-welwisher').slideDown();
            jQuery('#organization_name').val('');
            jQuery('#pan_number').val('');
            jQuery('#tan_number').val('');
            jQuery('#organization_address').val('');
            jQuery('#company_profile').val('');
            jQuery('#unit_head_name').val('');
            jQuery('#csr_manager_name').val('');
            jQuery('#organization_contact').val('');
            jQuery('#organization_contactemail').val('');
        }else if(value == "Corporate"){
            // jQuery('#member-welwisher').slideUp();
            jQuery('#corporate').slideDown();
        }
    });

    jQuery('input[name="how_you_contribute"]').change(function(){        
        var how_to_contribute = jQuery(this).val();
        if(how_to_contribute == "No Financial Commitment" ){
            jQuery('#member-welwisher').slideUp();
            jQuery('#contribution_amount').val('');
        }else{
            jQuery('#member-welwisher').slideDown();
        }
    });

    jQuery('#member-reg-form').submit(function(){
        var that = jQuery(this),
            sign_up_button = jQuery('#member-reg-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            // return false;
            var value = jQuery('input[name="relationship_status"]:checked').val();
            var how_to_contribute = jQuery('input[name="how_you_contribute"]:checked').val();
            var reason = ""; 

            reason += Site.form.validateEmpty('member_name',"Please enter your name.");
            reason += Site.form.validateEmail('member_email',"Please enter your valid Email.");
            reason += Site.form.validateEmpty('member_email',"Please enter your Email.");
            reason += Site.form.validate_num('member_phone',"Please enter your valid phone number.");
            reason += Site.form.validateEmpty('member_phone',"Please enter your phone number.");
            reason += Site.form.validateEmpty('member_address',"Please enter your address.");
            reason += Site.form.validateEmpty('member_pan_number',"Please enter your PAN number.");
            if(value == "Participation & Financial commitment (Min: 8000, Desirable: 15000 Yearly)" && how_to_contribute != "No Financial Commitment" ){
                reason += Site.form.validateEmpty('contribution_amount',"Please enter contribution amount.");
            }else if(value == "Well-Wishers & Volunteer : Guidance & Participation , Financial support occasionally" && how_to_contribute != "No Financial Commitment"){
                reason += Site.form.validateEmpty('contribution_amount',"Please enter contribution amount.");
            }else if(value == "Corporate"){
                if(how_to_contribute != "No Financial Commitment"){
                    reason += Site.form.validateEmpty('contribution_amount',"Please enter contribution amount.");
                }else{
                    reason += Site.form.validateEmpty('organization_name',"Please enter organization name.");
                    reason += Site.form.validateEmpty('organization_address',"Please enter organization address.");
                    reason += Site.form.validateEmpty('company_profile',"Please enter organization profile.");
                    reason += Site.form.validate_num('organization_contact',"Please enter valid organization contact number.");
                    reason += Site.form.validateEmpty('organization_contact',"Please enter organization contact number.");
                    reason += Site.form.validateEmail('organization_contactemail',"Please enter valid organization contact email.");
                    reason += Site.form.validateEmpty('organization_contactemail',"Please enter organization contact email.");
                }
            }
            reason += Site.form.validateEmpty('interest_project_area',"Please select interest project area.");
            reason += Site.form.validateEmpty('member_password',"Please enter your password.");
            reason += Site.form.con_pass_check('member_confirm_password', 'member_password', "Confirm password does not match with password.");
            reason += Site.form.validateEmpty('member_confirm_password',"Please enter your confirm password.");

            if( reason == "" ){
                jQuery(sign_up_button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.member_register(data, function( response ){
                    that.find('.error').html('');
                    if(response.error){         
                        jQuery('#member-sign-up').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(sign_up_button).html('Submit').removeAttr('disabled');
                    }else{  
                        jQuery('#member-sign-up').removeClass('row_error').addClass('success').html(response.msg);
                        jQuery('#member-reg-form')[0].reset();     
                        jQuery(sign_up_button).html('Submit').removeAttr('disabled');
                        /*$(sign_up_button).val('Success..').removeAttr('disabled');
                        if(response.url)
                            document.location = response.url;
                        else
                            document.location.reload();*/
                    }
                });
            }
        return false;       
    });

    jQuery('#organization-reg-form').submit(function(){
        var that = jQuery(this),
            sign_up_button = jQuery('#org-reg-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            // console.log(data); return false;
            var reason = ""; 

            reason += Site.form.validateEmpty('org_name',"Please enter organization name.");
            reason += Site.form.validateEmpty('org_registration_type',"Please enter organization registration type.");
            reason += Site.form.validateEmpty('org_reg_number',"Please enter organization registtation number.");
            reason += Site.form.validateEmpty('org_reg_authority',"Please enter organization registering authority.");
            reason += Site.form.validateEmpty('org_purpose',"Please enter organization registration purpose.");
            reason += Site.form.validateEmpty('org_need_tapassya_help',"Please enter why need tapassya help.");
            reason += Site.form.validateEmail('org_email',"Please enter organization valid Email.");
            reason += Site.form.validateEmpty('org_email',"Please enter organization Email.");
            reason += Site.form.validate_num('org_phone_no',"Please enter organization valid phone number.");
            reason += Site.form.validateEmpty('org_phone_no',"Please enter organization phone number.");
            reason += Site.form.validateEmpty('org_password',"Please enter organization password.");
            reason += Site.form.con_pass_check('org_confirm_password', 'org_password', "Confirm password does not match with password.");
            reason += Site.form.validateEmpty('org_confirm_password',"Please enter organization confirm password.");

            var supporting_doc = document.getElementById("org_supporting_doc").files[0];

            if(supporting_doc){
                fname = supporting_doc.name;
                fnameArr = fname.split(".");
                supporting_doc_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Please choose organization supporting document');
                return false;
            }

            if ( supporting_doc && Site.constant.allowed_files_ext.indexOf(supporting_doc_ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if( reason == "" ){
                // jQuery(sign_up_button).html('Please wait..').attr('disabled', 'disabled');
                // Site.user.organization_register(data, supporting_doc, function( response ){
                //     that.find('.error').html('');
                //     if(response.error){         
                //         jQuery('#org-sign-up').removeClass('success').addClass('row_error').html(response.msg);  
                //         jQuery(sign_up_button).html('Submit').removeAttr('disabled');
                //     }else{  
                //         jQuery('#org-sign-up').removeClass('row_error').addClass('success').html(response.msg);
                //         jQuery('#organization-reg-form')[0].reset();     
                        /*$(sign_up_button).val('Success..').removeAttr('disabled');
                        if(response.url)
                            document.location = response.url;
                        else
                            document.location.reload();*/
                    jQuery(sign_up_button).html('Please wait..').attr('disabled', 'disabled');
                    Site.user.organization_register(data, supporting_doc, function(response) {
                        that.find('.error').html('');
                        if (response.error) {
                            jQuery('#org-sign-up').removeClass('success').addClass('row_error').html(response.msg);
                            jQuery(sign_up_button).html('Submit').removeAttr('disabled'); // Reset the button text and enable it
                        } else {
                            jQuery('#org-sign-up').removeClass('row_error').addClass('success').html(response.msg);
                            jQuery('#organization-reg-form')[0].reset();
                            jQuery(sign_up_button).html('Submit').removeAttr('disabled'); // Reset the button text and enable it
                
                            // Redirect to the specified URL after successful submission
                            window.location.href = 'https://tapassya.org/tapassya-new';
                    }
                });
            }
        return false;       
    });

    jQuery('#student_reg_form').submit(function(){
        var that = jQuery(this),
            sign_up_button = jQuery('#stu_reg_btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            // console.log(data); return false;
            var reason = ""; 

            reason += Site.form.validateEmpty('stu_name',"Please enter your name.");
            reason += Site.form.validateEmpty('stu_dob',"Please enter your date of birth.");
            reason += Site.form.validateEmpty('stu_age',"Please enter your age.");
            reason += Site.form.validateEmail('stu_email',"Please enter your valid Email.");
            reason += Site.form.validateEmpty('stu_email',"Please enter your Email.");
            reason += Site.form.validate_num('stu_contact',"Please enter your valid phone number.");
            reason += Site.form.validateEmpty('stu_contact',"Please enter your phone number.");
            reason += Site.form.validateEmpty('stu_address',"Please enter your address.");
            reason += Site.form.validateEmpty('stu_father_name',"Please enter your father's name.");
            reason += Site.form.validate_num('stu_father_contact',"Please enter valid phone number.");
            reason += Site.form.validateEmpty('stu_father_contact',"Please enter phone number.");
            reason += Site.form.validateEmpty('stu_mother_name',"Please enter your mother's name.");
            reason += Site.form.validate_num('stu_mother_contact',"Please enter valid phone number.");
            reason += Site.form.validateEmpty('stu_mother_contact',"Please enter phone number.");
            reason += Site.form.validateEmpty('stu_father_occupa',"Please enter your father's occupation.");
            reason += Site.form.validateEmpty('stu_father_income',"Please enter your father's income.");
            reason += Site.form.validateEmpty('student_password',"Please enter your password.");
            reason += Site.form.con_pass_check('student_confirm_password', 'student_password', "Confirm password does not match with password.");
            reason += Site.form.validateEmpty('student_confirm_password',"Please enter your confirm password.");
            reason += Site.form.is_checked('stu_terms_conditions',"Please check this terms & conditions.");

            var profile_pic = document.getElementById("stu_profile_picture").files[0];
            var adhaar_file = document.getElementById("stu_adhaar_doc").files[0];
            var hs_file = document.getElementById("stu_hs_doc").files[0];
            var parentincome_file = document.getElementById("stu_parent_income_doc").files[0];
            var secondary_file = document.getElementById("stu_secondary_doc").files[0];
            var graduation_file = document.getElementById("stu_graduation_doc").files[0];

            if(profile_pic){
                fname = profile_pic.name;
                fnameArr = fname.split(".");
                profile_pic_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Please choose your profile picture');
                return false;
            }

            if(adhaar_file){
                fname = adhaar_file.name;
                fnameArr = fname.split(".");
                adhaar_file_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Please choose your Aadhar Document');
                return false;
            }
            
            if(hs_file){
                fname = hs_file.name;
                fnameArr = fname.split(".");
                hs_file_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else
            {
                if(jQuery('#std_hs_status').val()=='Passed')
                {
                    alert('Please attach valid Higher Secondary documnet');
                    return false;
                }
            }

            if(parentincome_file){
                fname = parentincome_file.name;
                fnameArr = fname.split(".");
                parentincome_file_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Please choose your parent income certificate');
                return false;
            }

            if(secondary_file){
                fname = secondary_file.name;
                fnameArr = fname.split(".");
                secondary_file_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }
            else
            {
                if(jQuery('#std_secondary_status').val()=='Passed')
                {
                    alert('Please attach your 10th class documnet');
                    return false;
                }
            }


            if(graduation_file){
                fname = graduation_file.name;
                fnameArr = fname.split(".");
                graduation_file_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else
            {
                if(jQuery('#std_graduation_status').val()=='Passed')
                {
                    alert('Please attach documnet')
                }
            }

            if ( profile_pic && Site.constant.allowed_files_ext.indexOf(profile_pic_ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if ( adhaar_file && Site.constant.allowed_files_ext.indexOf(adhaar_file_ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if ( hs_file && Site.constant.allowed_files_ext.indexOf(hs_file_ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if ( parentincome_file && Site.constant.allowed_files_ext.indexOf(parentincome_file_ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if ( secondary_file && Site.constant.allowed_files_ext.indexOf(secondary_file_ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if ( graduation_file && Site.constant.allowed_files_ext.indexOf(graduation_file_ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if( reason == "" ){
                jQuery(sign_up_button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.student_register(data, profile_pic, adhaar_file, hs_file, parentincome_file, secondary_file, graduation_file, function( response ){
                    that.find('.error').html('');
                    if(response.error){         
                        jQuery('#student-sign-up').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(sign_up_button).html('Submit').removeAttr('disabled');
                    }else{  
                        jQuery('#student-sign-up').removeClass('row_error').addClass('success').html(response.msg);
                        jQuery('#student_reg_form')[0].reset();     
                        /*$(sign_up_button).val('Success..').removeAttr('disabled');
                        if(response.url)
                            document.location = response.url;
                        else
                            document.location.reload();*/
                                location.reload();
                    }
                });
            }
        return false;       
    });

    jQuery('#student_bioupdate_form').submit(function(){
        var that = jQuery(this),
            student_bioupdate_btn = jQuery('#student_bioupdate_btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            // console.log(data);
            var reason = ""; 

            reason += Site.form.validateEmpty('stu_name',"Please enter your name.");
            reason += Site.form.validate_num('stu_contact',"Please enter your valid phone number.");
            reason += Site.form.validateEmpty('stu_contact',"Please enter your phone number.");
            reason += Site.form.validateEmpty('stu_address',"Please enter your address.");
            reason += Site.form.validateEmpty('stu_father_name',"Please enter your father's name.");
            reason += Site.form.validate_num('stu_father_contact',"Please enter valid phone number.");
            reason += Site.form.validateEmpty('stu_father_contact',"Please enter phone number.");
            reason += Site.form.validateEmpty('stu_mother_name',"Please enter your mother's name.");
            reason += Site.form.validate_num('stu_mother_contact',"Please enter valid phone number.");
            reason += Site.form.validateEmpty('stu_mother_contact',"Please enter phone number.");
            reason += Site.form.validateEmpty('stu_father_occupa',"Please enter your father's occupation.");
            reason += Site.form.validateEmpty('stu_father_income',"Please enter your father's income.");

            if( reason == "" ){
                jQuery(student_bioupdate_btn).val('Please wait..').attr('disabled', 'disabled');
                Site.user.student_bio_update(data, function( response ){
                    that.find('.error').html('');
                    if(response.error){         
                        jQuery('#student-bioupdate-msg').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(student_bioupdate_btn).val('Update').removeAttr('disabled');
                    }else{  
                        jQuery('#student-bioupdate-msg').removeClass('row_error').addClass('success').html(response.msg);    
                        jQuery(student_bioupdate_btn).val('Update').removeAttr('disabled');
                        /*if(response.url)
                            document.location = response.url;
                        else
                            document.location.reload();*/
                    }
                });
            }
        return false;       
    });

    jQuery('#student_edu_update').submit(function(){
        var that = jQuery(this),
            student_update_btn = jQuery('#student_edu_update_btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            // console.log(data);

            jQuery(student_update_btn).val('Please wait..').attr('disabled', 'disabled');
            Site.user.student_edu_update(data, function( response ){
                that.find('.error').html('');
                if(response.error){         
                    jQuery('#student-update-msg').removeClass('success').addClass('row_error').html(response.msg);  
                    jQuery(student_update_btn).val('Update').removeAttr('disabled');
                }else{  
                    jQuery('#student-update-msg').removeClass('row_error').addClass('success').html(response.msg);    
                    jQuery(student_update_btn).val('Update').removeAttr('disabled');
                    /*if(response.url)
                        document.location = response.url;
                    else
                        document.location.reload();*/
                }
            });
        return false;       
    });

    jQuery('#stu_dob').change(function(){
        var selDate = jQuery(this).val();
        var dob = new Date(selDate);
        var today = new Date();
        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        jQuery('#stu_age').val(age);
    });

    jQuery('#member-signin-form').submit( function(){
        var $that = jQuery(this),
            login_button = jQuery('#signin_btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            var reason = "";
             
            reason += Site.form.validateEmpty( 'user_email', "Please enter your email" );
            reason += Site.form.validateEmpty( 'user_password', "Please enter your password" );
            
            if( reason == "" ){ 
                jQuery(login_button).html('Please Wait...').attr( 'disabled', 'disabled' );
                Site.user.user_login( data, function( response ){
                    $that.find('.error').html('');
                    if( response.error ){
                        jQuery('#sign_in').removeClass('success').addClass('row_error').html(response.msg);
                        jQuery(login_button).html('LOGIN').removeAttr('disabled');
                    }else{
                        login_redirect_url = response.url;                  
                        jQuery(login_button).html('Success..');
                        if(login_redirect_url)
                            document.location = login_redirect_url;
                        else
                            document.location.reload();
                    }
                });
            }
        return false;
    });

    jQuery('#forgot_pass_form').submit(function(){
        var that =this,
            button = jQuery('#send_email_button'),
            data = Site.input.serializeToObject( jQuery( this ).serialize());
        
            var reason = ""; 
            
            reason += Site.form.validateEmail('user_email',"Please enter valid email.");    
            reason += Site.form.validateEmpty('user_email',"Please enter your email."); 
                    
            if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.forget_pass(data, function( response ){
                    if(response.error){
                        //alert(response.msg);
                        jQuery('#forget_pass').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Send instructions').removeAttr('disabled');
                    }else{
                        //alert(response.msg);
                        jQuery('#forget_pass').removeClass('error').addClass('success').html(response.msg);
                        jQuery(that)[0].reset();
                        jQuery(button).html('Send instructions').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });
    
    jQuery('#reset_pass_form').submit(function(){
        var that =this,
            button = jQuery('#reset_pass_button'),
            data = Site.input.serializeToObject( jQuery( this ).serialize());        
        var reason = ""; 
                
        reason += Site.form.validateEmpty('new_password',"Please enter new passowrd.");
        reason += Site.form.con_pass_check('new_password_confirm', 'new_password', "Confirm password and new password does not match.");        
        reason += Site.form.validateEmpty('new_password_confirm',"Please enter confirm new password."); 
                
        if( reason == "" ){
            jQuery(button).html('Please wait..').attr('disabled', 'disabled');
            Site.user.reset_pass(data, function( response ){
                if(response.error){
                    jQuery('#reset_pass').removeClass('success').addClass('row_error').html(response.msg);   
                    jQuery(button).html('Reset Password').removeAttr('disabled');
                }else{
                    //jQuery('#reset_pass').removeClass('error').addClass('success').html(response.msg);
                    jQuery(that)[0].reset();
                    jQuery(button).html('Success..').removeAttr('disabled');
                    if(response.url){
                        document.location = response.url;
                    }else{
                        document.location.reload();
                    }
                }
            });
        }
        return false;       
    });

    jQuery('#raise-request-form').submit(function(){
        var that = jQuery(this),
            button = jQuery('#raise-request-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            //console.log(data);
            
            var reason = ""; 

            reason += Site.form.validateEmpty('request_for_payment',"Please select request for payment");
            reason += Site.form.validate_num('scholar_amount',"Enter valid amount");
            reason += Site.form.validateEmpty('scholar_amount',"Enter scholarship amount");
            reason += Site.form.validateEmpty('request_description',"Enter request description");
            
            var file = document.getElementById("scholar_requestraise_bill").files[0];
            
            if(file){
                fname = file.name;
                fnameArr = fname.split(".");
                ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Upload Scholarship request bill. Allowed only:jpg, jpeg, png');
                return false;
            }
            if ( file && Site.constant.allowed_files_ext.indexOf(ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.raise_request(data, file, function( response ){
                    if(response.error){         
                        jQuery('#raise-request').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }else{  
                        jQuery('#raise-request').removeClass('row_error').addClass('success').html(response.msg);
                        jQuery(that)[0].reset();
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });

    jQuery('#confirm-request-form').submit(function(){
        var that = jQuery(this),
            button = jQuery('#confirm-request-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            //console.log(data);
            
            var reason = ""; 

            reason += Site.form.validate_num('scholar_confirmed_amount',"Enter valid amount");
            reason += Site.form.validateEmpty('scholar_confirmed_amount',"Enter confirmed scholarship amount");
            reason += Site.form.validateEmpty('confirmed_for_payment',"Select your confirmed scholarship");
            
            var file = document.getElementById("scholar_confirmed_bill").files[0];
            
            if(file){
                fname = file.name;
                fnameArr = fname.split(".");
                ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Upload confirmed scholarship bill. Allowed only:jpg, jpeg, png');
            }
            if ( file && Site.constant.allowed_files_ext.indexOf(ext) == -1) {
                alert('File type is not allowed.Allowed only:jpg, jpeg, png');
                return false;
            }else if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.confirmed_request(data, file, function( response ){
                    if(response.error){         
                        jQuery('#confirm-request').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }else{  
                        jQuery('#confirm-request').removeClass('row_error').addClass('success').html(response.msg);
                        jQuery(that)[0].reset();
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });

    jQuery('#approve-request-form').submit(function(){
        var that = jQuery(this),
            button = jQuery('#approve-request-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            //console.log(data);
            
            var reason = ""; 

            reason += Site.form.validateEmpty('approve_request_payment',"Please select request for payment");
            reason += Site.form.validate_num('approve_amount',"Enter valid amount");
            reason += Site.form.validateEmpty('approve_amount',"Enter scholarship amount");
            reason += Site.form.validateEmpty('approve_status',"Select approve status");
            
            if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.approve_request(data, function( response ){
                    if(response.error){         
                        jQuery('#approve-request').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Approve').removeAttr('disabled');
                    }else{  
                        jQuery('#approve-request').removeClass('row_error').addClass('success').html(response.msg);
                        jQuery(that)[0].reset();
                        jQuery(button).html('Approve').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });

    jQuery('#account-credit-form').submit(function(){
        var that = jQuery(this),
            button = jQuery('#account-credit-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            //console.log(data);
            
            var reason = ""; 

            reason += Site.form.validateEmpty('cr_date',"Please enter credit date");
            reason += Site.form.validateEmpty('cr_amount_received',"Enter received amount");
            reason += Site.form.validateEmpty('cr_source',"Enter credit source");
            reason += Site.form.validateEmpty('cr_received_from',"Enter received from");
            reason += Site.form.validateEmpty('cr_purpose',"Enter credit purpose");
            reason += Site.form.validateEmpty('cr_pan_number',"Enter PAN number");
            reason += Site.form.validateEmpty('cr_transaction_type',"Select transaction type");
            reason += Site.form.validateEmpty('cr_account_head',"Select account head");
            
            if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.account_credit(data, function( response ){
                    if(response.error){         
                        jQuery('#account-credit-msg').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }else{  
                        jQuery('#account-credit-msg').removeClass('row_error').addClass('success').html(response.msg);
                        jQuery(that)[0].reset();
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });

    jQuery('#credit-search-form').submit(function(){
        var that = jQuery(this),
            button = jQuery('#search-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            // console.log(data);
            
            var reason = ""; 

            reason += Site.form.validateEmpty('search_name',"Please enter search for");
            
            if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.search_credit(data, function( response ){
                    if(response.error){         
                        jQuery('#search-credit-msg').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }else{  
                        // jQuery('#search-credit-msg').removeClass('row_error').addClass('success').html(response.msg);
                        // jQuery(that)[0].reset();
                        jQuery('#credit-list-wrap').html(response.html);
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });

    jQuery('.del-credit-record').click(function(){
        var data = jQuery(this).attr('data-id');
        // alert(data);
        if(confirm('Are you sure you want to delete this item?')){
            Site.user.del_credit(data, function( response ){
                if(response.error){ 
                    alert('Something wrong. Record not deleted');
                }else{  
                    alert(response.msg);
                    document.location.reload();
                }
            });
        }
    });

    jQuery('#cr_source').change(function(){
        var val = jQuery(this).val();
        if(val == 'Donation' || val == 'Donation on Kind'){
            jQuery('#cr_receipt_no').val('GENNTFSR');
        }else{
            jQuery('#cr_receipt_no').val('');
        }
    }); 

    jQuery('#generate-donation-receipt').click(function(){
        var data = jQuery(this).attr('data-rid');
        Site.user.gen_receipt(data, function( response ){
            if(response.error){ 
                alert('Something wrong. Record not deleted');
            }else{ 
                jQuery('#cr_receipt_no').val(response.value);
            }
        });
    });

    jQuery('#account-debit-form').submit(function(){
        var that = jQuery(this),
            button = jQuery('#account-debit-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            //console.log(data);
            
            var reason = ""; 

            reason += Site.form.validateEmpty('dr_date',"Please enter debit date");
            reason += Site.form.validateEmpty('dr_amount_spent',"Enter spent amount");
            reason += Site.form.validateEmpty('dr_purpose',"Enter debit purpose");
            reason += Site.form.validateEmpty('dr_paid_to',"Enter paid to");
            reason += Site.form.validateEmpty('dr_account_head',"Enter account head");
            reason += Site.form.validateEmpty('dr_transaction_type',"Enter transaction type");
            
            if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.account_debit(data, function( response ){
                    if(response.error){         
                        jQuery('#account-debit-msg').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }else{  
                        jQuery('#account-debit-msg').removeClass('row_error').addClass('success').html(response.msg);
                        jQuery(that)[0].reset();
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });

    jQuery('.del-debit-record').click(function(){
        var data = jQuery(this).attr('data-id');
        // alert(data);
        if(confirm('Are you sure you want to delete this item?')){
            Site.user.del_debit(data, function( response ){
                if(response.error){ 
                    alert('Something wrong. Record not deleted');
                }else{  
                    alert(response.msg);
                    document.location.reload();
                }
            });
        }
    });

    jQuery('.add_more_member_btn').click(function(){
        var index = jQuery('.overning_mem_details').length;
        var $html = '';
        $html += '<div class="row overning_mem_details mt-3">\
            <div class="col">\
                <div class="form-group mb-3">\
                    <!-- <label for="member_designation">Designation : </label> -->\
                    <input type="text" class="form-control" name="member_designation[]" id="member_designation_'+index+'" placeholder="Designation">\
                    <div class="field_error" id="member_designation_'+index+'_error"></div>\
                </div>\
            </div>\
            <div class="col">\
                <div class="form-group mb-3">\
                    <!-- <label for="member_name">Name : </label> -->\
                    <input type="text" class="form-control" name="member_name_'+index+'" id="member_name_'+index+'" placeholder="Name">\
                    <div class="field_error" id="member_name_'+index+'_error"></div>\
                </div>\
            </div>\
            <div class="col">\
                <div class="form-group mb-3">\
                    <!-- <label for="member_email">Email : </label> -->\
                    <input type="email" class="form-control" name="member_email_'+index+'" id="member_email_'+index+'" placeholder="Email">\
                    <div class="field_error" id="member_email_'+index+'_error"></div>\
                </div>\
            </div>\
            <div class="col">\
                <div class="form-group mb-3">\
                    <!-- <label for="member_phone">Phone Number : </label> -->\
                    <input type="tel" class="form-control" name="member_phone_'+index+'" id="member_phone_'+index+'" placeholder="Phone number">\
                    <div class="field_error" id="member_phone_'+index+'_error"></div>\
                </div>\
            </div>\
            <div class="col">\
                <div class="form-group mb-3">\
                    <!-- <label for="member_address">Address : </label> -->\
                    <input type="text" class="form-control" name="member_address_'+index+'" id="member_address_'+index+'" placeholder="Address">\
                    <div class="field_error" id="member_address_'+index+'_error"></div>\
                </div>\
            </div>\
            <div class="col">\
                <a href="javascript:void(0)" class="member_delete_btn" style="color:#f00;"><i class="fas fa-trash-alt"></i></a>\
            </div>\
        </div>';

        jQuery('#governing_mem_details_wrap').append($html);
    });

    jQuery(document).on('click', '.member_delete_btn', function(){
        jQuery(this).parent().parent().remove();
    });

    jQuery('#update-organization-details-form').submit(function(){
        var that = jQuery(this),
            button = jQuery('#org-details-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            // console.log(data); return false;
            
            var reason = ""; 

            reason += Site.form.validateEmpty('org_last_renewal_date',"Please enter last renewal date");

            for(var i = 0; i < data.member_designation.length; i++ ){
                reason += Site.form.validateEmpty('member_designation_'+i,"Enter member designation");
                reason += Site.form.validateEmpty('member_name_'+i,"Enter member name");
                reason += Site.form.validateEmpty('member_email_'+i,"Enter member email");
                reason += Site.form.validateEmpty('member_phone_'+i,"Enter member phone number");
                reason += Site.form.validateEmpty('member_address_'+i,"Enter member address");
            }

            var org_12a_doc = document.getElementById("org_12a_doc").files[0];
            var org_moa_doc = document.getElementById("org_moa_doc").files[0];
            var org_renewalcert_doc = document.getElementById("org_renewalcert_doc").files[0];
            var org_itr7_doc = document.getElementById("org_itr7_doc").files[0];

            if(org_12a_doc){
                fname = org_12a_doc.name;
                fnameArr = fname.split(".");
                org_12a_doc_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Please choose 12A Doc');
                return false;
            }
            if(org_moa_doc){
                fname = org_moa_doc.name;
                fnameArr = fname.split(".");
                org_moa_doc_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Please choose MOA Doc');
                return false;
            }
            if(org_renewalcert_doc){
                fname = org_renewalcert_doc.name;
                fnameArr = fname.split(".");
                org_renewalcert_doc_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Please choose renewal cert Doc');
                return false;
            }
            if(org_itr7_doc){
                fname = org_itr7_doc.name;
                fnameArr = fname.split(".");
                org_itr7_doc_ext = fnameArr[ fnameArr.length -1 ].toLowerCase();
            }else{
                alert('Please choose ITR7 Doc');
                return false;
            }
            
            if ( org_12a_doc && Site.constant.allowed_doc_ext.indexOf(org_12a_doc_ext) == -1) {
                alert('File type is not allowed.Allowed only:pdf, doc, docx');
                return false;
            }else if ( org_moa_doc && Site.constant.allowed_doc_ext.indexOf(org_moa_doc_ext) == -1) {
                alert('File type is not allowed.Allowed only:pdf, doc, docx');
                return false;
            }else if ( org_renewalcert_doc && Site.constant.allowed_doc_ext.indexOf(org_renewalcert_doc_ext) == -1) {
                alert('File type is not allowed.Allowed only:pdf, doc, docx');
                return false;
            }else if ( org_itr7_doc && Site.constant.allowed_doc_ext.indexOf(org_itr7_doc_ext) == -1) {
                alert('File type is not allowed.Allowed only:pdf, doc, docx');
                return false;
            }else if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.org_details_update(data, org_12a_doc, org_moa_doc, org_renewalcert_doc, org_itr7_doc, function( response ){
                    if(response.error){         
                        jQuery('#org-details-up').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }else{  
                        jQuery('#org-details-up').removeClass('row_error').addClass('success').html(response.msg);
                        // jQuery(that)[0].reset();
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });

    jQuery('.donate-from-btn').click(function(){
        jQuery(this).parent().find('.donate-from-wrap').slideToggle();
    });
    jQuery('.spent-to-btn').click(function(){
        jQuery(this).parent().find('.spent-to-wrap').slideToggle();
    });

    jQuery('#member-raise-request-form').submit(function(){
        var that = jQuery(this),
            button = jQuery('#member-raise-request-btn'),
            data = Site.input.serializeToObject( jQuery( this ).serialize() );
            // console.log(data); return false;
            
            var reason = ""; 

            reason += Site.form.validateEmpty('member_raise_request_name',"Please enter your name");
            reason += Site.form.validateEmpty('member_request_for_payment',"Please select request for payment");
            reason += Site.form.validateEmpty('member_request_purpose',"Please enter request purpose");
            reason += Site.form.validate_num('member_request_amount',"Enter valid amount");
            reason += Site.form.validateEmpty('member_request_amount',"Enter request amount");
            reason += Site.form.validateEmpty('member_request_frequency',"Enter request frequency");
            reason += Site.form.validateEmpty('details_beneficiary',"Enter beneficiary details");
            reason += Site.form.validateEmpty('disbursed_date',"Choose disbursed date");
            reason += Site.form.validateEmpty('request_remark',"Enter request remark");

            if(jQuery('#other_request_id').val() != ""){
                reason += Site.form.validateEmpty('member_request_approve_amount',"Enter approve amount");
            }if( reason == "" ){
                jQuery(button).html('Please wait..').attr('disabled', 'disabled');
                Site.user.member_raise_request(data, function( response ){
                    if(response.error){         
                        jQuery('#member-raise-request').removeClass('success').addClass('row_error').html(response.msg);  
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }else{  
                        jQuery('#member-raise-request').removeClass('row_error').addClass('success').html(response.msg);
                        jQuery(that)[0].reset();
                        jQuery(button).html('Submit').removeAttr('disabled');
                    }
                });
            }
        return false;       
    });

    jQuery('.payment-done-btn').click(function(){
        var data = jQuery(this).attr('data-id');
        if(confirm('Are you sure payment is done?')){
            Site.user.payment_done(data, function( response ){
                if(response.error){ 
                    alert(response.msg);
                }else{  
                    alert(response.msg);
                    location.reload(true);
                }
            });
        }
    });

    jQuery('.student-payment-done-btn').click(function(){
        var data = jQuery(this).attr('data-id');
        if(confirm('Are you sure payment is done?')){
            Site.user.stu_payment_done(data, function( response ){
                if(response.error){ 
                    alert(response.msg);
                }else{  
                    alert(response.msg);
                    location.reload(true);
                }
            });
        }
    });
});


// wow = new WOW(
// 	{
// 		boxClass: 'wow',
// 		offset: 0,
// 		mobile: true,
// 		live: true
// 	}
// )
// wow.init();

var Site = {
    constant:{
        allowed_files: [ '*.jpg','*.jpeg', '*.png', '*.pdf', '*.doc', '*.docx', '*.xls', '*.xlsx', '*.txt', '*.rtf' ],
        allowed_files_ext: [ 'jpg','jpeg', 'png' ],
        allowed_doc_ext: [ 'pdf', 'doc', 'docx' ],
    },
    
    ajax: function( action, data, callback ){
        jQuery.post(
            weaversAjax.ajaxurl, {
                action : 'weaversAjax',
                weaversAction : action,
                data: JSON.stringify(data)          
            },
            function(res){
                //console.log(res);
                callback(eval('(' +res+ ')'));   
                window.location.href="/tapassya-new/other-request-dashboard";       
            }
        );
    },
    
    user:{
        member_register: function( data, callback ){
            Site.ajax( 'MemberRegister', data, function(response){
                callback(response);
            });
        },

        student_register: function( data, profile_pic, adhaar_file, hs_file, parentincome_file, secondary_file, graduation_file, callback ){
            formdata = false;
            if (window.FormData) {
                formdata = new FormData();
            }
            //alert(file.type);
            formdata.append("action", 'weaversAjax');
            formdata.append("weaversAction", 'StudentRegister');
            formdata.append("data",JSON.stringify( data)); 
            formdata.append("stu_profile_picture",profile_pic ); 
            formdata.append("stu_adhaar_doc",adhaar_file );
            formdata.append("stu_hs_doc",hs_file );
            formdata.append("stu_parent_income_doc",parentincome_file );
            formdata.append("stu_secondary_doc",secondary_file );
            formdata.append("stu_graduation_doc",graduation_file );
            if (formdata) { 
                jQuery.ajax({
                    url: weaversAjax.ajaxurl,
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        //console.log(res);
                        callback(eval('(' +res+ ')'));
                    }
                });
            }
        },

        student_edu_update: function( data, callback ){
            Site.ajax( 'StudentEduUpdate', data, function(response){
                callback(response);
            });
        },

        student_bio_update: function( data, callback ){
            Site.ajax( 'StudentBioUpdate', data, function(response){
                callback(response);
            });
        },

        organization_register: function( data, supporting_doc, callback ){
            formdata = false;
            if (window.FormData) {
                formdata = new FormData();
            }
            //alert(file.type);
            formdata.append("action", 'weaversAjax');
            formdata.append("weaversAction", 'OrganizationRegister');
            formdata.append("data",JSON.stringify( data)); 
            formdata.append("org_supporting_doc",supporting_doc ); 
            if (formdata) { 
                jQuery.ajax({
                    url: weaversAjax.ajaxurl,
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        //console.log(res);
                        callback(eval('(' +res+ ')'));
                    }
                });
            }
        },

        user_login: function( data, callback ){
            Site.ajax( 'Login', data, function(response){
                callback(response);
            });
        },

        forget_pass: function( data, callback ){
            Site.ajax( 'ForgetPassword', data, function(response){
                callback(response);
            });
        },
        
        reset_pass: function( data, callback ){
            Site.ajax( 'ResetPassword', data, function(response){
                callback(response);
            });
        },

        raise_request: function ( data,  files , callback){           
            formdata = false;
            if (window.FormData) {
                formdata = new FormData();
            }
            //alert(file.type);
            formdata.append("action", 'weaversAjax');
            formdata.append("weaversAction", 'RaiseRequest');
            formdata.append("data",JSON.stringify( data));  
            formdata.append("scholar_requestraise_bill",files );
            if (formdata) { 
                jQuery.ajax({
                    url: weaversAjax.ajaxurl,
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        //console.log(res);
                        callback(eval('(' +res+ ')'));
                    }
                });
            }
        },

        confirmed_request: function ( data,  files , callback){           
            formdata = false;
            if (window.FormData) {
                formdata = new FormData();
            }
            //alert(file.type);
            formdata.append("action", 'weaversAjax');
            formdata.append("weaversAction", 'ConfirmedRequest');
            formdata.append("data",JSON.stringify( data));  
            formdata.append("scholar_confirmed_bill",files );
            if (formdata) { 
                jQuery.ajax({
                    url: weaversAjax.ajaxurl,
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        //console.log(res);
                        callback(eval('(' +res+ ')'));
                    }
                });
            }
        },

        approve_request: function( data, callback ){
            Site.ajax( 'ApproveRequest', data, function(response){
                callback(response);
            });
        },

        account_credit: function( data, callback ){
            Site.ajax( 'AccountCredit', data, function(response){
                callback(response);
            });
        },

        search_credit: function( data, callback ){
            Site.ajax( 'SearchCredit', data, function(response){
                callback(response);
            });
        },

        del_credit: function( data, callback ){
            Site.ajax( 'DelCredit', data, function(response){
                callback(response);
            });
        },

        gen_receipt: function( data, callback ){
            Site.ajax( 'GenReceipt', data, function(response){
                callback(response);
            });
        },

        account_debit: function( data, callback ){
            Site.ajax( 'AccountDebit', data, function(response){
                callback(response);
            });
        },

        del_debit: function( data, callback ){
            Site.ajax( 'DelDebit', data, function(response){
                callback(response);
            });
        },

        org_details_update: function( data, org_12a_doc, org_moa_doc, org_renewalcert_doc, org_itr7_doc, callback ){
            formdata = false;
            if (window.FormData) {
                formdata = new FormData();
            }
            //alert(file.type);
            formdata.append("action", 'weaversAjax');
            formdata.append("weaversAction", 'OrgDetailsUpdate');
            formdata.append("data",JSON.stringify( data)); 
            formdata.append("org_12a_doc",org_12a_doc ); 
            formdata.append("org_moa_doc",org_moa_doc );
            formdata.append("org_renewalcert_doc",org_renewalcert_doc );
            formdata.append("org_itr7_doc",org_itr7_doc );
            if (formdata) { 
                jQuery.ajax({
                    url: weaversAjax.ajaxurl,
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        //console.log(res);
                        callback(eval('(' +res+ ')'));
                    }
                });
            }
        },

        member_raise_request: function( data, callback ){
            Site.ajax( 'MemberRaiseRequest', data, function(response){
                callback(response);
            });
        },

        payment_done: function( data, callback ){
            Site.ajax( 'PaymentDone', data, function(response){
                callback(response);
            });
        },

        stu_payment_done: function( data, callback ){
            Site.ajax( 'StuPaymentDone', data, function(response){
                callback(response);
            });
        },
    },
    
    input : {
        serializeToObject: function( serialize ){
            var fields = serialize.split("&"),
                object = {};
            for(var i in fields){
                var field = fields[i].split("=");
                field[0] = field[0].replace("%5B%5D","");
                if ( ! object[field[0]] ){
                    object[field[0]] = decodeURIComponent(field[1]);
                }else{
                    if ( object[field[0]].constructor === Array ){
                        object[field[0]].push(field[1])
                    }else{
                        object[field[0]] = [ object[field[0]], field[1] ];
                    }
                }
                //alert(decodeURIComponent(field[1]));
            }
            return object;
        }
    },
    
    form : {
        
        data: {
            addListing:false,
        },
        trim: function(s){
            return s.replace(/^\s+|\s+$/, '');
        },
        validateImage: function ( field, msg ) {
            var error = "",
                fld = document.getElementById( field );
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if (jQuery.inArray( fld.value.split('.').pop().toLowerCase(), fileExtension) == -1 ){
                error = msg;
                this.display_msg(field,msg);
            }else{
                this.clr_msg(field,msg);
            }
            return error;  
        },      
        validateEmpty: function (field,msg) {
            var error = "",
                fld=document.getElementById(field);
            if (fld.value.length == 0 ) {
                error = msg;
                this.display_msg(field,msg);
            } else {
                this.clr_msg(field,msg);
            }
            return error;  
        },
        
        validatePhone: function (field,msg) {
            var error = "",
                fld=document.getElementById(field),
                matcher= /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            if (fld.value.length == 0 ) {
                this.clr_msg(field,msg);
            } else {
            if(!fld.value.match(matcher)) {
                error = msg;
                this.display_msg(field,msg);
            } else {
                this.clr_msg(field,msg);
            }
            }
            return error;  
        },
        
        validateEmail: function (field,msg) {
            var error="",
                fld = document.getElementById(field),
                tfld = this.trim(fld.value),
                emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ,
                illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
            if (!emailFilter.test(tfld)) {              //test email for illegal characters
                error = msg;
                this.display_msg(field,error);
            } else if (fld.value.match(illegalChars)) {
                error = msg;
                this.display_msg(field,error);
            } else{       
                this.clr_msg(field,msg);
            }
            return error;
        },
        
        validate_num: function ( field, msg ) {
            var error = "",
                fld=document.getElementById(field),
                stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');
                                        
            if (isNaN(parseInt(stripped))){
                error = msg;
                this.display_msg(field,error);
            }else {        
                this.clr_msg(field,msg);
            }
            return error;
        },
        
        con_pass_check: function ( field, field1, msg){
            var error = "",
                fld=document.getElementById(field),
                fld1=document.getElementById(field1);           
            if (fld.value.length==0 || fld1.value.length==0 || fld.value!=fld1.value  ) {
                error = msg;
                this.display_msg(field,error);
            }else {       
                this.clr_msg(field,msg);
            }
            return error;
        },
        
        validate_fixedLength: function ( field, len, msg ) {
            var error = ""; 
            var fld = document.getElementById( field );
            var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');    
            var len1 = parseInt( len );
            if (!( stripped.length == len1 ) ) {
                error = msg;
                this.display_msg( field, error );
            }else {
                this.clr_msg( field, msg );
            }
            return error;
        },
        
        is_checked: function(field,msg){
            var error = "";
            if(!jQuery('#'+field).is(":checked")){
                error = msg;
                this.display_msg(field,error);
            }else {
                this.clr_msg(field,msg);
            }
            return error;
        },
        
        display_msg: function (field,msg){
            var divname = field+"_error";
            if(Site.form.data.addListing){
                jQuery('#'+field).parent().addClass('error_input');
            }else{
                jQuery('#'+field).addClass('error_input');
            }
            jQuery('#'+divname).addClass('row_error').html(msg);
        },
                
        clr_msg: function (field,msg){
            var divname=field+"_error",
                div_text=jQuery('#'+divname).html();
            if( msg == div_text ){
                jQuery('#'+divname).removeClass('row_error').html('');
                if(Site.form.data.addListing){
                    jQuery('#'+field).parent().removeClass('error_input');
                }else{
                    jQuery('#'+field).removeClass('error_input');
                }
            }           
        }
    } 
};


//Account Debit datatable//
jQuery(document).ready(function($) {
    jQuery('#credit-list-wrap').DataTable({
        "responsive": true, 
        "lengthChange": false, 
        "autoWidth": false,
        "dom": 'Bfrtip',
        "buttons": [
            'excel'
        ],
        "stateSave": true,
        "columnDefs": [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 }
        ]
    });

    // var table = $('.table.table-striped').DataTable({
    //     "responsive": true,
    //     "lengthChange": false,
    //     "autoWidth": false,
    //     "dom": 'Bfrtip',
    //     "buttons": [
    //         'excel'
    //     ],
    //     "stateSave": true,
    //     "columnDefs": [
    //         { responsivePriority: 1, targets: 0 },
    //         { responsivePriority: 2, targets: -1 }
    //     ]
    // });

    // // Disable the scroll options
    // table.off('scroll');


    //student-registration docs upload
    var statusSelect = $("#std_secondary_status");
    var hsFileInput = $("#stu_hs_doc");
    var graduationFileInput = $("#stu_graduation_doc");
    var secondaryFileInput = $("#stu_secondary_doc");

    statusSelect.on("change", function() {
        if ($(this).val() === "Pursuing") {
            hsFileInput.prop("disabled", true);
            graduationFileInput.prop("disabled", true);
            secondaryFileInput.prop("disabled", true);
        } else {
            hsFileInput.prop("disabled", false);
            graduationFileInput.prop("disabled", false);
            secondaryFileInput.prop("disabled", false);
        }
    });

});


/****SHOUVIK's Code */

//Account Credit details edit ajax
jQuery(document).ready(function($) {
    
    jQuery('.edit-credit').on('click', function(e) {
        e.preventDefault();

        var creditID = $(this).data('credit-id');
        // var credit_date = $(this).data('credit-date'); 
        // var amount_received = $(this).data('amount-recived'); 
		// alert(amount_received);
        var url = '?credit-id=' + creditID;

        jQuery.ajax({
            url: weaversAjax.ajaxurl,
            type: 'POST',
            data: { 
                action: 'account_credit_edit_ajax',
                creditID: creditID
            }, 
            success: function(response) {
                // Handle the response from the server here
                console.log(response);
                $('#creditEditModal .modal-content').html(response);
                $('#creditEditModal').modal('show');
            },
            error: function(xhr, textStatus, errorThrown) {
                // Handle errors here
                console.error(errorThrown);
            }
        });

        window.history.pushState({}, '', url);
    });
});
