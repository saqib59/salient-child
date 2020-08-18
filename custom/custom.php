<?php
function custom_name_scripts() {
	    
	   
   			wp_enqueue_script( 'jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js','','',true);
            wp_enqueue_script( 'sweet-alert', 'https://cdn.jsdelivr.net/npm/sweetalert2@9','','',true);
   			// wp_enqueue_style( 'custom_css', get_stylesheet_directory_uri().'/custom/css/custom.css' );
   			wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri().'/custom/js/custom-script.js','','',true);
   			wp_localize_script('custom-script', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
	}
	add_action( 'wp_enqueue_scripts', 'custom_name_scripts' );



    add_action('wp_ajax_daily_user_registration_form', 'daily_user_registration_form');
    add_action('wp_ajax_nopriv_daily_user_registration_form', 'daily_user_registration_form');

        /*USER REGISTRATION*/
function daily_user_registration_form(){
	var_dump($_FILES);
}