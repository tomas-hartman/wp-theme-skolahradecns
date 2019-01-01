<?php 
    get_header();
?>      
<main>  
<?php
      if(have_posts()) :
            while (have_posts()) : the_post(); ?>        


        <article class="prispevek full-clanek">
        <div class="galerie-clanek">
            <?php if( has_post_thumbnail() ) {the_post_thumbnail('small-thumbnail');} ?>
            <?php if( get_post_gallery() ) { //Zjišťujeme, jestli má galerii a jestli jo, tak ji to vykreslí ?>  
            <div class="mini">
              <?php
              //Vykresluje jednotlivý obrázky z galerie    
              $gallery = get_post_gallery_images( get_the_ID() );
              foreach ($gallery as $image_url) {
              echo '<img src="' . $image_url .'">'; 
                                               }
              ?>      
            </div><?php } ?><!--class="mini"-->  
        </div>
        <header class="<?php zjisti_kategorii(); ?>">
            <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
            <h2><?php the_time('d.m.Y');?> | <?php the_author_posts_link(); ?> | <?php the_category();?></h2>  
        </header>
        <div class="text-clanek <?php if(wpba_attachments_exist()) {echo " page-docs"; }?>">
        <?php 
        if(wpba_attachments_exist()) {
        echo wpba_attachment_list(); } ?>
            
            
            <?php
              //echo strip_shortcodes($post->post_content);
              echo apply_filters('the_content', strip_shortcodes($post->post_content));
            ?>
            
        </div>      
        </article>
          
<?php endwhile;
              else :
                  echo '<p>Obsah nenalezen</p>';
              endif;
?>        
</main>
<?php get_sidebar();?>
<?php 
    get_footer(); 
?>