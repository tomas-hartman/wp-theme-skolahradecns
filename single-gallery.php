<article class="galerie full-gallery full-clanek">
        <?php if(has_post_thumbnail()) {the_post_thumbnail('thumbnail'); } ?>
        <header class="<?php cat_to_class(); ?>">
            <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <h2><?php the_time('d.m.Y');?> | <?php the_author_posts_link(); ?> | <?php the_category();?><?php views_count($page_uri);?></h2>  
        </header>
        
        <?php $clanek = apply_filters('the_content', strip_shortcodes($post->post_content));    ?>
        
        <?php if(strlen($clanek) > 0) : ?>  
        <div class="text-clanek" style="margin-top: 0px;">
            <?php 
              //echo strip_shortcodes($post->post_content);
              //the_content();
              echo $clanek;
            ?>
        </div>
        <?php endif; ?>      

        <?php if( get_post_gallery() ) { //Zjišťujeme, jestli má galerii a jestli jo, tak ji to vykreslí ?>  
            <div class="content-gallery">
            
            <?php
                $gallery = get_post_galleries(get_the_ID(), 'TRUE'); 
                foreach ($gallery as $images) {
                    echo $images;
                }
            ?>  
                  
            </div><?php } ?><!--class="mini"-->      
</article>
