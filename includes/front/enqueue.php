<?php

/**
 * Enqueue the CSS and JS files needed for the theme to work properly
 */

function freddoEnqueueCB()
{
    /**
     * DEPENDENCIES CDNs
     */

    // Bootstrap
    wp_enqueue_style('freddo_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], FREDDO_THEME_VERSION, 'all');
    wp_enqueue_script('freddo_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', ['jquery'], FREDDO_THEME_VERSION, true);

    // Google Fonts
    wp_enqueue_style('freddo_montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', [], FREDDO_THEME_VERSION, 'all');

    // Google Icons
    wp_enqueue_style('freddo_google_icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', [], FREDDO_THEME_VERSION, 'all');

    // Font Awesome
    wp_enqueue_style('freddo_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], FREDDO_THEME_VERSION, 'all');

    // theme files
    wp_enqueue_style('freddo_theme_css', FREDDO_THEME_URI . '/assets/css/theme.css', [], FREDDO_THEME_VERSION, 'all');
    wp_enqueue_style('freddo_theme_helpers', FREDDO_THEME_URI . '/assets/css/helpers.css', [], FREDDO_THEME_VERSION, 'all');
    wp_enqueue_script('freddo_theme_js', FREDDO_THEME_URI . '/assets/js/theme.js', ['jquery'], FREDDO_THEME_VERSION, true);
}
