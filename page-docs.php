<?php 

  /*
  Template Name: Dokumenty
  */
   
    get_header();
?>
<nav class="navbar-menu blue dokumenty">
    <?php wp_nav_menu( array ('theme_location' => 'menu_dokumenty'));?>
</nav>

<div class="body-content-with-navbar-container">
        <!--container pro rozložení stránky, ukončen je ve footeru-->
<main class="content">  
<?php
      if(have_posts()) :
            while (have_posts()) : the_post(); ?>        


        <article class="prispevek full-clanek">

        <?php include 'header-page.php'; ?>

        <section class="text-clanek <?php if(wpba_attachments_exist()) {echo " page-docs "; } zjisti_kategorii(); ?>">
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