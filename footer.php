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
            <!-- <?php if ( is_active_sidebar( 'footer-galerie' ) ) : dynamic_sidebar('footer-galerie' ); endif; ?> -->
        </div>
    </div>

    <div class="pravy">
        <a href="http://www.hradecnadsvitavou.cz/" title="Hradec nad Svitavou"><img src="<?php bloginfo('template_directory'); ?>/img/head_hns.png"
                alt="head_hns.png, 13kB" title="Hradec nad Svitavou" border="0" height="87" width="425"></a>
        <div id="maps-iframe"></div>
    </div>

    <div id="footer-spodni">
        <p>Copyright &copy;
            <?php echo date('Y'); ?> t3</p>
        <p>Powered by WordPress</p>
        <p class="right"><a href="<?php echo admin_url();?>">administrace</a></p>
    </div>

</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>