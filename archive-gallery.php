<?php
/*

Template name: Archiv - galerie

*/

get_header();

/*Nastavení pro query bude: mezi tím a tím datem, categorie: galerie, výpis bude galeriovej*/
?>
    <div class="nav-line purple"> <!-- Upravit CSS podobu tohohle -->
        <h1><?php 
        
            if (is_category()) {
                single_cat_title('Články v kategorii ');
            } elseif (is_tag()) {
                echo "Tag archive.";
            } elseif (is_author()) {
                the_post();
                echo 'Články autora ' . get_the_author();
                rewind_posts();
            } elseif (is_day()) {
                echo "Archiv ze dne " . get_the_date();
            } elseif (is_month()) {
                echo "Příspěvky za měsíc " . get_the_date('F Y');
            } elseif (is_year()) {
                echo "Příspěvky v galerii za rok " . get_the_date('Y');
            } else {
                echo 'Archiv';
            }
        
        ?></h1>
    </div>
<nav class="navbar-menu blue jidelna"><ul>
<?php

/*Loop která zjistí roky... snad*/
$query_args = array (
                      'category_name' => 'galerie',
                      'order' => 'ASC',
                      //'date_query' => array ('year' => $_GET['year']) 
                      );
$roky_galerii = new WP_Query($query_args);
$year = 2013;
/*tohle zobrazí roky ve kterých byly příspěvky publikovaný a jako takový ty roky vypíše (i v odkazu)*/
while ($roky_galerii->have_posts()) : $roky_galerii->the_post();
  $rok = get_the_date('Y');
  while($rok_a<$rok) {
      ?><li class="archive_<?php echo $rok;?>"><a href="<?php echo get_site_url() . '/archiv-galerie/' . $rok; ?>"><?php echo $rok;?></a></li><?php
      $rok_a = get_the_date('Y');
  }
  
  
endwhile;


wp_reset_postdata();

/* -- END loop s rokama -- */ ?>
</ul></nav>   
<div class="body-content-with-navbar-container">
        <!--container pro rozložení stránky, ukončen je ve footeru--> 
<main class="content">
<?php simpleYearlyArchive('yearly');
  echo '<br>'; ?>

   <?php if($roky_galerii->have_posts()) :
      while ($roky_galerii->have_posts()) : $roky_galerii->the_post();
         
          
   get_template_part('content', get_post_format());
    
   endwhile;
   else :
       echo '<div id="nenalezeno">Obsah nenalezen</div>';
   endif; ?>
</main>
<?php get_footer(); ?>