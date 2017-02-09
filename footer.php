<?php  ?>



</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="section">
        <div class="contact-info">
            <div class="col-xl-12">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-md-12  text-md-center text-lg-left contact-widget">
                            <h4>Contact Us</h4>
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-12 icon-md-center">
                                            <div class="email-icon"></div>
                                        </div>
                                        <div class="col-xl-9">
                                            <p>Send an email</p>
                                            <a href="mailto:<?php echo get_option('email', 'info@igniteme.example.com') ?>"><?php echo get_option('email', 'info@igniteme.example.com') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 call-us">

                                    <div class="row">
                                        <div class="col-xl-4 col-md-12 icon-md-center">
                                            <div class="phone-icon"></div>
                                        </div>
                                        <div class="col-xl-8">
                                            <p>Call us</p>
                                            <a href="callto:<?php echo get_option('phone', 'xxxx xxxx xxxx') ?>"><?php echo get_option('phone', 'xxxx xxxx xxxx') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="contact-widget col-xl-4 col-md-12 text-md-center text-lg-left">
                            <h4>Follow Us</h4>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2 soc-icon">
                                        <a href="<?php echo get_option('google-plus', '#') ?>">
                                            <div class="soc-google-pluse"></div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 soc-icon">
                                        <a href="<?php echo get_option('twitter', '#') ?>">
                                            <div class="soc-twitter"></div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 soc-icon">
                                        <a href="<?php echo get_option('linkedin', '#') ?>">
                                            <div class="soc-linkedin"></div>
                                        </a>
                                    </div>

                                    <div class="col-md-2 soc-icon">
                                        <a href="<?php echo get_option('facebook', '#') ?>">
                                            <div class="soc-facebook"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xl-8 col-md-12 text-md-center text-lg-left contact-widget subscribe-widget">
                            <h4>SUBSCRIBE</h4>
                            <div class="row">
                                <div class="col-xl-6 col-md-10 offset-md-1 offset-lg-0">
                                    <div class="input-group">
                                        <input placeholder="Email Address" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <a href=""><button class="subscribe-button">SUBSCRIBE</button></a>
                                </div>
                            </div>
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