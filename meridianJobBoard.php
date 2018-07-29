<?php

    /**
     *
     * Plugin Name: Meridian Job Board
     * Plugin URI: https://www.inlife.co.uk/
     * Version: 1.0
     * Description: This is the official plugin for the Meridian Website job system
     * Author: inLIFE Design LTD
     * Author URI: https://www.inlife.co.uk/
     *
     */

    include plugin_dir_path(__FILE__).'includes/class-sub-pages.php';
    include plugin_dir_path(__FILE__).'includes/class-post-types.php';
    include plugin_dir_path(__FILE__).'includes/class-meta-boxes.php';
    include plugin_dir_path(__FILE__).'includes/class-custom-columns.php';;
    include plugin_dir_path(__FILE__).'includes/class-save-posts.php';

    function add_meridian_job_board_main_page(){

        add_menu_page(
            'Meridian Jobs',
            'Meridian Jobs',
            'manage_options',
            'meridian-jobs',
            'add_meridian_job_board_main_page_html',
            'dashicons-welcome-widgets-menus',
            5
        );

    }
    function add_meridian_job_board_main_page_html(){}

    add_action('admin_menu' , 'add_meridian_job_board_main_page');

    function add_meridian_job_styles(){
        wp_enqueue_style('Meridian Job Board CSS' , plugin_dir_url(__FILE__).'assets/css/meridian-job.css');
    }

    add_action('admin_enqueue_scripts' , 'add_meridian_job_styles');

?>