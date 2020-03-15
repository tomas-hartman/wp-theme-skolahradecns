<?php 

  /*
  Template Name: Výuka online
  */
   
    get_header();
?>
<nav class="navbar_menu"> <!-- Tohle menu se pak předělá na klasický WP menu! -->
    
    <?php wp_nav_menu( array ('theme_location' => 'menu_online_edu', 'menu_class' => 'menu_online_edu'));?>

</nav>
      
<main>  
<?php

function render_page() {
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
    <div class="text-clanek <?php if(wpba_attachments_exist()) {echo " page-docs "; } zjisti_kategorii(); ?>">
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
}

// 1. Pokud mám nasetovanou cookie s třídou, zobrazím rovnou úkoly pro třídu
// setcookie('online_edu_class', 'online_edu_class', time()+365*24*60*60, '/');
if(isset($_COOKIE["online_edu_class"])){
    $tag = $_COOKIE["online_edu_class"];

    $args = array (
        'tag' => $tag
    );
    $query = new WP_Query($args);

    if($query->have_posts()){
        while ($query->have_posts()){
            $query->the_post();   
               
            get_template_part('content', get_post_format());
            wp_link_pages(); 
        }
    } else render_page();

} else {
    // 2. pokud nemám nasetovanou cookie se třídou, zobrazím welcome page
    // Pokud není nasetovaná cookie
    render_page();
                  
} ?>

</main>

<?php get_sidebar();?>
<?php get_footer();?>