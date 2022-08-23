<?php
 /*
  * Template name: Front page
  */

  get_header(); 

  wp_enqueue_style('front-page', get_template_directory_uri() . '/build/css/pages/front-page/front-page.css');

  get_template_part('./template-parts/front-page/block-main');

  get_footer();