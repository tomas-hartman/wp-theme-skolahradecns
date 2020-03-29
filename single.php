<?php 
    get_header();
    
    /*Zjištění URI proměnné pro view_counter*/
     $page_uri=wp_statistics_get_uri();
?>
<div class="body-content-with-navbar-container"><!--container pro rozložení stránky, ukončen je ve footeru-->      
    <main class="content">  
    <?php
        if(have_posts()) :
                while (have_posts()) : the_post();        

            $format = get_post_format();
            if ( false === $format ) {
            $format = 'standard';
            }
            
            get_template_part('single', $format);
            
            endwhile;
                else :
                    echo '<p>Obsah nenalezen</p>';
                endif;
    ?>        
    </main>
<?php get_footer(); ?>