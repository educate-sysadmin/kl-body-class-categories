<?php
/*
Plugin Name: KL Body Class Categories
Plugin URI: https://github.com/educate-sysadmin/kl-body-class-categories
Description: Adds categories to body as class
Version: 0.1
Author: b.cunningham@ucl.ac.uk
Author URI: https://educate.london
License: GPL2
*/
/* thanks https://css-tricks.com/snippets/wordpress/add-category-name-body_class/ */
add_filter('body_class','add_category_to_single');
function add_category_to_single($classes) {
    if (is_singular() ) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            // add category slug to the $classes array
            $classes[] = "category-".$category->category_nicename;
        }
    }
    // return the $classes array
    return $classes;
}
