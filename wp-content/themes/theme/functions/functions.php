<?php

if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backward compatibility to support pre-5.2.0 WordPress versions.
     *
     * @since Twenty Nineteen 1.4
     */
    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         *
         * @since Twenty Nineteen 1.4
         */
        do_action( 'wp_body_open' );
    }
endif;