<?php 

  /*
  Template Name: Projekty
  */
   
    get_header();
?>

<nav class="navbar-menu blue projekty">
    <?php wp_nav_menu( array ('theme_location' => 'menu_projekty'));?>
</nav>

<div class="body-content-with-navbar-container">
        <!--container pro rozložení stránky, ukončen je ve footeru-->
      
<main class="content">  
<?php
      if(have_posts()) :
            while (have_posts()) : the_post(); 
            
    /*Pokud zjistí, že příspěvek patří ke konkrétním projektům, zobrazí logolink daného projektu (zavést do style.css). Definováno ve functions.php, ovlivňuje i single-standard.php*/   

      projekty_logolink();   
?>


        <article class="prispevek full-clanek">

        <?php include 'header-page.php'; ?>

        <section class="text-clanek page-docs">
        <?php 
        if(wpba_attachments_exist()) {
        echo wpba_attachment_list(); } ?>
            
            <?php
              echo the_content();
            ?>
          
        </section>      
        </article>
          
<?php endwhile;
              else :
                  echo '<p>Obsah nenalezen</p>';
              endif;
?>        
</main>
<?php get_footer(); ?>