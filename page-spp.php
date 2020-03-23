<?php 

  /*
  Template Name: ŠPP
  */
   
    get_header();
?>
<nav class="navbar-menu blue spp">
    <?php wp_nav_menu( array ('theme_location' => 'menu_spp'));?>
</nav>
      
<main class="content">  
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
        </article>
          
<?php endwhile;
              else :
                  echo '<p>Obsah nenalezen</p>';
              endif;
?>        
</main>
<?php get_footer(); ?>