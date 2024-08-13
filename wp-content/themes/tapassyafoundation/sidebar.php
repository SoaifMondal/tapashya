<section class="contact-form-sec common-padding">
    <div class="container">
        <div class="contact-form-info">
            <div class="section-title text-center pb-3">
                <?php if (!empty(get_field("_cont_title", "option"))) { ?>
                    <h2><?php echo get_field('_cont_title', 'option') ?></h2>
                <?php } ?>
                <?php if (!empty(get_field("_con_company_name", "option"))) { ?>
                    <p><strong><?php echo get_field('_con_company_name', 'option') ?></strong> <?php echo get_field('_con_contact_details', 'option') ?></p>
                <?php } ?>
                <?php if (!empty(get_field("_con_registration_title", "option"))) { ?>
                    <p><strong><?php echo get_field('_con_registration_title', 'option') ?></strong> <?php echo get_field('_conregistration_details', 'option') ?></p>
                <?php } ?>
            </div>
            <?php
            if (get_field('contact_form_shortcode', 'option')) {
                echo do_shortcode(get_field('contact_form_shortcode', 'option'));
            }
            ?>
        </div>
    </div>
</section>