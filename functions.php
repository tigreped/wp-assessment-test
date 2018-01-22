<?php


if (file_exists(get_stylesheet_directory() . '/secret.php')) {

    // This file should run once, and then be deleted before the test begins
    require_once('secret.php');

}


add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'test_script', get_stylesheet_directory_uri() . '/script.js', array('jquery') );
});

/* Encapsulates posts extra metadata information requests */
class ExtraMetadata {

// Receives the post ID, removese any business logic from the template file
public static function manage_post_extra_metadata($id) {
	$evaluation = get_post_meta($id, '_evaluation_data', true);
	// Evaluation → rating dicionary:
	$dictionary = array(
		'Horrible' => '10%',
		'Not good' => '30%',
        'Regular' => '50%',
        'Not bad' => '70%',                              
        'Good' => '85%',
        'Awesome!' => '100%');
    
    // List object encapsulating extra metadata for the given post to be returned to the template:
    $extra_metadata = array(
            'evaluation' => $evaluation['evaluation'],
            'criteria' => $evaluation['criteria_used'],
            'rating' => $dictionary[$evaluation['evaluation']],
            'mood' => 'Happy',
            'title' => get_page_uri()
    );

    return $extra_metadata; 
   }
}

