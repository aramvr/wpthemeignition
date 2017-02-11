<?php
get_header();

?>

<div class="picture-header">
    <div class="container header-message">
        <h1><?php echo get_option('header_text', 'Performance has never looked this good') ?></h1>
    </div>
</div>

<div class="col-12 section-1 text-center">
    <div class="container">
        <h2 class="section-text"><?php echo get_option('devices_sec_p', 'Improving performance through liquid synergy, our patented spark nano technology will change the way you interface with your world.') ?></h2>
        <div class="devices">
            <div data-aos="fade-right" data-aos-offset="-300" data-aos-duration="850" class="device ipad">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ipad.png" alt="ipad">
            </div>
            <div  data-aos="fade-up" data-aos-offset="-300"  data-aos-duration="850" class="device iphone">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/iphone.png" alt="iphone">
            </div>
            <div data-aos="fade-down" data-aos-offset="-300" data-aos-duration="850" class="device imac">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/imac.png" alt="imac">
            </div>
            <div data-aos="fade-left" data-aos-offset="-300" data-aos-duration="850" class="device macbook">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/macbook.png" alt="macbook">
            </div>
        </div>
    </div>
</div>

<div class="swatch-orange-white swatch-top">
    <div class="decor-top shadow-bottom-2"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
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
        <h2 class="text-center section-text"><?php echo get_option('steps_title', 'Tune up your speedometer') ?></h2>
        <div class="container">
            <div class="row">
                <div data-aos="fade-right" class="col-4 text-center">
                    <a href="#" class="stepicon activeStep" data-step="1">
                        <div class="step-round hvr-radial-out">
                            <div class="step-icon step-1-img step-icon-active"></div>
                        </div>
                    </a>
                </div>
                <div data-aos="zoom-in" class="col-4 text-center">
                    <a href="#" class="stepicon" data-step="2">
                        <div class="step-round hvr-radial-out">
                            <div class="step-icon step-2-img"></div>
                        </div>
                    </a>
                </div>
                <div data-aos="fade-left" class="col-4 text-center">
                    <a href="#" class="stepicon" data-step="3">
                        <div class="step-round hvr-radial-out">
                            <div class="step-icon step-3-img"></div>
                        </div>
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

<div class="swatch-black swatch-3">
    <div class="decor-top shadow-bottom-3"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
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
        <div class="decor-top shadow-bottom-1"><svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 0 L100 100 L0 0" stroke-width="0"></path>
            </svg>
        </div>
    </div>
    <div class="contact-section">
        <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/parallax.jpg" data-natural-width="1400" data-natural-height="1400">
            <div class="contact-gradient">
                <div class="contact-title text-center">
                    <h2 id="contact" >Ready to blast off?</h2>
                    <p>Fill out this form and we’ll get back to you in 1 business day.</p>
                </div>
            </div>

            <div class="contact-bg">
                <div class="container">
                    <?php

                        if(empty(get_option('contact_form') )) {
                            _e( '<p class="error_message">Please configurate contact form setting in Theme Option section.</p>', 'ignition' );
                        }
                        else {
                            echo do_shortcode('[contact-form-7 id="'.get_option("contact_form").'"]');
                        }

                       ?>

                    <!--<div class="row row col-md-10 offset-md-1">
                        <div class="col-xl-12 text-center">
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
                        </div>
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

