<?php
/**
 * Template for displaying search forms in Safha One Page
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search', 'label', 'safha-one-page' ); ?></span>
	</label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'safha-one-page' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
	<button role="tab" type="submit" class="search-submit"><span><?php echo esc_attr_x( 'Search', 'submit button', 'safha-one-page' ); ?></span></button>
</form>