<!DOCTYPE html>
<html lang='cs'>
<head>
    <title>ZŠ a MŠ Hradec nad Svitavou</title>
    <meta charset='utf-8'>
    <meta name='description' content='Webové stránky Základní a mateřské školy v Hradci nad Svitavou'>
    <meta name='keywords' content='škola,školní web,school,Hradec nad Svitavou,základní škola,mateřská škola'>
    <meta name='author' content='Tomáš Hartman'>
    <meta name='robots' content='all'>
    <meta name="language" content="cs">
    <meta name="url" content="https://www.skolahradecns.cz">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2c3e50">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon'>
    <meta name="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/web-img.jpg"/>

    <!-- <link rel="stylesheet" href="<?php //bloginfo('template_directory');?>/css/style.css" type="text/css"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css" type="text/css">

    <?php
    $today = date("Y-m-d H:i:s");
    $xmas_period_start = date("Y-12-03 00:00:00");
    $xmas_period_end = date("Y-01-06 00:00:00");

    if($today >= $xmas_period_start || $today <= $xmas_period_end){
        echo '<link rel="stylesheet" href="'. get_stylesheet_directory_uri() .'/css/winter_mode.css" type="text/css">';
    }
    ?>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/img/touch-icon-192x192.png">
    <link rel="fluid-icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/touch-icon-192x192.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-180x180-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-152x152-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-76x76-precomposed.png">

    <!--[if lt IE9]>
        <script>
          document.createElement("article");
          document.createElement("aside");
          document.createElement("nav");
          document.createElement("main");
          document.createElement("header");
          document.createElement("footer");
          document.createElement("section");
        </script>
    <![endif]-->
    <script src="<?php bloginfo('template_directory');?>/js/mainMenu.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <!-- <div id="fb-root"></div> -->
    <!-- <script><?php //include "js/fb_page_plugin.js"; ?></script> -->
    <header class="baner overlay">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo_zsHnS.png" alt="ZŠ a MŠ Hradec nad Svitavou - logo" title="ZŠ a MŠ Hradec nad Svitavou - logo"
                border="0" height="158" width="467" class="logo-skola"></a>
    </header>
    <nav class="main-menu" role="navigation">
        <?php wp_nav_menu( array ('theme_location' => 'main-menu',
                                    'menu_class' => 'top-menu',
                                    'item_spacing' => 'discard'
                                   ));          
          ?>
    </nav>
    <div class="body-content-container"><!--container pro rozložení stránky, ukončen je ve footeru-->