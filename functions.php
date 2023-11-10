<?php
/**
 * My theme function
 */

 //theme title
 add_theme_support('title-tag');

 //theme css and JQ
 function bootstrapCssAndJsCalling(){

 }
 add_action('wp_enqueue_scripts','bootstrapCssAndJsCalling')