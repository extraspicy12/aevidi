<?php
// if both logged in and not logged in users can send this AJAX request,
// add both of these actions, otherwise add only the appropriate one
add_action( 'wp_ajax_nopriv_myajax-submit', 'myajax_submit' );
add_action( 'wp_ajax_myajax-submit', 'myajax_submit' );

function myajax_submit() {
// get the submitted parameters
$cat = $_POST['sortBy'];

// generate the response
$response = json_encode( array( 'success' => true ) );

// response output
echo $cat;

// IMPORTANT: don't forget to "exit"
exit;
}