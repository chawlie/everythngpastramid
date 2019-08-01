<!doctype html>
<head>
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
    <link rel="stylesheet" href="https://use.typekit.net/nza1igo.css">

    <!-- Many plugins use wp_head() to hook into. Make sure it is the last thing before the closing </head> tag of your theme or it could break many plugins. -->
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'coming-soon-body' ); ?>>
    <a id="top"></a>
    <div class="page-wrapper">
