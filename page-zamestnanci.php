<?php 

  /*
  Template Name: Zaměstnanci
  */
   
    get_header();
?>
<nav class="menu-docs zamestnanci"> <!-- Tohle menu se pak předělá na klasický WP menu! -->
    
    <?php wp_nav_menu( array ('theme_location' => 'menu_zamestnanci'));?>
    
</nav>
      
<main>  
<?php
      if(have_posts()) :
            while (have_posts()) : the_post(); ?>        


        <article class="prispevek full-clanek">
        <header class="<?php cat_to_class(); ?>">
            <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <h2><?php 
              $cas_pridani = get_the_time();
              $cas_aktualizace = get_the_modified_time();
            
            if($cas_pridani != $cas_aktualizace) {
                echo "aktuální k " . get_the_modified_time('d.m.Y'); 
            }
            else {
                echo "přidáno " . get_the_time('d.m.Y');
            }
            ?>
            </h2> 
            
        </header>
        <div class="text-clanek page-docs">
        <?php 
        if(wpba_attachments_exist()) {
        echo wpba_attachment_list(); } ?>
            
            <?php
              echo the_content();
            ?>
            
        </div>      
        </article>
          
<?php endwhile;
              else :
                  echo '<p>Obsah nenalezen</p>';
              endif;
?>        
</main>
<?php get_sidebar();?>
<?php 
    get_footer(); 
?>