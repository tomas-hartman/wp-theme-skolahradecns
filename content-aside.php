<article class="upozorneni">
  <div class="article-content-container">
          <?php include 'header-aside.php'; ?>
          
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
      </div>
</article>