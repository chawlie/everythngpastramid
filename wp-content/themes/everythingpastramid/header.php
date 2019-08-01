<!doctype html>
<head>
    <!-- Site design and development by Chawlie (Charlie Chauvin) http://www.chawlie.com -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', TRUE, 'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Favicon and iPhone Icons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_72x72.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/site/images/icons/app_icon_57x57.png">

    <!-- 3rd Party Typography -->
    <!-- Google Fonts or Typekit settings go here -->
    <link rel="stylesheet" href="https://use.typekit.net/rgd4fgq.css">

    <!-- Many plugins use wp_head() to hook into. Make sure it is the last thing before the closing </head> tag of your theme or it could break many plugins. -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a id="top"></a>
    <div class="page-wrapper">
        <header class="page-header">
            <div class="row">
                <div class="columns small-12">
                    <div class="menu-bar">
                        <div class="primary-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/site/images/everything-pastramid-logo-blue.svg" alt="<?php bloginfo('name'); ?>" /></a>
                        </div>
                        <div class="primary-nav">
                            <?php header_menu_primary(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="mobile-header">
            <div class="row">
                <div class="top-bar" data-responsive-toggle="mobile-nav" data-hide-for="none" data-toggle>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-logo" title="Go to <?php bloginfo('name'); ?> Home Page"><img src="<?php bloginfo('template_url'); ?>/site/images/everything-pastramid-logo-blue.svg" alt="<?php bloginfo('name'); ?>" /></a>
                        <a class="mobile-menu-button" data-toggle title="Site Menu"><span class="hamburger-icon"></span></a>
                </div>
                <nav class="mobile-nav" id="mobile-nav">
                    <?php mobile_menu(); ?>
                </nav>
            </div>
        </header>

