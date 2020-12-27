<?php
/**
 * Get the Blog page title 
 * You need this because the_title() not display the page titie
 * It is because blog page is your post page
 */
function get_post_page_title() { 

    return  get_the_title( get_option('page_for_posts') ) ;
}
