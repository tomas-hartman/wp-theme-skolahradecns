<?php
    get_header();
?>
<main class="content">
<?php
   if(have_posts()) :
      while (have_posts()) : the_post();   
          
   //get_template_part('content', get_post_format());
   
    the_title(); ?><br>
    <?php
    $gallery = get_post_gallery_images( get_the_ID() );
    foreach ($gallery as $image_url) {
    echo '<img src="' . $image_url .'">';
    }
    
   endwhile;
   else :
       echo '<div id="nenalezeno">Obsah nenalezen</div>';
   endif; ?>
</main>
<?php get_footer(); ?>