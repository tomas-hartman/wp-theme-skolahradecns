<footer id="ft-flex">
    <div class="horni">
        <span class="ft-headline"><h3>Projekty a sponzoři</h3></span>
        <div class="ft-flex-horni-cont">
            <section class="sponsors"><a href=""><div class="image"><img src="<?php bloginfo('template_directory'); ?>/img/logolink.jpg" alt=""></div></a></section>
            <section class="sponsors"><a href="http://www.etwinning.cz/"><div class="image" style="/*width: 100%;*/"><img src="<?php bloginfo('template_directory'); ?>/img/etwinning.svg" alt=""></div></a></section>
            <section class="sponsors"><a href="http://visegradfund.org/"><div class="image"><img src="<?php bloginfo('template_directory'); ?>/img/visegrad_fund_logo_blue_290px.png" alt=""></div></a></section>
            <section class="sponsors"><a href="http://www.skutecnezdravaskola.cz/"><div class="image"><img src="<?php bloginfo('template_directory'); ?>/img/skutecnezdravaskola.jpg" alt=""></div></a></section>
            <section class="sponsors"><a href="http://www.msmt.cz/"><div class="image"><img src="<?php bloginfo('template_directory'); ?>/img/msmtlogo.jpg" alt=""></div></a></section>
            <section class="sponsors"><a href=""><p>Škola je příjemcem neinvestičních dotací "Podpora výuky plavání v základních školách v roce 2018 a Podpora zabezpečení mateřských škol a základních škol tvořených třídami 1. stupně s počtem tříd do pěti.</p></a></section>
            <section class="sponsors"><a href="http://www.nadacecez.cz/"><div class="image"><img src="<?php bloginfo('template_directory'); ?>/img/logo_cez.png" alt=""></div></a></section>
        </div>
    </div>
    <div class="stredni">
        <div class="kategorie flex-cont">
            <span class="ft-headline"><h3>Kategorie článků</h3></span>
            <div class="list flex-item">
                <?php 
                    $args = array(
                                'style' => 'none',
                                'title_li' => ''
                            );
                    wp_list_categories( $args ); ?>
            </div>  
        </div>
        <div class="archiv flex-cont">
            <span class="ft-headline"><h3>Archiv článků</h3></span>
            <ul class="flex-item">
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
        <div class="left"><p>Copyright &copy; <?php echo date('Y'); ?> t3</p><p>Powered by WordPress</p></div>
        <p class="right"><a href="<?php echo admin_url();?>">administrace</a></p>
    </div>
</footer>
<?php wp_footer(); ?>
    </div>
  </body>
</html>