<?php
//Template Name:Layout:Login Template
get_header();
get_template_part('template-parts/bannersection');
?>

<section class="contact-form-sec sign-in-form common-padding">
  <div class="container">
    <div class="contact-form-info">
      <div class="section-title text-center pb-3">
        <h2>Sign In to Nabadiganta Tapassya Foundation</h2>
      </div>
      <form method="post" id="form_data">
        <div class="row form-info">
          <div class="col-lg-12">
            <div class="form-group">
              <input type="email" id="user_email" name="user_email" class="form-control"
                placeholder="Enter email or username*">
              <div class="col-sm-5 messages"></div>

            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter password*">
              <span class="show_pass register_show_pass1"> <i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
              <span class="error" id="error-password_inst"></span>
              <!-- <div class="col-sm-5 messages"></div>
              <i class="fas fa-eye" id="togglePassword" style="cursor: pointer;"></i> -->
            </div>
          </div>
          <div class="col-lg-12">
            <div class="forgot-text form-group text-end">
              <a href="<?php the_permalink(686) ?>">Forgot Password?</a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group text-center p-0 m-0">
              <input type="submit" value="Sign In" class="btn">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<script>

jQuery(document).ready(function($) {
        jQuery(".register_show_pass1").on('click', function() {
            var passwordField = jQuery(this).siblings('.form-control');
            var fieldType = passwordField.attr('type');

            if (fieldType === 'password') {
                passwordField.attr('type', 'text');

                jQuery(this).find('.eye_icon').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                
                passwordField.attr('type', 'password');
                jQuery(this).find('.eye_icon').removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });


  jQuery(document).ready(function () {
    const togglePassword = document.querySelector('#togglePassword');

    const password = document.querySelector('#user_password');

    jQuery("#togglePassword").click(function(){
      console.log('click');
     var type= password.getAttribute('type');
    // console.log(type);
     if(type=='password'){
      // console.log('password');
      jQuery("#user_password").attr('type','text');
      // jQuery("#togglePassword").removeClass('fa-eye');
      // jQuery('#togglePassword').addClass('fa-eye-slash');
     }else{
      console.log('text');
      jQuery("#user_password").attr('type','password');
      // jQuery("#togglePassword").removeClass('fa-eye-slash');
      // jQuery('#togglePassword').addClass('fa-eye');
     }

      // Toggle the type attribute
      // const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      // password.setAttribute('type', type);
      // // Log current state for debugging
      // console.log('Password field type:', password.getAttribute('type'));

      // // Toggle the icon class
      // if (type === 'text') {
      //   this.classList.remove('fa-eye');
      //   this.classList.add('fa-eye-slash');
      // } else {
      //   this.classList.remove('fa-eye-slash');
      //   this.classList.add('fa-eye');
      // }

      // // Log current icon class for debugging
      // console.log('Icon class:', this.className);


    });



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
      user_email: {
        // Email is required
        presence: true,
        // and must be an email (duh)
        email: true
      }, user_password: {
        // Password is also required
        presence: true,
        // And must be at least 5 characters long
        length: {
          minimum: 5
        }
      },
    };


    // Hook up the form so we can prevent it from being posted
    var form = document.querySelector("form#form_data");
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
      _.each(form.querySelectorAll("input[name], select[name]"), function (input) {
        // Since the errors can be null if no errors were found we need to handle
        // that
        showErrorsForInput(input, errors && errors[input.name]);
      });
    }

    // Shows the errors for a specific input
    function showErrorsForInput(input, errors) {
      // This is the root of the input
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
      var form = document.getElementById('form_data');
      var formData = new FormData(form);
      formData.append('action', 'handle_user_signup');
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
          const url=jsonObject.url;
          if (msg) {
            Swal.fire({
              title: "Successfully Log in!",
              text: msg,
              icon: "success",
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
          if(url){
          const base_url=window.location.origin+url;
          window.location.href = base_url;
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error('AJAX Error: ' + textStatus + ': ' + errorThrown);
        }
      });
    }


  });

</script>




<script>
  jQuery(document).ready(function () {

  });
</script>
<?php get_footer(); ?>