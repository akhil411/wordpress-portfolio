<?php
// include admin-menu.php from functions folder
require_once(TEMPLATEPATH . '/functions/admin-menu.php');

// register menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>