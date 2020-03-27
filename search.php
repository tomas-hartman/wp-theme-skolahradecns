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

    <div class="body-content-with-navbar-container">
        <!--container pro rozložení stránky, ukončen je ve footeru-->
<main class="content">
<?php
    $i=1;
   if(have_posts()) :
      while (have_posts()) : the_post();   
   ?> 
   
   <article class="prispevek format-height-160 search">
        <!-- <div class="article-thumbnail-container"> -->
        <!-- <?php //if(has_post_thumbnail()) {?><a href="<?php //the_permalink();?>"><?php //the_post_thumbnail('small-thumbnail');?></a><?php //} ?>
            <div class="search-count"><?php //echo $i; $i++; ?></div>
        </div> -->
        <div class="article-content-container">
            <?php include 'header-search.php'; ?>
            
            <section class="text-clanek<?php if(has_post_thumbnail()) {echo " text-clanek-height-160";} ?>">
                <p><?php echo get_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">Číst více &raquo;</a>
                </p>
            </section>
        </div>
    </article> 
    
    <?php       
   //get_template_part('content', get_post_format());
    
   endwhile;
   else :
       echo '<article><div id="nenalezeno">Hledaný výraz nenalezen</div></article>';
   endif; ?>
</main>
<?php get_footer(); ?>