<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/responsive.css'; ?>">
    </head>
    <body>
        <div class="wrapper">
            <div class="head-wrap">
                <div class="name">
                    <h1 id="profile-name"><?php $options = get_option('plugin_options'); echo $options['banner_heading']; ?></h1>
                </div>
            </div>
            <div class="navbar">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>