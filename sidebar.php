<div class="sidebar">
      <section><?php get_search_form();?></section>
      <section>
          <div class="sidebar-container">
            <div class="menu-postranni-lista-menu-container">
              <ul><li class="first-child"><a href="https://skolahradecns.bakalari.cz/bakaweb/suplovani.aspx">Suplování</a></li></ul>
              <ul><li class="second-child"><a href="https://skolahradecns.bakalari.cz/bakaweb/rozvrh.aspx">Rozvrhy</a></li></ul>
            </div>
      
            <?php 
              wp_nav_menu(array(
                  'theme_location' => 'menu_sidebar'
              ));
            ?>

          </div>
      </section>

      <?php if ( is_active_sidebar( 'sidebar1' ) ) : dynamic_sidebar( 'sidebar1' ); endif; ?>

      <section class="logolink">
        <div class="fb-page" data-href="https://www.facebook.com/skolahradecns/" data-width="290" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
      </section>
      <section class="menu-postranni-lista-menu-container">
        <ul>
          <li class="first-child"><a href="<?php echo get_site_url();?>/wp-admin">administrace</a></li>
          <li class="second-child"><a href="https://skolahradecns.bakalari.cz/bakaweb/next/login.aspx ">Bakaláři</a></li>
        </ul>
      </section>
      <section class="logolink"><img src="" data-src="<?php bloginfo('template_directory'); ?>/img/logolink.png"></section>
      <section class="logolink etwinning"><a href="http://www.etwinning.cz/"><img src="" data-src="<?php bloginfo('template_directory'); ?>/img/etwinning.svg"></a></section>
      <section class="logolink visegrad"><a href="http://visegradfund.org/"><img src="" data-src="<?php bloginfo('template_directory'); ?>/img/visegrad_fund_logo_blue_290px.png"></a></section>
      <section class="logolink visegrad"><a href="http://www.skutecnezdravaskola.cz/"><img src="" data-src="<?php bloginfo('template_directory'); ?>/img/skutecnezdravaskola.jpg"></a></section>
      <section class="logolink msmt"><a href="http://www.msmt.cz/"><img src="" data-src="<?php bloginfo('template_directory'); ?>/img/msmtlogo.png"></a><p class="popisek_sidebar">Škola je příjemcem neinvestičních dotací "Podpora výuky plavání v základních školách v roce 2017 a Podpora zabezpečení mateřských škol a základních škol tvořených třídami 1. stupně s počtem tříd do pěti.</p></section>     
</div>




