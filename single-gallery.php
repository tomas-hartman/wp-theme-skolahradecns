<article class="galerie full-gallery full-clanek">
    <div class="article-content-container">
            <div class="article-header-container">
            <img data-src="<?php the_post_thumbnail_url('thumbnail');?>" alt="Obrázek <?php the_title_attribute(); ?>" class="wp-post-image lazy-load mobile-no-load">
            <?php include 'header-single.php'; ?>
            </div>
        
        <?php $clanek = apply_filters('the_content', strip_shortcodes($post->post_content));    ?>
        
        <?php if(strlen($clanek) > 0) : ?>  
        <section class="text-clanek" style="margin-top: 0px;">
            <?php 
              //echo strip_shortcodes($post->post_content);
              //the_content();
              echo $clanek;
            ?>
        </section>
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
    </div>
        
</article>
