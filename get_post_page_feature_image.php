<?php
/**
 * Get the feature image display on the blog page
 * You need this because post_thiumnail() not display the feature image. 
 * It is because blog page is your post page 
 */
function get_post_page_feature_image( $size = null ) {
   
    // get the blog page id
    $blog_page_id = get_option('page_for_posts');
    // get the feature image id
    $image_id = get_post_thumbnail_id($blog_page_id );
    // get the feature image url
    $image = wp_get_attachment_image_src( $image_id, $size );

    return $image[0]; // the url

}
