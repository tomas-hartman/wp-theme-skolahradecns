<article class="prispevek format-height-160">

        <?php if(has_post_thumbnail()) {?>
                <a href="<?php the_permalink();?>">
                    <img data-src="<?php the_post_thumbnail_url('small-thumbnail');?>" alt="<?php the_title_attribute(); ?>" class="lazy-load wp-post-image"> 
                </a>
        <?php } ?>

        <?php include 'header-content.php'; ?>
        
        <section class="text-clanek<?php if(has_post_thumbnail()) {echo " text-clanek-height-160";} ?>">
            <p><?php echo get_the_excerpt();?>
            <a href="<?php the_permalink(); ?>" class="read-more">Číst více &raquo;</a>
            </p>
        </section>      
</article>