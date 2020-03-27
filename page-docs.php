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
          <div class="article-content-container">
            <?php include 'header-page.php'; ?>
            
            <?php 
            if(wpba_attachments_exist()) { ?>
              <div class="attachments attachments-upper blue">
                <?php echo wpba_attachment_list(); ?>
              </div> 
            <?php } ?>
    
            <section class="text-clanek <?php if(wpba_attachments_exist()) {echo " page-docs "; } zjisti_kategorii(); ?>">

              <?php
                echo the_content();
              ?>
                
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