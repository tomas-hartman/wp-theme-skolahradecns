<?php 
    get_header();
?>      
<div class="body-content-with-navbar-container">
        <!--container pro rozložení stránky, ukončen je ve footeru-->
<main class="content">  
<?php
      if(have_posts()) :
            while (have_posts()) : the_post(); ?>        


        <article class="prispevek full-clanek">
            <div class="article-thumbnail-container">
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
            </div>
            <div class="article-content-container">
                <?php include 'header-content.php';?>
        
                <?php if(wpba_attachments_exist()) { ?>
                    <div class="attachments attachments-upper">
                      <?php echo wpba_attachment_list(); ?>
                    </div> 
                <?php } ?>
                <section class="text-clanek <?php if(wpba_attachments_exist()) {echo " page-docs"; }?>">
                    
                    <?php
                    //echo strip_shortcodes($post->post_content);
                    echo apply_filters('the_content', strip_shortcodes($post->post_content));
                    ?>
                    
                </section>      
            </div>
        </article>
          
<?php endwhile;
              else :
                  echo '<p>Obsah nenalezen</p>';
              endif;
?>        
</main>
<?php get_footer(); ?>