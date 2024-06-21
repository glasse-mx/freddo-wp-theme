<?php

function freddo_editor_styles_cb()
{
    // Google Fonts
    wp_enqueue_style('freddo_montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', [], FREDDO_THEME_VERSION, 'all');

    // Google Icons
    wp_enqueue_style('freddo_google_icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', [], FREDDO_THEME_VERSION, 'all');

    // Font Awesome
    wp_enqueue_style('freddo_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], FREDDO_THEME_VERSION, 'all');
}
