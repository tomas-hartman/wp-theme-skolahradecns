<?php


//Css stylesheet (nepoužívám v tuto chvíli)
/*function wp_css() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'wp_css');
*/
//Nastavení délky excerptu, pro čj asi 40 bude fajn, ale uvidíme.
function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function get_excerpt() {
  if(has_post_thumbnail()) {
      $excerpt = get_the_content();
      $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
      $excerpt = strip_shortcodes($excerpt);
      $excerpt = strip_tags($excerpt);
      $excerpt = substr($excerpt, 0, 250);
      $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
      $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
      $excerpt = $excerpt.'... ';
      return $excerpt;    
  }
  else {
      return get_the_excerpt(); 
  }
}

function zjisti_kategorii() {
$categories = get_the_category();
           $output = '';
           $pojitko =' ';
           $i=0;
           if($categories) {
              foreach($categories as $category){
                  $output .= $category->cat_name . $pojitko;
              }
           echo $output;
           }
}

function zjisti_kategorii_2() {
$categories = get_the_category();
           $output = '';
           $pojitko =' ';
           $i=0;
           if($categories) {
              foreach($categories as $category){
                  $output .= $category->cat_name . $pojitko;
              }
           return $output;
           }
}

function cat_to_class() {
           $class = zjisti_kategorii_2();
                      
           $vychozi = array("zš", "mš", "šd", "škola");
           $zmenene = array("main-zs", "main-ms", "main-sd", "main-skola");
                     
           $class_new = str_replace($vychozi, $zmenene, $class);
           
           echo $class_new;
}

function custom_pagination($num_pages ='', $page_range ='', $paged='', $pagination_link_format) {
    if (empty($page_range)) {
        $page_range = 2;
    }
    
    global $paged;
    if (empty($paged)) {
        $paged=1;
    }
    
    if (numpages =='') {
        global $wp_query;
        $num_pages = $wp_query->max_num_pages;
        
        if (!$num_pages) {
            $num_pages = 1;
        }
    }

$pagination_args = array (
      'base'          => get_pagenum_link(1) . '%_%',
      //'format'        => 'index.php/page/%#%',
      'format'        => $pagination_link_format,
      'total'         => $num_pages,
      'current'       => $paged,
      'show_all'      => False,
      'end_size'      => 1,
      'mid_size'      => $page_range,
      'prev_next'     => True,     
      'prev_text'     => __('&laquo'),
      'next_text'     => __('&raquo'),
      'type'          => 'plain',
      'add_args'      => false,
      'add_fragment'  =>'' 
   );
   
$paginate_links = paginate_links($pagination_args);
   if ($paginate_links) {       
              echo "<nav class='next-previous-posts'>";
                    //echo "<span class='page_numbers page_num'>Jste na stránce '.$paged.' z '.$num_pages.'.</span>";
                    echo $paginate_links;
              echo "</nav>";
   }
}

function custom_excerpt_more($more) {
	return '…';
	}
add_filter('excerpt_more', 'custom_excerpt_more');


function strip_images($content){
   return preg_replace('/<img[^>]+./','',$content);
}
add_filter('the_content', 'strip_images',2);

function theme_setup() {

    //Navigation menus
    register_nav_menus(array(
       'menu_zs' => __( 'Menu - ZŠ' ),
       'menu_ms' => __( 'Menu - MŠ' ),
       'menu_sd' => __( 'Menu - ŠD' ),
       'menu_vedeni' => __( 'Menu - Vedení' ),
       'menu_sidebar' => __( 'Menu - postranní lišta' ),
       'menu_projekty' => __( 'Navline - projekty' ),
       'menu_dokumenty' => __( 'Navline - školní dokumenty' ),
       'menu_jidelna' => __( 'Navline - školní jídelna' ),
       'menu_spp' => __( 'Navline - školní poradenské pracoviště' ),
       'menu_zamestnanci' => __( 'Navline - zaměstnanci' ),
       'main-menu' => __( 'Main Menu' )
    ));

    //Add featured images
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 160, 160, true);
    
    //Add post format support
    add_theme_support('post-formats', array('aside', 'gallery')); 
}

add_action('after_setup_theme', 'theme_setup');

//Add our widget location
function OurWidgetsInit() {
  //Pro kalendář na sidebaru napravo
  register_sidebar( array(
      'name' => 'Sidebar',
      'id' => 'sidebar1',
      'before_widget' => '<section>',
		  'after_widget'  => '</section>',
  ));
  //Pro galerii dole
  register_sidebar( array(
      'name' => 'Footer - galerie',
      'id' => 'footer-galerie',
      'before_widget' => '<section>',
		  'after_widget'  => '</section>',
  )); 
}
  
add_action('widgets_init', 'OurWidgetsInit');

function remove_gallery($content) {
    return str_replace('[gallery]', '', $content);
}
add_filter( 'the_content', 'remove_gallery', 6);



/*Zrušení stylování pro galerie, abych je mohl ostylovat sám*/
add_filter( 'use_default_gallery_style', '__return_false' );


function remove_br_gallery($output) {
    return preg_replace('/<br style=(.*)>/mi','',$output);
}
add_filter( 'get_post_galleries', 'remove_br_gallery', 11, 2);



/*Přejmenování post_formátů z "aside" na "upozornění"*/
function rename_post_formats($translation, $text, $context, $domain) {
    $names = array(
        'Standard' => 'Základní',
        'Aside'  => 'Upozornění',
        'Gallery' => 'Galerie',
        'Link' => 'Odkaz'
    );
    if ($context == 'Post format') {
        $translation = str_replace(array_keys($names), array_values($names), $text);
    }
    return $translation; 
}
add_filter('gettext_with_context', 'rename_post_formats', 10, 4);

/* ONLINE */
update_option('siteurl','//www.skolahradecns.cz/');
update_option('home','//www.skolahradecns.cz/');          

// LOCALHOST
// update_option('siteurl','https://localhost/hradecns.cz_git');
// update_option('home','https://localhost/hradecns.cz_git');


/*zjištění IP adresy pro odlišení */
function get_client_ip() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


//Funkce pro zobrazení počtu shlédnutí. Pokud je počet shlédnutí 5 a větší, tak se zobrazí v headeru u příspěvku
function views_count($page_uri) {
$count = wp_statistics_pages(total,$page_uri,wp_statistics_uri_to_id(wp_statistics_get_uri()));

if($count>4){
  echo " | přečteno " . $count . " krát";
}
}


function projekty_logolink() {
    if(strpos(zjisti_kategorii_2(), 'Visegrad Fund') !== false) {
        echo '<section class="logolink-Visegrad"></section>';
    }
    else if(strpos(zjisti_kategorii_2(), 'eTwinning') !== false) {
        echo '<section class="logolink-etwinning"></section>';
    }
    else if(strpos(zjisti_kategorii_2(), 'OPVK') !== false) {
        echo '<section class="logolink-big"></section>';
    }
}


?>