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
    $date = "";

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array (
        'tag' => $tag,
        'posts_per_page' => 13,
        'paged' => $paged
        );
    
    $query = new WP_Query($args);

    if($query->have_posts()){
        while ($query->have_posts()){
            $query->the_post();   
            
            if($date !== get_the_date()){
                echo '<div class="task-published">';
                    echo "<p>";
                        echo "Zadání ze dne ";
                        echo get_the_date();
                    echo "</p>";
                echo '</div>';
                $date = get_the_date();
            }


            // div.task-published > h2
            get_template_part('content', get_post_format());
            wp_link_pages(); 
        }

        // PAGINATION
        $paginate = paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __('&laquo'),
            'next_text'    => __('&raquo'),
            'add_args'     => false,
            'add_fragment' => '',
        ) );

        if($paginate){
            echo '<nav class="next-previous-posts">';
                echo $paginate;
            echo '</nav>';
        }

       wp_reset_postdata();
    } else render_page();

} else {
    // 2. pokud nemám nasetovanou cookie se třídou, zobrazím welcome page
    // Pokud není nasetovaná cookie
    render_page();
                  
} ?>

</main>

<?php get_sidebar();?>
<?php get_footer();?>