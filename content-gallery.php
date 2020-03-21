<article class="galerie">
        
        <?php if(has_post_thumbnail()) {?>
                <a href="<?php the_permalink();?>">
                    <img data-src="<?php the_post_thumbnail_url('thumbnail');?>" alt="<?php the_title_attribute(); ?>" class="lazy-load wp-post-image"> 
                </a>
        <?php } ?>

        <header class="<?php cat_to_class(); ?>">
            <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <h2><?php the_time('d.m.Y');?> | <?php the_author_posts_link(); ?> | <?php the_category();?></h2>  
        </header>
        <div class="text-clanek">
            <p><?php echo get_excerpt(); ?>
            </p>
        </div>      
</article>
