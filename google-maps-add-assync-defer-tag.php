<?php
function add_async_defer_tag( $tag, $handle ) {
    if('googlemaps' !== $handle )
        return $tag;
    return str_replace('src', 'async="async" defer="defer" src', $tag);
}
add_filter('script_loader_tag','add_async_defer',10, 2 );
