<?php

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );

// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

/**
 * Disable Gutenberg for this $post_type.
 * 
 * @param bool   $current_status Current Gutenberg status.
 * @param string $post_type      Type of post.
 * 
 * @return bool
 */
function cl_disable_post_type_gutenberg( $current_status, $post_type ) {
    if ( 'post_type (example: post )' === $post_type ) {
        return false;
    }

    return $current_status;
}
add_filter( 'use_block_editor_for_post_type', 'cl_disable_post_type_gutenberg', 10, 2 );

// Disables the block editor for all post types.
add_filter( 'use_block_editor_for_post_type', '__return_false' );
