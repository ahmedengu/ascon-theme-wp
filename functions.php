<?php
if (!function_exists('ascontheme_setup')) :

    function ascontheme_setup()
    {


        load_theme_textdomain('ascontheme', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');


        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(825, 510, true);

        register_nav_menus(array(
            'primary' => __('Primary Menu', 'ascontheme'),
            'social' => __('Social Links Menu', 'ascontheme'),
        ));


        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));


        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ));
    }
endif;

add_action('after_setup_theme', 'ascontheme_setup');


if (!function_exists('ascontheme_init')) :

    function ascontheme_init()
    {


        register_taxonomy_for_object_type('category', 'attachment');
        register_taxonomy_for_object_type('post_tag', 'attachment');


    }
endif;

add_action('init', 'ascontheme_init');


if (!function_exists('ascontheme_widgets_init')) :

    function ascontheme_widgets_init()
    {


        register_sidebar(array(
            'name' => __('Contact 1 Form', 'ascontheme'),
            'id' => 'blocks_contact_1_form',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        ));

    }

    add_action('widgets_init', 'ascontheme_widgets_init');
endif;


if (!function_exists('ascontheme_customize_register')) :

    function ascontheme_customize_register($wp_customize)
    {

        require_once "inc/blocks/wp_blocks_customizer_controls.php";

        $wp_customize->add_section('blocks_header_3', array(
            'title' => __('Header 3', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_header_3_bck', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_header_3_bck', array(
            'label' => __('Background image', 'ascontheme'),
            'type' => 'media',
            'mime_type' => 'image',
            'section' => 'blocks_header_3'
        )));

        $wp_customize->add_setting('blocks_header_3_logo', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_header_3_logo', array(
            'label' => __('Logo', 'ascontheme'),
            'type' => 'media',
            'mime_type' => 'image',
            'section' => 'blocks_header_3'
        )));

        $wp_customize->add_setting('blocks_header_3_title', array(
            'type' => 'theme_mod',
            'default' => 'ASCON'
        ));

        $wp_customize->add_control('blocks_header_3_title', array(
            'label' => __('Title', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_header_3'
        ));

        $wp_customize->add_setting('blocks_header_3_text', array(
            'type' => 'theme_mod',
            'default' => 'Arab Software Computer'
        ));

        $wp_customize->add_control('blocks_header_3_text', array(
            'label' => __('Text', 'ascontheme'),
            'type' => 'textarea',
            'section' => 'blocks_header_3'
        ));

        $wp_customize->add_setting('blocks_header_3_button1_label', array(
            'type' => 'theme_mod',
            'default' => 'Find out more'
        ));

        $wp_customize->add_control('blocks_header_3_button1_label', array(
            'label' => __('Button 1 Label', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_header_3'
        ));

        $wp_customize->add_setting('blocks_header_3_button1_url', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('blocks_header_3_button1_url', array(
            'label' => __('Button 1 Link', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_header_3'
        ));

        $wp_customize->add_setting('blocks_header_3_button2_label', array(
            'type' => 'theme_mod',
            'default' => 'Buy here'
        ));

        $wp_customize->add_control('blocks_header_3_button2_label', array(
            'label' => __('Button 2 Label', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_header_3'
        ));

        $wp_customize->add_setting('blocks_header_3_button2_url', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('blocks_header_3_button2_url', array(
            'label' => __('Button 2 Link', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_header_3'
        ));

        $wp_customize->add_section('blocks_content_1_3', array(
            'title' => __('Content 1-3', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_content_1_3_source', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_BlocksContentDropdown_Customize_Control($wp_customize, 'blocks_content_1_3_source', array(
            'label' => __('Content source', 'ascontheme'),
            'type' => 'custom',
            'section' => 'blocks_content_1_3'
        )));

        $wp_customize->add_setting('blocks_content_1_3_title', array(
            'type' => 'theme_mod',
            'default' => 'Services'
        ));

        $wp_customize->add_control('blocks_content_1_3_title', array(
            'label' => __('Title', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_content_1_3'
        ));

        $wp_customize->add_section('blocks_gallery_1_1', array(
            'title' => __('Gallery 1-1', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_gallery_1_1_source', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_BlocksContentDropdown_Customize_Control($wp_customize, 'blocks_gallery_1_1_source', array(
            'label' => 'Content source (post with gallery)',
            'type' => 'custom',
            'section' => 'blocks_gallery_1_1'
        )));

        $wp_customize->add_setting('blocks_gallery_1_1_title', array(
            'type' => 'theme_mod',
            'default' => 'Our work'
        ));

        $wp_customize->add_control('blocks_gallery_1_1_title', array(
            'label' => __('Title', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_gallery_1_1'
        ));

        $wp_customize->add_section('blocks_content_3_7', array(
            'title' => __('Content 3-7', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_content_3_7_title', array(
            'type' => 'theme_mod',
            'default' => 'Partners'
        ));

        $wp_customize->add_control('blocks_content_3_7_title', array(
            'label' => __('Title', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_content_3_7'
        ));

        $wp_customize->add_section('blocks_content_1_7', array(
            'title' => __('Content 1-7', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_content_1_7_source', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_BlocksContentDropdown_Customize_Control($wp_customize, 'blocks_content_1_7_source', array(
            'label' => __('Content source', 'ascontheme'),
            'type' => 'custom',
            'section' => 'blocks_content_1_7'
        )));

        $wp_customize->add_section('blocks_team_1_2', array(
            'title' => __('Team 1-2', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_team_1_2_source', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_BlocksContentDropdown_Customize_Control($wp_customize, 'blocks_team_1_2_source', array(
            'label' => __('Content source', 'ascontheme'),
            'type' => 'custom',
            'section' => 'blocks_team_1_2'
        )));

        $wp_customize->add_setting('blocks_team_1_2_title', array(
            'type' => 'theme_mod',
            'default' => 'Our Team'
        ));

        $wp_customize->add_control('blocks_team_1_2_title', array(
            'label' => __('Title', 'ascontheme'),
            'type' => 'textarea',
            'section' => 'blocks_team_1_2'
        ));

        $wp_customize->add_section('blocks_map', array(
            'title' => __('Map', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_map_lat', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('blocks_map_lat', array(
            'label' => __('Latitude', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_map',
            'input_attrs' =>
                array(
                    'placeholder' => '51.5111507'
                )
        ));

        $wp_customize->add_setting('blocks_map_long', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('blocks_map_long', array(
            'label' => __('Longitude', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_map',
            'input_attrs' =>
                array(
                    'placeholder' => '-0.123'
                )
        ));

        $wp_customize->add_setting('blocks_map_zoom', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('blocks_map_zoom', array(
            'label' => __('Zoom', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_map',
            'input_attrs' =>
                array(
                    'placeholder' => '15'
                )
        ));

        $wp_customize->add_section('blocks_contact_1', array(
            'title' => __('Contact 1', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_contact_1_title', array(
            'type' => 'theme_mod',
            'default' => 'Get in Touch'
        ));

        $wp_customize->add_control('blocks_contact_1_title', array(
            'label' => __('Title', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_contact_1'
        ));

        $wp_customize->add_setting('blocks_contact_1_address', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('blocks_contact_1_address', array(
            'label' => __('Address', 'ascontheme'),
            'type' => 'textarea',
            'section' => 'blocks_contact_1'
        ));

        $wp_customize->add_setting('blocks_contact_1_phone', array(
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('blocks_contact_1_phone', array(
            'label' => __('Phone', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_contact_1'
        ));

        $wp_customize->add_setting('blocks_contact_1_email', array(
            'type' => 'theme_mod',
            'default' => 'buyme@example.com'
        ));

        $wp_customize->add_control('blocks_contact_1_email', array(
            'label' => __('Email', 'ascontheme'),
            'type' => 'text',
            'section' => 'blocks_contact_1'
        ));

        $wp_customize->add_section('blocks_copyright_1', array(
            'title' => __('Copyright 1', 'ascontheme')
        ));

        $wp_customize->add_setting('blocks_copyright_1_text_left', array(
            'type' => 'theme_mod',
            'default' => '© ascon'
        ));

        $wp_customize->add_control('blocks_copyright_1_text_left', array(
            'label' => __('Left Text', 'ascontheme'),
            'type' => 'textarea',
            'section' => 'blocks_copyright_1'
        ));

        $wp_customize->add_setting('blocks_copyright_1_text_right', array(
            'type' => 'theme_mod',
            'default' => '<a href="https://github.com/ahmedengu/ascon-theme-wp">ascon-theme</a>'
        ));

        $wp_customize->add_control('blocks_copyright_1_text_right', array(
            'label' => __('Right text', 'ascontheme'),
            'type' => 'textarea',
            'section' => 'blocks_copyright_1'
        ));


    }

    add_action('customize_register', 'ascontheme_customize_register');
endif;


if (!function_exists('ascontheme_enqueue_scripts')) :
    function ascontheme_enqueue_scripts()
    {


        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null, true);

        wp_deregister_script('bootstrap');
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

        wp_deregister_script('plugins');
        wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

        wp_deregister_script('script-1');
        wp_enqueue_script('script-1', 'https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCgHgoYz9qc4BTS9AwDCg2894NxulZLZOg', false, null, true);

        wp_deregister_script('bskitscripts');
        wp_enqueue_script('bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

        wp_deregister_script('animator');
        wp_enqueue_script('animator', 'https://cdn.rawgit.com/MhdAljuboori/6ea3a3fa48248e3a132a/raw/animator.js', false, null, true);

        wp_deregister_script('jquerywaypoints');
        wp_enqueue_script('jquerywaypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js', false, null, true);


        wp_deregister_style('bootstrap');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

        wp_deregister_style('fontawesome');
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

        wp_deregister_style('style-1');
        wp_enqueue_style('style-1', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', false, null, 'all');

        wp_deregister_style('style-2');
        wp_enqueue_style('style-2', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', false, null, 'all');

        wp_deregister_style('stylelibrary');
        wp_enqueue_style('stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

        wp_deregister_style('plugins');
        wp_enqueue_style('plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

        wp_deregister_style('blocks');
        wp_enqueue_style('blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

        wp_deregister_style('custom');
        wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

        wp_deregister_style('animate');
        wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css', false, null, 'all');


    }

    add_action('wp_enqueue_scripts', 'ascontheme_enqueue_scripts');
endif;

require_once "inc/blocks/wp_blocks.php";

?>