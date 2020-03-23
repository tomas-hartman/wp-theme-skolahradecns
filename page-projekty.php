<?php 

  /*
  Template Name: Projekty
  */
   
    get_header();
?>

<nav class="navbar-menu blue projekty">
    <?php wp_nav_menu( array ('theme_location' => 'menu_projekty'));?>
</nav>
      
<main>  
<?php
      if(have_posts()) :
            while (have_posts()) : the_post(); 
            
    /*Pokud zjistí, že příspěvek patří ke konkrétním projektům, zobrazí logolink daného projektu (zavést do style.css). Definováno ve functions.php, ovlivňuje i single-standard.php*/   

      projekty_logolink();   
?>


        <article class="prispevek full-clanek">
        <header class="<?php cat_to_class(); ?>">
            <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <h2>přidáno <?php the_time('d.m.Y');?></h2> 
            
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