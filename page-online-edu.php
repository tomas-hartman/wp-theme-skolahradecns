<?php 

  /*
  Template Name: Výuka online
  */
   
    get_header();
?>
<nav class="navbar-menu green online-edu">
    <?php wp_nav_menu( array ('theme_location' => 'menu_online_edu', 'menu_class' => 'menu_online_edu'));?>
</nav>

<div class="body-content-with-navbar-container">
        <!--container pro rozložení stránky, ukončen je ve footeru-->
      
<main class="content">  
<?php

function render_page() {
    if(have_posts()) :
        while (have_posts()) : the_post(); ?>        


    <article class="prispevek full-clanek">
        <div class="article-content-container">
            <?php include 'header-page.php'; ?>
    
            <section class="text-clanek <?php if(wpba_attachments_exist()) {echo " page-docs "; } zjisti_kategorii(); ?>">
            <?php 
            if(wpba_attachments_exist()) {
            echo wpba_attachment_list(); } ?>
                
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
                        echo "Zadání z ";
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
<?php get_footer(); ?>