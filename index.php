<?php
    get_header();
?>
<main>

<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $query_args = array (
                      'posts_per_page' => 12,
                      'paged' => $paged 
                      );
  $pagination_link_format = 'index.php/page/%#%';
   
   $limit_posts = new WP_Query($query_args);
   if($limit_posts->have_posts()) :
      while ($limit_posts->have_posts()) : $limit_posts->the_post();   
          
   get_template_part('content', get_post_format());
   wp_link_pages(); 
   
   endwhile;
   
   if (function_exists(custom_pagination)) {
        custom_pagination($limit_posts->max_num_pages,"",$paged,$pagination_link_format);
   }
    
   wp_reset_postdata();
   else :
       echo '<div id="nenalezeno">Obsah nenalezen</div>';
   endif; ?>
</main>
<?php 
    get_sidebar();
    get_footer();
?>