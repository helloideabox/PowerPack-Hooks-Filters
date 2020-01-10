<?php

/**
 * 
 *  Generate Press Example for Social Share Module with if condition
 * 
 */

function add_social_share() {

    if (is_single() && !is_archive()){
     echo do_shortcode("[fl_builder_insert_layout slug='social_buttons']");
    }
}
    
add_action('generate_after_content','add_social_share',10,3);

/**
 * 
 *  Generate Press example for Social Share Module without if condition
 * 
 */

function add_social_share() {
    
     echo do_shortcode("[fl_builder_insert_layout slug='social_buttons']");
}
    
add_action('generate_after_content','add_social_share',10,3);