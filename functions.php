<?php


require get_template_directory() . '/includes/theme-required-plugins.php';



function add_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
/*    wp_enqueue_style( 'hover', get_template_directory_uri() . '/assets/css/hover-min.css');*/
    wp_enqueue_style( 'style', get_stylesheet_uri() );

   wp_enqueue_script( 'jquery');
   wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.min.js');
   wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
   wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js');
   wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js');
   wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/assets/js/jquery.smooth-scroll.js');
   wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.min.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
}
 add_action( 'init', 'register_my_menus' );




/* Create Setting Page */


function setup_theme_admin_menus() {
    add_submenu_page('themes.php',
        'Theme Setting Page', 'Theme Setting', 'manage_options',
        'ignition-theme-setting', 'ignition_setting');

}

function ignition_setting(){

    // Check that the user is allowed to update options
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }

    if (isset($_POST['header_text'])) {
        update_option('header_text', $_POST['header_text']);
    }

    if (isset($_POST['devices_sec_p'])) {
        update_option('devices_sec_p', $_POST['devices_sec_p']);
    }

    if (isset($_POST['steps_title'])) {
        update_option('steps_title', $_POST['steps_title']);
    }

    if (isset($_POST['step_1'])) {
        update_option('step_1', $_POST['step_1']);
    }

    if (isset($_POST['step_1_desc'])) {
        update_option('step_1_desc', $_POST['step_1_desc']);
    }

    if (isset($_POST['step_2'])) {
        update_option('step_2', $_POST['step_2']);
    }

    if (isset($_POST['step_2_desc'])) {
        update_option('step_2_desc', $_POST['step_2_desc']);
    }

    if (isset($_POST['step_3'])) {
        update_option('step_3', $_POST['step_3']);
    }

    if (isset($_POST['step_3_desc'])) {
        update_option('step_3_desc', $_POST['step_3_desc']);
    }

    if (isset($_POST['email'])) {
        update_option('email', $_POST['email']);
    }

    if (isset($_POST['phone'])) {
        update_option('phone', $_POST['phone']);
    }

    if (isset($_POST['contact_form'])) {
        update_option('contact_form', $_POST['contact_form']);
    }

    if (isset($_POST['google-plus'])) {
        update_option('google-plus', $_POST['google-plus']);
    }

    if (isset($_POST['twitter'])) {
        update_option('twitter', $_POST['twitter']);
    }

    if (isset($_POST['linkedin'])) {
        update_option('linkedin', $_POST['linkedin']);
    }

    if (isset($_POST['facebook'])) {
        update_option('facebook', $_POST['facebook']);
    }

    if (isset($_POST['copyright'])) {
        update_option('copyright', $_POST['copyright']);
    }




    ?>
    <h1>My Awesome Settings Page</h1>

    <form method="POST">
        <h3>Titles</h3>
        <table class="form-table">
            <tr>
                <th scope="row"><label for="header_text">Header Text</label></th>
                <td>
                    <input name="header_text" type="text" id="header_text" value="<?php echo get_option('header_text', 'Performance has never looked this good') ?>" class="regular-text">
                </td>
            </tr>

            <tr>
                <th scope="row"><label for="devices_sec_p">Devices Section Paragraph</label></th>
                <td><input name="devices_sec_p" type="text" id="devices_sec_p" value="<?php echo get_option('devices_sec_p', 'Improving performance through liquid synergy, our patented spark nano technology will change the way you interface with your world.') ?>" class="regular-text"></td>
            </tr>

            <tr>
        </table>
        <h3>Steps</h3>
        <table class="form-table">
                <th scope="row"><label for="steps_title">Steps Title</label></th>
                <td><input name="steps_title" type="text" id="steps_title" value="<?php echo get_option('steps_title', 'Tune up your speedometer') ?>" class="regular-text"></td>
            </tr>

            <tr>
                <th scope="row"><label for="step_1">Step 1</label></th>
                <td><input name="step_1" type="text" id="step_1" value="<?php echo get_option('step_1', 'Fuel') ?>" class="regular-text"></td>
            </tr>

            <tr>
                <th scope="row"><label for="step_1_desc">Step 1 Description</label></th>
                <td><textarea name="step_1_desc"  id="step_1_desc" class="regular-text"><?php echo get_option('step_1_desc', 'The next secret is our special ignite  nanobots that infiltrate your device working with each component to keep it firing at a rapid pace.') ?></textarea></td>
            </tr>

            <tr>
                <th scope="row"><label for="step_2">Step 2</label></th>
                <td><input name="step_2" type="text" id="step_2" value="<?php echo get_option('step_2' , 'Ignite') ?>" class="regular-text"></td>
            </tr>

            <tr>
                <th scope="row"><label for="step_2_desc">Step 2 Description</label></th>
                <td><textarea name="step_2_desc"  id="step_2_desc" class="regular-text"><?php echo get_option('step_2_desc', 'The next secret is our special ignite  nanobots that infiltrate your device working with each component to keep it firing at a rapid pace.') ?></textarea></td>
            </tr>

            <tr>
                <th scope="row"><label for="step_3">Step 3</label></th>
                <td><input name="step_3" type="text" id="step_3" value="<?php echo get_option('step_3' , 'Blastoff') ?>" class="regular-text"></td>
            </tr>

            <tr>
                <th scope="row"><label for="step_3_desc">Step 3 Description</label></th>
                <td><textarea name="step_3_desc"  id="step_3_desc" class="regular-text"><?php echo get_option('step_3_desc' , 'The next secret is our special ignite  nanobots that infiltrate your device working with each component to keep it firing at a rapid pace.') ?></textarea></td>
            </tr>
            
        </table>

        <h3>Contact</h3>
        <table class="form-table">
            <tr>
                <th scope="row"><label for="email">Email</label></th>
                <td><input name="email" type="text" id="email" value="<?php echo get_option('email', 'info@igniteme.example.com') ?>" class="regular-text"></td>
            </tr>

            <tr>
                <th scope="row"><label for="phone">Phone</label></th>
                <td><input name="phone" type="text" id="phone" value="<?php echo get_option('phone', 'xxxx xxxx xxxx') ?>" class="regular-text"></td>
            </tr>
        </table>

        <h3>Contact Form</h3>
        <table class="form-table">
            <tr>
                <th scope="row"><label for="email">Change Contact Form 7 form ID</label></th>
                <td><input name="contact_form" type="text" id="contact_form" value="<?php echo get_option('contact_form') ?>" class="regular-text"></td>
            </tr>

        </table>

        <h3>Social URLs</h3>
        <table class="form-table">
            <tr>
                <th scope="row"><label for="google-plus">Phone</label></th>
                <td><input name="google-plus" type="text" id="google-plus" value="<?php echo get_option('google-plus', '#') ?>" class="regular-text"></td>
            </tr>

            <tr>
                <th scope="row"><label for="twitter">Phone</label></th>
                <td><input name="twitter" type="text" id="twitter" value="<?php echo get_option('twitter', '#') ?>" class="regular-text"></td>
            </tr>

            <tr>
                <th scope="row"><label for="linkedin">Phone</label></th>
                <td><input name="linkedin" type="text" id="linkedin" value="<?php echo get_option('linkedin', '#') ?>" class="regular-text"></td>
            </tr>

            <tr>
                <th scope="row"><label for="facebook">Phone</label></th>
                <td><input name="facebook" type="text" id="facebook" value="<?php echo get_option('facebook', '#') ?>" class="regular-text"></td>
            </tr>
        </table>
        <h3>Copyright text</h3>
        <table class="form-table">
            <tr>
                <th scope="row"><label for="copyright">Copyright</label></th>
                <td><input name="copyright" type="text" id="copyright" value="<?php echo get_option('copyright', 'ignition') ?>" class="regular-text"></td>
            </tr>
        </table>
        <input type="submit" value="Save" class="button button-primary button-large">

    </form>

<?php


 }
add_action("admin_menu", "setup_theme_admin_menus");