<?php
//Template name: Donate now
get_header();
$page_id = get_the_id();
?>
<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->

<div class="online-donation-top-sec common-padding-top">
    <div class="container">
        <div class="section-title text-center">
            <?php the_content() ?>
        </div>
        <div class="generously-info text-center">
            <?php if (!empty(get_field("_dntitle", $page_id))) { ?>
                <h4><?php echo get_field('_dntitle', $page_id); ?></h4>
            <?php } ?>
            <?php if (!empty(get_field("donation_reciept_information_", $page_id))) { ?>
                <p><?php echo get_field('donation_reciept_information_', $page_id); ?></p>
            <?php } ?>

            <?php
            $payment_charges_information = get_field('payment_charges_information', $page_id);

            if ($payment_charges_information) {
                echo wpautop($payment_charges_information);
            }
            ?>

            <?php
            $acc_de__address_detls = get_field('acc_de__address_detls', $page_id);

            if ($acc_de__address_detls) {
                echo wpautop($acc_de__address_detls);
            }
            ?>
        </div>

    </div>
</div>


<section class="contact-form-sec online-donation common-padding">
    <div class="container">
        <div class="contact-form-info">
            <?php if (!empty(get_field("_frmtitle", $page_id))) { ?>
                <div class="section-title text-center pb-3">
                    <h2><?php echo get_field('_frmtitle', $page_id); ?></h2>
                </div>
            <?php } ?>
            <form>
                <div class="row form-info">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name*">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address*">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number*">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" placeholder="Address *"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-select form-group">
                            <select class="select-box" name="" id="">
                                <option value="Donor National UID Type*">Donor National UID Type*</option>
                                <option value="Select-one">Select-one</option>
                                <option value="Select-two">Select-two</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Donor National UID*">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-select form-group">
                            <select class="select-box" name="" id="">
                                <option value="Donor National UID Type*">Donor National UID Type*</option>
                                <option value="Select-one">Select-one</option>
                                <option value="Select-two">Select-two</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Amount*">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group text-center p-0 m-0">
                            <input type="submit" value="Donate Now" class="btn">
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</section>
<?php
get_footer();
?>