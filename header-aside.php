<?php 
/* Article header with warning icon. */
?>

<header class="<?php cat_to_class(); ?>">
    <div class="aside-header-img-container">
        <img src="<?php bloginfo('template_directory'); ?>/img/img_upozorneni.png" alt="Obrázek - upozornění, 571B" title="Upozornění" height="65" width="65">
    </div>
    <div class="aside-header-container">
        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        <h2><?php the_time('d.m.Y');?> | <?php the_author_posts_link(); ?> | <?php the_category();?></h2>  
    </div>
</header>