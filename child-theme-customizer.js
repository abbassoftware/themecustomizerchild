( function( $ ) {
	wp.customize( 'footer_text_textbox', function( value ) {
		value.bind( function( to ) {
			$( '.site-info' ).text( to );
		} );
	} );
})( jQuery );