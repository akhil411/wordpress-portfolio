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
                    <h1 id="profile-name">Akhil Vijayan</h1>
                </div>
            </div>
                <div class="navbar">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                        
                </div>
            
            <div class="centre">
                <div class="middle">
                    <div class="about-me">
                        <h2><?php echo get_field("heading"); ?></h2>
                    </div>
                    <hr>
                    <div class="image">
                        <img src="<?php echo get_field('profile_image'); ?>" alt="Profile Image">
                    </div>
                    <div class="text">
                        <?php echo get_field("description"); ?>
                    </div>
            </div>
            </div>
            <div class="footer">
                <span id="copyright">Copyright@</span>
            </div>
        </div>
        
    </body>
</html>