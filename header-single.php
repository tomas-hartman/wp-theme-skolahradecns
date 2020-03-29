<?php 
/* Article header with views count. */
?>

<header class="<?php cat_to_class(); ?>">
    <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    <h2><?php the_time('d.m.Y');?> | <?php the_author_posts_link(); ?> | <?php the_category();?><?php views_count($page_uri);?></h2>  
</header>