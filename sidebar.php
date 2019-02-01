<div class="sidebar">
      <section><?php get_search_form();?></section>
      <section>
          <div class="sidebar-container">      
            <?php 
              wp_nav_menu(array(
                  'theme_location' => 'menu_sidebar'
              ));
            ?>
          </div>
      </section>

      <?php if ( is_active_sidebar( 'sidebar1' ) ) : dynamic_sidebar( 'sidebar1' ); endif; ?>

      <!-- <section class="logolink">
        <div class="fb-page" data-href="https://www.facebook.com/skolahradecns/" data-width="290" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
      </section> -->

      <section class="menu-postranni-lista-menu-container">
        <ul>
          <li class="first-child"><a href="<?php echo get_site_url();?>/wp-admin">administrace</a></li>
          <li class="second-child"><a href="https://skolahradecns.bakalari.cz/bakaweb/next/login.aspx ">Bakaláři</a></li>
        </ul>
      </section>

      <?php if ( is_active_sidebar( 'sidebar2' ) ) : dynamic_sidebar( 'sidebar2' ); endif; ?>

      <section class="menu-postranni-lista-mapa-container">
        <a href="http://www.hradecnadsvitavou.cz/" title="Hradec nad Svitavou"><img src="<?php bloginfo('template_directory'); ?>/img/head_hns.png" alt="head_hns.png, 13kB" title="Hradec nad Svitavou" style="border:0;" height="87" width="425"></a>
        <iframe src="https://api.mapy.cz/frame?params=%7B%22x%22%3A16.48346124161884%2C%22y%22%3A49.71051054710277%2C%22base%22%3A%221%22%2C%22layers%22%3A%5B%5D%2C%22zoom%22%3A14%2C%22url%22%3A%22https%3A%2F%2Fmapy.cz%2Fs%2Fk92g%22%2C%22mark%22%3A%7B%22x%22%3A%2216.481733899013243%22%2C%22y%22%3A%2249.71105099848858%22%2C%22title%22%3A%22Z%C5%A0%20a%20M%C5%A0%20Hradec%20nad%20Svitavou%22%7D%2C%22overview%22%3Afalse%7D&amp;width=250&amp;height=250" width="250" height="250" style="border:none" frameBorder="0"></iframe>      
      </section>
</div>





