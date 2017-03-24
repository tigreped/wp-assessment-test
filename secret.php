<?php 
add_action('init', function() {

    // add a serialized metadata to the post 1
    
    update_post_meta(1, '_evaluation_data', ['evaluation' => 'Awesome!', 'criteria_used' => 'Best guess'] );
    
});
