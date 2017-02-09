<?php
/*
Template Name: Homepage
 */
get_header();

?>

<div class="col-xl-12 picture-header">
    <div class="container header-message">
        <h2><?php echo get_option('header_text', 'Performance has never looked this good') ?></h2>
    </div>
</div>
<!--<div class="section-1-rot"></div>-->
<div class="col-xl-12 section-1 text-center">
    <div class="container">
        <p class="section-text"><?php echo get_option('devices_sec_p', 'Improving performance through liquid synergy, our patented spark nano technology will change the way you interface with your world.') ?></p>
        <div class="devices">
            <div data-aos="fade-right" data-aos-duration="850" class="device ipad">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ipad.png" alt="">
            </div>
            <div  data-aos="fade-up" data-aos-duration="850" class="device iphone">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/iphone.png" alt="">
            </div>
            <div data-aos="fade-down" data-aos-duration="850" class="device imac">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/imac.png" alt="">
            </div>
            <div data-aos="fade-left" data-aos-duration="850" class="device macbook">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/macbook.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="swatch-orange-white swatch-top">
    <div class="decor-top"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
        </svg>
    </div>
</div>
<div class="swatch-orange-white swatch-bottom">
    <div class="decor-top"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 100 L0 0 L100 0" stroke-width="0"></path>
        </svg>
    </div>
</div>
<div class="swatch-black swatch-bottom">
    <div class="decor-top"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 100 L100 0 L100 100" stroke-width="0"></path>
        </svg>
    </div>
</div>
<div class="section sec-3">
    <div class="section-3 col-xl-12 ">
        <p class="text-center section-text"><?php echo get_option('steps_title', 'Tune up your speedometer') ?></p>
        <div class="container">
            <div class="row">
                <div data-aos="fade-right" class="col-md-4 text-center">
                    <a href="#" class="stepicon activeStep" data-step="1">
                        <div class="step-1-img-active"></div>
                    </a>
                </div>
                <div data-aos="zoom-in" class="col-md-4 text-center">
                    <a href="#" class="stepicon" data-step="2">
                        <div class="step-2-img"></div>
                    </a>
                </div>
                <div data-aos="fade-left" class="col-md-4 text-center">
                    <a href="#" class="stepicon" data-step="3">
                        <div class="step-3-img"></div>
                    </a>
                </div>
            </div>
            <div data-aos="fade-up" class="col-md-10 offset-lg-1 steps step-1 activeStep" data-stepcontent="1">
                <strong><h3>Step 1. </h3></strong><h3><?php echo get_option('step_1', 'Fuel') ?></h3>
                <p><?php echo get_option('step_1_desc', 'The next secret is our special ignite  nanobots that infiltrate your device working with each component to keep it firing at a rapid pace.') ?></p>
            </div>

            <div class="col-md-10 offset-lg-1 steps step-2" data-stepcontent="2">
                <strong><h3>Step 2. </h3></strong><h3><?php echo get_option('step_2', 'Ignite') ?></h3>
                <p><?php echo get_option('step_2_desc', 'The next secret is our special ignite  nanobots that infiltrate your device working with each component to keep it firing at a rapid pace.') ?></p>
            </div>

            <div class="col-md-10 offset-lg-1 steps step-3" data-stepcontent="3">
                <strong><h3>Step 3. </h3></strong><h3><?php echo get_option('step_3', 'Blastoff') ?></h3>
                <p><?php echo get_option('step_3_desc', 'The next secret is our special ignite  nanobots that infiltrate your device working with each component to keep it firing at a rapid pace.') ?></p>
            </div>
        </div>

    </div>
</div>

<div class="swatch-black">
    <div class="decor-top"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 100 L0 0 L100 0" stroke-width="0"></path>
        </svg>
    </div>
</div>

<div class="section">
    <div class="swatch-orange-white swatch-top">
        <div class="decor-top"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 L100 0 L100 100" stroke-width="0"></path>
            </svg>
        </div>
    </div>

    <div class="swatch-orange-white swatch-bottom">
        <div class="decor-top"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 0 L100 100 L0 0" stroke-width="0"></path>
            </svg>
        </div>
    </div>
    <div class="contact-section">
        <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/parallax.jpg" data-natural-width="1400" data-natural-height="1400">
            <div class="contact-gradient">
                <div class="contact-title text-center">
                    <h3>Ready to blast off?</h3>
                    <p>Fill out this form and we’ll get back to you in 1 business day.</p>
                </div>
            </div>

            <div class="contact-bg">
                    <div class="container">
                            <?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]') ?>
                            <!--<div class="col-xl-12 text-center">
                                <div class="input-group">
                                    <textarea placeholder="Enquiry..." class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 left-padding">
                                <div class="input-group">
                                    <input placeholder="Name*" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6 right-padding">
                                <div class="input-group">
                                    <input placeholder="Company*" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6 left-padding">
                                <div class="input-group">
                                    <input placeholder="Phone " type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6 right-padding">
                                <div class="input-group">
                                    <input placeholder="Your email address*" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-12 text-center">
                                <a href="#"><button class="send-button">Send</button></a>
                            </div>-->
                    </div>
                    <div class="swatch-dark contact-swatch">
                        <div class="decor-top"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 0 L100 100 L0 0" stroke-width="0"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="swatch-black swatch-top">
                        <div class="decor-top"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
                            </svg>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

