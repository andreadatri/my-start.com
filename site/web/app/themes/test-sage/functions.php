<?php
// filepath: /home/zoolander/Project/my-start.com/site/web/app/themes/test-sage/functions.php


/*
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require_once $composer;

// Includi il file WP_Bootstrap_Navwalker.php
// require_once get_template_directory() . '/app/WP_Bootstrap_Navwalker.php';

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);
});