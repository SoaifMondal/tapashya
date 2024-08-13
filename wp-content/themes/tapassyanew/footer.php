<footer class="footer-section">
    <div class="container">
        <div class="footer-box">


        </div>
        <div id="subscription_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="subscribe_now text-center">
                            <h4><?php echo get_theme_value('weaversweb_footer_memberheading');?></h4>
                            <p><?php echo get_theme_value('weaversweb_footer_memberdetails');?></p>
                            <div class="subscribe_form">
                                <?php echo do_shortcode('[contact-form-7 id="9" title="Membership Form"]'); ?>
                            </div>
                            <a href="<?php echo get_theme_value('weaversweb_footer_facebooklink');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt=""></a>
                            <p><?php echo get_theme_value('weaversweb_footer_contactmail_text');?></p>
                            <p><?php echo get_theme_value('weaversweb_footer_copyright');?></p>
                            <p>Technology Partner <a href="https://weavers-web.com/" target="_blank">Weavers Web Solutions Private Limited</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!--footer section-->
<?php wp_footer(); ?>
</body>
</html>