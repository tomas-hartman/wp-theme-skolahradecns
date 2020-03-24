<article class="galerie">
        
        <?php if(has_post_thumbnail()) {?>
                <a href="<?php the_permalink();?>">
                    <img data-src="<?php the_post_thumbnail_url('thumbnail');?>" alt="<?php the_title_attribute(); ?>" class="lazy-load wp-post-image"> 
                </a>
        <?php } ?>

        <?php include 'header-content.php'; ?>
        
        <section class="text-clanek">
            <p><?php echo get_excerpt(); ?>
            </p>
        </section>      
</article>
