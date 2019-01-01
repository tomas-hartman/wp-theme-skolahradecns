<div class="searching">
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Hledat:', 'label' ) ?></span>
		<input type="search" class="search-field" id="searchform" placeholder="<?php echo esc_attr_x( 'Hledat …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	
	<input type="submit" class="search-submit" id="submit-button" value="<?php echo esc_attr_x( 'Hledat', 'submit button' ) ?>" />
  </label>
</form>
</div>