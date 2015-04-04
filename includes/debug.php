<?php
if ( ! function_exists( 'pp' ) ) {
	/**
	 * Pretty Print Debug Function
	 *
	 *
	 * <code>
	 * pp( $something_to_pretty_print );
	 * </code>
	 *
	 * @todo  Add localhost check.
	 *
	 * @since   2.0.0
	 *
	 * @param   mixed   $value Any value.
	 *
	 * @return  void
	 */
	function pp( $value ) {
		echo '<pre>';
		if ( gettype( $value ) === 'boolean' ) {
			var_dump( $value );
		} else {
			print_r( $value );
		} // if/else()
		echo '</pre>';
	} // pp()
} // if()