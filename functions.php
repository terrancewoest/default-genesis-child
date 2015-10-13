<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Crary Boots' );

//* Add HTML5 markup structure
add_theme_support('html5', array( 'search-form', 'comment-form', 'comment-list'));

//* Add Accessibility support
add_theme_support('genesis-accessibility', array('headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems'));

//* Add viewport meta tag for mobile browsers
add_theme_support('genesis-responsive-viewport');

//* Add support for custom background
add_theme_support('custom-background');

//* Add support for 3-column footer widgets
add_theme_support('genesis-footer-widgets', 3);

// Includ different function files.
include('functions/scripts.php');
