<?php
/**
 * The template for displaying search forms in TwoDudesFood
 *
 * @package TwoDudesFood
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="margin-top: 0;">
  <div class="row collapse search-bar">
    <div class="small-9 columns">
  		<input type="search" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twodudesfood' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
    </div>
    <div class="small-3 columns">
    	<input type="submit" class="button prefix" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twodudesfood' ); ?>">
    </div>
  </div>
</form>