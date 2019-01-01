<?php
      get_header();
?>   
    <div id="nav-line">
    <?php if(have_posts()) : ?>
    
        <h1>Výsledky vyhledávání pro výraz "<?php the_search_query(); ?>"</h1>

    <?php 
    else : ?>
    
       <h1>Výsledky vyhledávání pro výraz "<?php the_search_query(); ?>"</h1>
 
    <?php
    endif;?>
    </div>
    
<main>
<?php
    $i=1;
   if(have_posts()) :
      while (have_posts()) : the_post();   
   ?> 
   
   <article class="prispevek format-height-160 search">
        <?php if(has_post_thumbnail()) {?><a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail');?></a><?php } ?>
        <div class="search-count"><?php echo $i; $i++; ?></div>
        <header class="<?php zjisti_kategorii(); ?>">
            <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
            <h2><?php the_time('d.m.Y');?> | <?php the_author_posts_link(); ?> | <?php the_category();?></h2>  
        </header>
        <div class="text-clanek<?php if(has_post_thumbnail()) {echo " text-clanek-height-160";} ?>">
            <p><?php echo get_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read-more">Číst více &raquo;</a>
            </p>
        </div>      
    </article> 
    
    <?php       
   //get_template_part('content', get_post_format());
    
   endwhile;
   else :
       echo '<article><div id="nenalezeno">Hledaný výraz nenalezen</div></article>';
   endif; ?>
</main>
<?php 
    include 'sidebar.php';
    get_footer();
?>