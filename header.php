<!DOCTYPE html>
<html lang='cs'>
<head>
    <title>ZŠ a MŠ Hradec nad Svitavou</title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
    <meta name='robots' content='all'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon'>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/img/touch-icon-192x192.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-180x180-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-152x152-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-76x76-precomposed.png">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>     -->
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
    <script>
        /* WordPress neumožňuje vložit do svýho menu javascript, tak ho tam injectuju do prvního "a" v daným listu až následně javascriptem, class jsem musel definovat ručně.*/

        document.addEventListener("DOMContentLoaded", function () {
            var a, i, mainClass;

            a = document.getElementsByClassName("main-mainmenu");
            mainClass = ['main-zs', 'main-ms', 'main-sd', 'main-skola'];

            for (i = 0; i < a.length; i++) {
                a[i].getElementsByTagName("a")[0].href = "javascript:openMenu('" + mainClass[i] + "')";
            }
        });

        /*Funkce, která se stará o to, abych po kliknutí otevřel, nebo zavřel otevřený menu.*/
        function openMenu(x) {
            var x, y, z, i;

            z = document.getElementsByClassName("main-mainmenu");
            y = document.getElementsByClassName(x)[0];

            if (y.classList.contains("tap")) {
                y.classList.remove("tap");
            }
            else {
                for (i = 0; i < z.length; i++) {
                    z[i].classList.remove("tap");
                }
                y.classList.add("tap");
            }
        }
    </script>
    <?php wp_head(); ?>
</head>

<body>
    <!-- <div id="fb-root"></div> -->
    <!-- <script><?php //include "js/fb_page_plugin.js"; ?></script> -->
    <header class="baner overlay">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo_zsHnS.png" alt="logo_zsHnS.png, 10kB" title="ZŠ a MŠ Hradec nad Svitavou - logo"
                border="0" height="158" width="467" class="logo-skola"></a>

        <!--Mód bez banneru header-backhome klikací ploška po celém headeru-->
        <!--<a href="<?php //echo home_url(); ?>"><div id="header-backhome"></div></a> -->
    </header>
    <nav class="main-menu">
        <?php wp_nav_menu( array ('theme_location' => 'main-menu',
                                    'menu_class' => 'top-menu',
                                    'item_spacing' => 'discard'
                                   ));          
          ?>
    </nav>
    <div class="telo">
        <!--container pro rozložení stránky, ukončen je ve footeru-->