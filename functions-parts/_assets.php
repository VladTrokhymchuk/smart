<?php 
/*
 * Подключение стилей и скриптов
 * */

function my_assets()
{
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', get_stylesheet_directory_uri() . '/build/js/libs/jquery-3.6.0.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/build/css/style.min.css');


    // wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/build/js/app.min.js',  array('jquery'), '1.0', true);
       
    wp_enqueue_script('gsap', get_stylesheet_directory_uri() . '/build/js/libs/gsap.min.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('ScrollTrigger', get_stylesheet_directory_uri() . '/build/js/libs/ScrollTrigger.min.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('hover-btn-js', get_stylesheet_directory_uri() . '/build/js/modules/hover-btn.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('header-js', get_stylesheet_directory_uri() . '/build/js/modules/header/header.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('footer-js', get_stylesheet_directory_uri() . '/build/js/modules/header/footer.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('popup-js', get_stylesheet_directory_uri() . '/build/js/modules/pop-up.js',  array('jquery'), '1.0', true);
  

    if (is_front_page()) { 
        wp_enqueue_style('swiper', get_template_directory_uri() . '/build/css/libs/swiper-bundle.min.css');
        wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/build/js/libs/swiper-bundle.min.js',  array('jquery'), '1.0', true);
    }

    if (is_page_template('page-news.php')) {
        // wp_enqueue_style('swiper', get_template_directory_uri() . '/build/css/libs/swiper.css');
        // wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/build/js/libs/swiper-bundle.min.js',  array('jquery'), '1.0', true);
    }

    if (is_singular('news')) {
        wp_enqueue_style('swiper', get_template_directory_uri() . '/build/css/libs/swiper-bundle.min.css');
        wp_enqueue_style('single-news-css', get_template_directory_uri() . '/build/css/pages/single-news.css');

        wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/build/js/libs/swiper-bundle.min.js',  array('jquery'), '1.0', true);
        wp_enqueue_script('single-news', get_stylesheet_directory_uri() . '/build/js/pages/single-news.js',  array('jquery'), '1.0', true);
        
    }
    if (is_singular('products')) {
        wp_enqueue_style('single-products-css', get_template_directory_uri() . '/build/css/pages/single-products.css');
        wp_enqueue_style('swiper', get_template_directory_uri() . '/build/css/libs/swiper-bundle.min.css');
        
        wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/build/js/libs/swiper-bundle.min.js',  array('jquery'), '1.0', true);
        wp_enqueue_script('single-products', get_stylesheet_directory_uri() . '/build/js/pages/single-products.js',  array('jquery'), '1.0', true);
  
    }

    if (is_404()) { }


    $page_template =  mb_substr(get_page_template_slug(), 0, -4); // get template file name and cut last 4 symbols
    $css_file_path = get_template_directory_uri() . '/build/css/pages/' . $page_template . '.css';
    $js_file_path = get_template_directory_uri() . '/build/js/pages/' . $page_template . '.js';

    $is_singular = is_singular('news') || is_singular('products') || is_singular('tips');

    if (!$is_singular && !is_404()) {
        wp_enqueue_style( $page_template, $css_file_path );
        wp_enqueue_script( $page_template, $js_file_path,  array('jquery'), '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'my_assets');