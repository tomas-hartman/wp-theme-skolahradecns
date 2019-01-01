<?php 

  /*
  Template Name: Stránka galerie
  */
   
    get_header();
?>
      
<main>
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $kategorie=zjisti_kategorii_2();
  $cat_id=get_cat_ID($kategorie);      //problém je v tom, že pokud má víc kategorií, nepřiřadí se to správně... takže jak to udělat? rozbít link a testovat, jestli je přítomná jedna z kategorií?
  
  if($cat_id == 0) {
    $query_args = array (
                      'posts_per_page' => 5,
                      'paged' => $paged,
                      //'cat' => '20,5'
                      'category_name' => 'galerie'
                      
                      );
  }
  else {
   $query_args = array (
                      'posts_per_page' => 5,
                      'paged' => $paged,
                      //'cat' => '20,5'
                      'category__and' => array(20, $cat_id)
                      );
  }
  
   $limit_posts = new WP_Query($query_args);
   if($limit_posts->have_posts()) :
      while ($limit_posts->have_posts()) : $limit_posts->the_post();   
          
   /*HLAVNÍ Vypisovací část*/?>
   
   <article class="galerie full-gallery page-full-gallery">
        <!--<?php if(has_post_thumbnail()) {the_post_thumbnail('small-thumbnail');?><style>main article.full-gallery header {width: 495px;}</style><?php } ?>-->
        <header class="<?php cat_to_class(); ?>">
            <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <h2><?php the_time('d.m.Y');?> | <?php the_author_posts_link(); ?> | <?php the_category();?></h2>  
        </header>
        
        <?php $clanek = apply_filters('the_content', strip_shortcodes($post->post_content));    ?>
        
        <?php if(strlen($clanek) > 0) : ?>  
        <div class="text-clanek">
            
            <?php 
              //echo strip_shortcodes($post->post_content);
              //the_content();
              //echo $clanek;
              ?>
              <p><?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read-more">Číst více &raquo;</a>
            </p>
            
            
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
    <?php
   //get_template_part('content', get_post_format());
   
   
   /*Konec hlavní vypisovací části*/
   
   
   wp_link_pages(); 
   
   endwhile;
   
   $pagination_link_format = 'page/%#%';
   if (function_exists(custom_pagination)) {
        custom_pagination($limit_posts->max_num_pages,"",$paged,$pagination_link_format);
   }
    
   wp_reset_postdata();
   else :
       echo '<div id="nenalezeno">Obsah nenalezen</div>';
   endif; ?>
</main>
<?php get_sidebar();?>
<?php 
    get_footer(); 
?>