/**
 * If you need to get spacific page url, this function can help
 * the_permalink() function only give you the current page url
 * So if you are on a different page use this function to retrive the url of spacific page
 */
function md_get_the_page_url_by_title( $page_title ) {
    $url = get_page_by_title( $page_title ) ?? "Page Name: $page_title Not found";
        return $url;
    return esc_url( get_permalink( $url->ID ) );
}
