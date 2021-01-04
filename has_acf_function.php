<?php
/**
 * Do not just use acf function, make sure acf has the function
 * This function will avoid the error if acf is not installed
 * How to use it
 * EXample: has_acf_function('the_field') ? the_field('price') : false
 */
function has_acf_function( string $fn ) {
    if ( !function_exists($fn) )
        return false;
    return true;
}
