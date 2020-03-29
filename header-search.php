<?php 
/* Article header with search number. */
?>

<header class="<?php cat_to_class(); ?>">
    <div class="search-header-div-container">
        <!-- <img src="<?php // bloginfo('template_directory'); ?>/img/img_upozorneni.png" alt="Obrázek - upozornění, 571B" title="Upozornění" height="65" width="65"> -->
        <?php if(has_post_thumbnail()) {?><a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail');?></a><?php } ?>
        <div class="search-count"><?php echo $i; $i++; ?></div>
    </div>
    <div class="search-header-container">
        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        <h2><?php the_time('d.m.Y');?> | <?php the_author_posts_link(); ?> | <?php the_category();?></h2>  
    </div>
</header>