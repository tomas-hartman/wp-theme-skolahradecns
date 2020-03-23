    </div> <!-- END OF .body-content-with-container -->
    <?php get_sidebar();?>
</div> <!-- END OF .body-content-container -->
<footer id="ft-flex">
    <div class="horni">
        <span class="ft-headline"><h3>Projekty a sponzoři</h3></span>
        <div class="ft-flex-horni-cont">
            <section class="sponsors"><a href="<?php echo get_site_url(); ?>/projekty-opvk/"><div class="image"><img data-src="<?php bloginfo('template_directory'); ?>/img/proj/logolink_o.jpg" alt="Logolink Projekty OPVK" class="lazy-load"></div></a></section>
            <section class="sponsors"><a href="<?php echo get_site_url(); ?>/etwinning/"><div class="image" style="/*width: 100%;*/"><img data-src="<?php bloginfo('template_directory'); ?>/img/proj/etwinning.svg" alt="Logo etwinning" class="lazy-load"></div></a></section>
            <section class="sponsors"><a href="<?php echo get_site_url(); ?>/visegrad-fund/"><div class="image"><img data-src="<?php bloginfo('template_directory'); ?>/img/proj/visegrad_fund_logo_blue_290px.png" alt="Logo Visegrad Funds" class="lazy-load"></div></a></section>
            <section class="sponsors"><a href="http://www.skutecnezdravaskola.cz/"><div class="image"><img data-src="<?php bloginfo('template_directory'); ?>/img/proj/skutecnezdravaskola.jpg" alt="Logo skutečně zdravá škola" class="lazy-load"></div></a></section>
            <section class="sponsors"><a href="<?php echo get_site_url(); ?>/msmt/"><div class="image"><img data-src="<?php bloginfo('template_directory'); ?>/img/proj/msmtlogo_o.jpg" alt="Logo MŠMT" class="lazy-load"></div></a></section>
            <section class="sponsors"><a href="<?php echo get_site_url(); ?>/nadace-cez/"><div class="image"><img data-src="<?php bloginfo('template_directory'); ?>/img/proj/logo_cez.png" alt="Logo ČEZ" class="lazy-load"></div></a></section>
            <section class="sponsors"><a href="https://www.sportujveskole.cz/"><div class="image"><img data-src="<?php bloginfo('template_directory'); ?>/img/proj/sportuj-ve-skole.jpg" alt="Logo projektu Sportuj ve škole" class="lazy-load"></div></a></section>
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
        <div class="left"><p>Copyright &copy; <?php echo date('Y'); ?> <a href="https://github.com/tomas-hartman" class="underline">t3</a></p><p>Powered by WordPress</p></div>
        <p class="right"><a href="<?php echo admin_url();?>">administrace</a></p>
    </div>
</footer>
<?php wp_footer(); ?>
    <!-- </div> -->
    <script>
        function checkXmasTheme () {
            var today = new Date();
            var xmasPeriodStart = new Date(today.getFullYear(), 11, 3);
            var xmasPeriodEnd = new Date(today.getFullYear(), 0, 6);

            if(today >= xmasPeriodStart || today <= xmasPeriodEnd){

                // console.log(xmasPeriodStart);
                // console.log(xmasPeriodEnd);
                // console.log(today);
                document.getElementsByTagName("body")[0].style.background = "url(img/xmas_pattern_grey.png) repeat";
            }

            // console.log("ahoj");
        }
        // checkXmasTheme();
    </script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/pf2020.css" type="text/css">
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/newyear2020.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/onlineEdu.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/lazyLoading.js"></script>
  
  </body>
</html>