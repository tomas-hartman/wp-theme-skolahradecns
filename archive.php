<?php
get_header();
?>
    <div id="nav-line"> <!-- Upravit CSS podobu tohohle -->
        <h1><?php 
        
            if (is_category()) {
                single_cat_title('Zobrazují se články v kategorii ');
            } elseif (is_tag()) {
                echo "Tag archive.";
            } elseif (is_author()) {
                the_post();
                echo 'Zobrazují se články autora <span style="font-weight: 400;">' . get_the_author() . "</span>";
                rewind_posts();
            } elseif (is_day()) {
                echo 'Zobrazuje se archiv ze dne <span style="font-weight: 400;">' . get_the_date() . "</span>";
            } elseif (is_month()) {
                echo 'Zobrazují se příspěvky za měsíc <span style="font-weight: 400;">' . get_the_date('F Y') . "</span>";
            } elseif (is_year()) {
                echo 'Zobrazují se příspěvky za rok <span style="font-weight: 400;">' . get_the_date('Y') . "</span>";
            } else {
                echo 'Archiv';
            }
        
        ?> &#8226; <a href="<?php echo get_home_url(); ?>" style="text-align: right; color: black;">zobrazit všechny články</a> </h1>
    </div>
    
    <div class="body-content-with-navbar-container">
        <!--container pro rozložení stránky, ukončen je ve footeru-->
<main class="content">
<?php
   if(have_posts()) :
      while (have_posts()) : the_post();   
          
   get_template_part('content', get_post_format());
    
   endwhile;
   else :
       echo '<div id="nenalezeno">Obsah nenalezen</div>';
   endif; ?>
</main>
<?php get_footer(); ?>