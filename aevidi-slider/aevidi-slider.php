<?php

/*
Plugin Name: aeVidi Slider
Plugin URI:
Description: A simple slider.
Author: aeVidi
Version: 1.0
Author URI: http://aevidi.com
*/

define('AS_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('AS_NAME', "aeVidi Slider");
define ("AS_VERSION", "1.0");

function as_get_slider(){

//We'll fill this in later.

}
/**add the shortcode for the slider- for use in editor**/

function as_insert_slider($atts, $content=null){

$slider= as_get_slider();

return $slider;

}
add_shortcode('as_slider', 'as_insert_slider');
/**add template tag- for use in themes**/

function as_slider(){

    print as_get_slider();
}

?>