<?php  ?>



</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="section">
        <div class="contact-info">
            <div class="col-xl-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 text-lg-left contact-widget">
                            <h4>Contact Us</h4>
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-sm-2 col-lg-3">
                                            <div class="email-icon"></div>
                                        </div>
                                        <div class="col-sm-10 col-lg-9">
                                            <p>Send an email</p>
                                            <a href="mailto:<?php echo get_option('email', 'info@igniteme.example.com') ?>"><?php echo get_option('email', 'info@igniteme.example.com') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 call-us">

                                    <div class="row">
                                        <div class="col-sm-2 col-lg-3">
                                            <div class="phone-icon"></div>
                                        </div>
                                        <div class="col-sm-10 col-lg-9">
                                            <p>Call us</p>
                                            <a href="callto:<?php echo get_option('phone', 'xxxx xxxx xxxx') ?>"><?php echo get_option('phone', 'xxxx xxxx xxxx') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="contact-widget col-lg-4  col-md-6 text-lg-left">
                            <h4>Follow Us</h4>
                            <div class="row social-icons">
                                <div class="col-3 soc-icon">
                                    <a href="<?php echo get_option('google-plus', '#') ?>">
                                        <div class="soc-google-pluse social"></div>
                                    </a>
                                </div>

                                <div class="col-3 soc-icon">
                                    <a href="<?php echo get_option('twitter', '#') ?>">
                                        <div class="soc-twitter social"></div>
                                    </a>
                                </div>

                                <div class="col-3 soc-icon">
                                    <a href="<?php echo get_option('linkedin', '#') ?>">
                                        <div class="soc-linkedin social"></div>
                                    </a>
                                </div>

                                <div class="col-3 soc-icon">
                                    <a href="<?php echo get_option('facebook', '#') ?>">
                                        <div class="soc-facebook social"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 col-md-12 text-lg-left contact-widget subscribe-widget">
                            <h4>SUBSCRIBE</h4>
                            <?php

                            if( function_exists( 'mc4wp_show_form' ) ) {
                                mc4wp_show_form();
                            }
                            else {
                                _e( '<p class="error_message">Please activate Mailchimp For WP plugin. </p>', 'ignition' );

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="footer">
            <div class="container">
                <div class=" text-right copyright">
                    <p><?php echo get_option('copyright', 'ignition') ?></p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>