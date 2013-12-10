<?php
 /*
 Plugin Name: aeVidi Review Sorting
 Plugin URI: http://aevidi.com
 Description: A plugin that sorts reviews
 Version: 1.0
 Author: aeVidi
 License: GPL2
 */

function sortReviews() {
  if ('sortReviews' != $_POST['submit'])
    die();
  $taxonomy = $_POST['sortBy'];
  $values = $_POST['values'];
  echo $taxonomy;
  die();
}
add_action( 'wp_ajax_nopriv_sortReviews', 'sortReviews' );
add_action( 'wp_ajax_sortReviews', 'sortReviews' );

function getCategoryValues() {
  $categories = get_terms('reviews', array());
  foreach (get_terms('reviews', array()) as $key)
    echo '<li><a href="#" value="'.$key->name.'">'.$key->name.'</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getCategoryValues', 'getCategoryValues' );
add_action( 'wp_ajax_getCategoryValues', 'getCategoryValues' );

function getLocationValues() {
  $categories = get_terms('reviews', array());
  foreach (get_terms('reviews', array()) as $key)
    echo '<li><a href="#" value="'.$key->name.'">'.$key->name.'</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getLocationValuess', 'getLocationValues' );
add_action( 'wp_ajax_getLocationValues', 'getLocationValues' );

function getNameValues() {
  $alphas = range('A', 'Z');
  foreach ($alphas as $key => $value)
    echo '<li><a href="#" value="'.$value.'">'.$value.'</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getNameValuess', 'getNameValues' );
add_action( 'wp_ajax_getNameValues', 'getNameValues' );

function getRatingValues() {
  $letters = range('A', 'E');
  foreach ($letters as $key => $value)
    echo '<li><a href="#" value="'.$value.'+">'.$value.'+</a></li><li><a href="#" value="'.$value.'">'.$value.'</a></li><li><a href="#" value="'.$value.'-">'.$value.'-</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getRatingValues', 'getRatingValues' );
add_action( 'wp_ajax_getRatingValues', 'getRatingValues' );

?>
