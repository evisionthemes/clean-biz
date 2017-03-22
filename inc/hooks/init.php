<?php
/**
 * Implement Editor Styles
 *
 * @since clean-biz 1.0.0
 *
 * @param null
 * @return null
 *
 */
add_action( 'init', 'clean_biz_add_editor_styles' );

if ( ! function_exists( 'clean_biz_add_editor_styles' ) ) :
    function clean_biz_add_editor_styles() {
        add_editor_style( 'editor-style.css' );
    }
endif;