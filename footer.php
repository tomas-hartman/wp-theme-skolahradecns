<footer id="ft-new">
    <div class="horni">
        <span class="ft-headline"><h3>Projekty a sponzoři</h3></span>
    </div>
    <div class="stredni">
        <div class="kategorie">
            <span class="ft-headline"><h3>Kategorie článků</h3></span>
            <div class="list">
                <?php 
                    $args = array(
                                'style' => 'none',
                                'title_li' => ''
                            );
                    wp_list_categories( $args ); ?>
            </div>  
        </div>
        <div class="archiv">
            <span class="ft-headline"><h3>Archiv článků</h3></span>
            <ul>
                <?php 
                    $args = array(
                                'type' => 'monthly',
                                'limit' => '12',
                                'format' => 'html',
                                'order' => 'DESC'
                            );
                    wp_get_archives( $args );
                ?>
            </ul>
        </div>
    </div>
    <div class="spodni">

    </div>
</footer>
<footer>
      <div class="levy">
          <div class="ft-levy-container1">
              <section id="levy">
                  <h3>Archiv článků</h3>
                  <ul>
                    <?php 
                        $args = array(
                                    'type' => 'monthly',
                                    'limit' => '12',
                                    'format' => 'html',
                                    'order' => 'DESC'
                                );
                        wp_get_archives( $args );
                    ?>
                  </ul>              
              </section>
              <section id="pravy">
                  <h3>Kategorie článků</h3>
                  <ul>
                    <?php wp_list_categories('title_li'); ?>
                  </ul>  
              </section>
          </div>
          <div class="ft-levy-container2">
          <section>
            <!--
              <h3>Nechte si zasílat novinky:<h3>
            <label><input type="text" name="subscribe" value="Váš e-mail"><input type="submit" value="Přihlásit"></label>
            -->
          </section>
          </div>
      </div>
      
      <div class="prostredni">
      <h3>Výběr z galerií</h3>
        <div id="ft-galerie">        
         <?php if ( is_active_sidebar( 'footer-galerie' ) ) : dynamic_sidebar('footer-galerie' ); endif; ?> 
        </div>
      </div>
      <div class="pravy">
          <a href="http://www.hradecnadsvitavou.cz/" title="Hradec nad Svitavou"><img src="<?php bloginfo('template_directory'); ?>/img/head_hns.png" alt="head_hns.png, 13kB" title="Hradec nad Svitavou" border="0" height="87" width="425"></a>
          <iframe src="https://api.mapy.cz/frame?params=%7B%22x%22%3A16.48346124161884%2C%22y%22%3A49.71051054710277%2C%22base%22%3A%221%22%2C%22layers%22%3A%5B%5D%2C%22zoom%22%3A14%2C%22url%22%3A%22https%3A%2F%2Fmapy.cz%2Fs%2Fk92g%22%2C%22mark%22%3A%7B%22x%22%3A%2216.481733899013243%22%2C%22y%22%3A%2249.71105099848858%22%2C%22title%22%3A%22Z%C5%A0%20a%20M%C5%A0%20Hradec%20nad%20Svitavou%22%7D%2C%22overview%22%3Afalse%7D&amp;width=200&amp;height=200" width="200" height="200" style="border:none" frameBorder="0"></iframe>
      </div>
      
<div id="footer-spodni">
<p>Copyright &copy; <?php echo date('Y'); ?> t3</p><p>Powered by WordPress</p>
<p class="right"><a href="<?php echo admin_url();?>">administrace</a></p>
</div>
         
</footer>
<?php wp_footer(); ?>
    </div>
  </body>
</html>