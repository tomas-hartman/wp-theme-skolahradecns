<?php 

  /*
  Template Name: ŠPP
  */
   
    get_header();
?>
<nav class="navbar-menu blue spp">
    <?php wp_nav_menu( array ('theme_location' => 'menu_spp'));?>
</nav>

<div class="body-content-with-navbar-container">
        <!--container pro rozložení stránky, ukončen je ve footeru-->
      
<main class="content">  
<?php
      if(have_posts()) :
            while (have_posts()) : the_post(); ?>        


        <article class="prispevek full-clanek">
          <div class="article-content-container">
            <?php include 'header-page.php'; ?>
            
            <section class="text-clanek page-docs">
            <?php 
            if(wpba_attachments_exist()) {
            echo wpba_attachment_list(); } ?>
                <p>
                <?php
                  echo the_content();
                ?>
                </p>
            </section>      
          </div>
        </article>
          
<?php endwhile;
              else :
                  echo '<p>Obsah nenalezen</p>';
              endif;
?>        
</main>
<?php get_footer(); ?>