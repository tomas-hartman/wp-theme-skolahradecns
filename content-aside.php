<article class="upozorneni">
        <img src="<?php bloginfo('template_directory'); ?>/img/img_upozorneni.png" alt="Obrázek - upozornění, 571B" title="Upozornění" border="0" height="65" width="65">
        
        <?php include 'header-content.php'; ?>
        
        <section class="text-clanek <?php if(wpba_attachments_exist()) {echo " page-docs "; } zjisti_kategorii(); ?>">
        
            <p><?php
              echo the_content(); //echo get_the_excerpt();
            ?></p>
            
            <div class="attachment">
                <?php 
                if(wpba_attachments_exist()) {
                echo wpba_attachment_list(); } ?>
            </div>    
        </section>       
</article>