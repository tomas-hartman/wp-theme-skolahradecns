<?php

  /*
  Template Name: Projekty
  */

    get_header();
?>
<nav class="menu-docs projekty"> <!-- Tohle menu se pak předělá na klasický WP menu! -->  
    <?php wp_nav_menu( array ('theme_location' => 'menu_projekty'));?>
</nav>
<main>  
<?php
    if(have_posts()){
        while (have_posts()){
        
            the_post(); 
            projekty_logolink();   /*Pokud zjistí, že příspěvek patří ke konkrétním projektům, zobrazí logolink daného projektu (zavést do style.css). Definováno ve functions.php, ovlivňuje i single-standard.php*/ 
?>
        <article class="prispevek full-clanek">
            <header class="<?php cat_to_class(); ?>">
                <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                <h2>přidáno <?php the_time('d.m.Y');?></h2> 
            </header>
            <div class="text-clanek page-docs">
                <?php 
                if(wpba_attachments_exist()) {
                    echo wpba_attachment_list(); 
                } 
                
                echo the_content();
                ?>
            </div>      
        </article>  
        <?php 
        // Našeptavač relevantních článků
        $category_show = get_the_category();
            
            foreach($category_show as $i){
                // parent == 11: projekty. Daná kategorie patří pod projekty a pro ni můžu hledat relevantní články
                if($i->parent == 11){
                    $query = new WP_Query(array('post_type' => 'post', 'cat' => $i->term_id));
                   
                    if($query->have_posts()){?>

                        <section class="relevant-articles">
                            <header class="relevant-title">
                                <h1>Články k projektu</h1>
                            </header>
                                    <?php
                                        while($query->have_posts()){
                                            $query->the_post();
                                            get_template_part('content', get_post_format());
                                        }
                                        wp_reset_postdata();
                                    ?>
                        </section><?php
                    }
                }
            } 
        }
    } else {
        echo '<p>Obsah nenalezen</p>';
    }
?>        
</main>
<?php 
    get_sidebar(); 
    get_footer(); 
?>