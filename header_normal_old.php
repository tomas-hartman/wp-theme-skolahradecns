<!DOCTYPE html>
<html lang='cs'>  
  <head>    
    <title>ZŠ a MŠ Hradec nad Svitavou
    </title>    
    <meta charset='utf-8'>    
    <meta name='description' content=''>    
    <meta name='keywords' content=''>    
    <meta name='author' content=''>    
    <meta name='robots' content='all'>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->    
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css" type="text/css">    
    <link href='http://fonts.googleapis.com/css?family=Slabo+27px&subset=latin,latin-ext' rel='stylesheet' type='text/css'>    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon_3.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
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
            $(document).ready(function(){
                $("li.menu-item-has-children > a").click(function(e) {                    
                    e.preventDefault();
                });
                
                $(".menu-item-has-children:contains(ZŠ)").addClass("zš");
                $(".menu-item-has-children:contains(MŠ)").addClass("mš");
                $(".menu-item-has-children:contains(ŠD)").addClass("šd");
                $(".menu-item-has-children:contains(Škola)").addClass("škola");
                
                $(".menu-item-has-children").click(function(event) {                    
                    if($(this).hasClass("tap")) {
                        $(this).toggleClass("tap");
                    }
                    else {
                        $(".menu-item-has-children").removeClass("tap");
                        $(this).toggleClass("tap");
                    }
                });
          }); 
        </script>                                                      
    <?php wp_head(); ?>      
  </head>  
  <body>   
    
    <header class="baner overlay">      
      <a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo_zsHnS.png" alt="logo_zsHnS.png, 10kB" title="ZŠ a MŠ Hradec nad Svitavou - logo" border="0" height="158" width="467" class="logo-skola"></a>
    </header>
     
      
    <nav class="main-menu">          
      <!--<ul><li id="zs">ZŠ<ul><li><a href="#">Třídy</a></li><li><a href="#">Učitelé</a></li><li><a href="#">historie</a></li><li><a href="clanek-full.php">Článek</a></li></ul></li><li id="ms">MŠ<ul><li><a href="#">Informace pro rodiče</a></li><li><a href="#">Vychovatelky</a></li><li><a href="#">Aktivity</a></li><li><a href="#">Fotogalerie</a></li><li><a href="#">Klokánek</a></li></ul></li><li id="sd">ŠD<ul><li><a href="#">Třídy</a></li><li><a href="#">Učitelé</a></li><li><a href="#">historie</a></li><li><a href="#">učebnice</a></li></ul></li><li id="vedeni">Vedení<ul><li><a href="#">Třídy</a></li><li><a href="#">Učitelé</a></li><li><a href="#">historie</a></li><li><a href="#">učebnice</a></li></ul></li></ul>
            -->       
          <?php wp_nav_menu( array ('theme_location' => 'main-menu',
                                    'menu_class' => 'top-menu',
                                    //'items_wrap' => '<ul class="top-menu">%3$s</ul>'
                                   ));          
          ?>
    </nav>
    <div class="telo"> 
      <!--container pro rozložení stránky, ukončen je ve footeru-->