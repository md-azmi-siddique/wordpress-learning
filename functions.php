<?php
/**
 * My theme function
 */

 //theme title
 add_theme_support('title-tag');

 //theme css and JQ
 function bootstrapCssAndJsCalling(){
    wp_enqueue_style('cssWordpressStyle', get_stylesheet_uri()); 
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '4.0.0', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // jquery calling
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '4.0.0', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/bootstrap.js', array(), '1.0.0', 'true');
}

 add_action('wp_enqueue_scripts','bootstrapCssAndJsCalling');


 //theme function header area navbar icon
 function accessCustomizationRegister($wp_customize){
    $wp_customize->add_section('headerArea', array(
        'title' =>__('Header Area', 'languageChangeOption'),
        'description' => 'Update logo if needed',
    ));

    $wp_customize->add_setting('logo', array(
        'default' => get_bloginfo('template_directory') . './img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label' => 'Logo Upload',
        'description' => 'Choose a good looking header',
        'setting' => 'logo',
        'section' => 'headerArea', 
    )));
 }

 add_action('customize_register','accessCustomizationRegister');