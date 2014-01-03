<?php
 /*
 Plugin Name: aeVidi Review Sorting
 Plugin URI: http://aevidi.com
 Description: A plugin that sorts reviews
 Version: 1.0
 Author: aeVidi
 License: GPL2
 */

/**
IMPLEMENT THIS (DONT FORGET AJAX PAGINATION)
*/
function sortReviews() {
  if ('sortReviews' != $_POST['submit'])
    die();
  $taxonomy = $_POST['sortBy'];
  $values = $_POST['values'];
  $values = implode(",", $values);
  if ($values == null)
			get_template_part( 'no-results', 'index' );
  else {
   if ($taxonomy == "name")
    $query = new WP_Query(array('nopaging' => true, 'post_type' => 'review', 'orderby' => 'title', 'order' => $values));
  else if ($taxonomy == "date")
    $query = new WP_Query(array('nopaging' => true, 'post_type' => 'review', 'orderby' => 'date', 'order' => $values));
  else
    $query = new WP_Query(array('nopaging' => true, 'post_type' => 'review', $taxonomy => $values, 'orderby' => $taxonomy, 'order' => 'ASC'));
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
  			$query->the_post();
				get_template_part( 'content' );
			}
			twodudesfood_content_nav( 'nav-below' );
		} else
			get_template_part( 'no-results', 'index' );
    }
  die();
}
add_action( 'wp_ajax_nopriv_sortReviews', 'sortReviews' );
add_action( 'wp_ajax_sortReviews', 'sortReviews' );

function getCuisineValues() {
  foreach (get_terms('cuisine', array()) as $key)
    echo '<li><a href="#" value="'.$key->name.'">'.$key->name.'</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getCuisineValues', 'getCuisineValues' );
add_action( 'wp_ajax_getCuisineValues', 'getCuisineValues' );

function getLocationValues() {
  foreach (get_terms('location', array()) as $key)
    echo '<li><a href="#" value="'.$key->name.'">'.$key->name.'</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getLocationValues', 'getLocationValues' );
add_action( 'wp_ajax_getLocationValues', 'getLocationValues' );

function getNameValues() {
/*
  $alphas = range('A', 'Z');
  foreach ($alphas as $key => $value)
    echo '<li><a href="#" value="'.$value.'">'.$value.'</a></li>';
*/
  echo '<li><a class="name active asc" href="#" value="asc">Ascending</a></li><li><a href="#" value="desc" class="name desc">Descending</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getNameValues', 'getNameValues' );
add_action( 'wp_ajax_getNameValues', 'getNameValues' );

function getRatingValues() {
/*
  $letters = range('A', 'E');
  foreach ($letters as $key => $value)
    echo '<li><a href="#" value="'.$value.'+">'.$value.'+</a></li><li><a href="#" value="'.$value.'">'.$value.'</a></li><li><a href="#" value="'.$value.'-">'.$value.'-</a></li>';
  die();
*/
  foreach (get_terms('rating', array()) as $key)
    echo '<li><a href="#" value="'.$key->name.'">'.$key->name.'</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getRatingValues', 'getRatingValues' );
add_action( 'wp_ajax_getRatingValues', 'getRatingValues' );

function getAtmosphereValues() {
  foreach (get_terms('atmosphere', array()) as $key)
    echo '<li><a href="#" value="'.$key->name.'">'.$key->name.'</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getAtmosphereValues', 'getAtmosphereValues' );
add_action( 'wp_ajax_getAtmosphereValues', 'getAtmosphereValues' );

function getPriceValues() {
  foreach (get_terms('price', array()) as $key)
    echo '<li><a href="#" value="'.$key->name.'">'.$key->name.'</a></li>';
  die();
}
add_action( 'wp_ajax_nopriv_getPriceValues', 'getPriceValues' );
add_action( 'wp_ajax_getPriceValues', 'getPriceValues' );

?>
