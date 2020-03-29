<?php 
/* Article header. Doesn't show author, shows if the document is up to date. */
?>

<header class="<?php cat_to_class(); ?>">
  <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
  <h2>
    <?php 
      $cas_pridani = get_the_time();
      $cas_aktualizace = get_the_modified_time();
    
      if($cas_pridani != $cas_aktualizace) {
          echo "aktuální k " . get_the_modified_time('d.m.Y'); 
      }
      else {
          echo "přidáno " . get_the_time('d.m.Y');
      }
    ?>
  </h2> 
</header>