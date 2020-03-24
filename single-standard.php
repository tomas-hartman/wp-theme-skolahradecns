<?php
    /*Pokud zjistí, že příspěvek patří ke konkrétním projektům, zobrazí logolink daného projektu (zavést do style.css). Definováno ve functions.php, ovlivňuje i single-standard.php*/   

      projekty_logolink();   
?>

<article class="prispevek full-clanek">
        <div class="galerie-clanek">
            <?php if( has_post_thumbnail() ) {the_post_thumbnail('small-thumbnail');} ?>
            <?php if( get_post_gallery() ) { //Zjišťujeme, jestli má galerii a jestli jo, tak ji to vykreslí ?>  
            <div class="mini">
              <?php
              //Vykresluje jednotlivý obrázky z galerie    
             /* $gallery = get_post_gallery_images( get_the_ID() );
              foreach ($gallery as $image_url) {
              echo '<img src="' . $image_url .'">'; 
                                               }
              */
              $gallery = get_post_galleries(get_the_ID(), 'TRUE'); 
                foreach ($gallery as $images) {
                    echo $images;
                }
              ?>      
            </div><?php } ?><!--class="mini"-->  
        </div>

        <?php include 'header-single.php'; ?>
        
        <section class="text-clanek <?php if(wpba_attachments_exist()) {echo " page-docs "; } zjisti_kategorii(); ?>">
        <?php 
            if(wpba_attachments_exist()) {
            echo wpba_attachment_list(); }?>
            
            <?php
              //echo strip_shortcodes($post->post_content);
              echo apply_filters('the_content', strip_shortcodes($post->post_content));
            ?>
            
        </section>      
</article>