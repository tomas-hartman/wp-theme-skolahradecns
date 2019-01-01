<div class="sidebar">
      <section><?php get_search_form();?></section>

        <section><div class="sidebar-container">
        <?php 
        /*Suplování a rozvrhy*/
        
        //echo get_client_ip() . "<br>";
        
        if(get_client_ip() == "188.134.240.74"){
        ?><div class="menu-postranni-lista-menu-container"><ul><li class="first-child"><a href="http://192.168.1.2/bakaweb/suplovani.aspx">Suplování</a></li></ul>
                                                               <ul><li class="second-child"><a href="http://192.168.1.2/bakaweb/rozvrh.aspx">Rozvrhy</a></li></ul></div><?php
        }
        else ?><div class="menu-postranni-lista-menu-container"><ul><li class="first-child"><a href="http://188.134.240.74/bakaweb/suplovani.aspx">Suplování</a></li></ul>
                                                                    <ul><li class="second-child"><a href="http://188.134.240.74/bakaweb/rozvrh.aspx">Rozvrhy</a></li></ul></div><?php
        
        ?>
        <?php wp_nav_menu(array(
              'theme_location' => 'menu_sidebar'
          ));?></div></section>
          
      <?php if ( is_active_sidebar( 'sidebar1' ) ) : dynamic_sidebar( 'sidebar1' ); endif; ?>

      
      <section class="menu-postranni-lista-menu-container"><ul><li class="first-child"><a href="<?php echo get_site_url();?>/wp-admin">administrace</a></li>
                                                                   <?php if(get_client_ip() == "188.134.240.74"){?>
                                                                     <li class="second-child"><a href="http://192.168.1.2/bakaweb/login.aspx">Bakaláři</a></li>
                                                                   <?php }
                                                                   else?> <li class="second-child"><a href="http://188.134.240.74/bakaweb/login.aspx">Bakaláři</a></li> <?php 
                                                                   ?></ul>
      </section>
      <section class="logolink"><img src="<?php bloginfo('template_directory'); ?>/img/logolink.jpg"></section>
      <section class="logolink etwinning"><a href="http://www.etwinning.cz/"><img src="<?php bloginfo('template_directory'); ?>/img/etwinning.svg"></a></section>
      <section class="logolink visegrad"><a href="http://visegradfund.org/"><img src="<?php bloginfo('template_directory'); ?>/img/visegrad_fund_logo_blue_290px.png"></a></section>
      <section class="logolink visegrad"><a href="http://www.skutecnezdravaskola.cz/"><img src="<?php bloginfo('template_directory'); ?>/img/skutecnezdravaskola.jpg"></a></section>
      <section class="logolink msmt"><a href="http://www.msmt.cz/"><img src="<?php bloginfo('template_directory'); ?>/img/msmtlogo.jpg"></a><p class="popisek_sidebar">Škola je příjemcem neinvestičních dotací "Podpora výuky plavání v základních školách v roce 2017 a Podpora zabezpečení mateřských škol a základních škol tvořených třídami 1. stupně s počtem tříd do pěti.</p></section>     
</div>




