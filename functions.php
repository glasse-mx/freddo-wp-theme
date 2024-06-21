<?php

// Setting the variables
define('FREDDO_THEME_DIR', get_template_directory());
define('FREDDO_THEME_URI', get_template_directory_uri());
define('FREDDO_THEME_VERSION', '1.0.0');

// includes 
$rootFiles = glob(FREDDO_THEME_DIR . '/includes/*.php');
$subdirectoryFiles = glob(FREDDO_THEME_DIR . '/includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

// Include all files within the includes directory
foreach ($allFiles as $filename) {
    include_once($filename);
}

// hooks
add_action('wp_enqueue_scripts', 'freddoEnqueueCB');
add_action('enqueue_block_editor_assets', 'freddo_editor_styles_cb');
add_action('wp_head', 'freddoHeadCB', 5);
add_filter('use_block_editor_for_post_type', 'freddoGutenbergWC', 10, 2);
add_action('after_setup_theme', 'freddoSetupCB');
