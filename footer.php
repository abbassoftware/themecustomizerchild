</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php if( get_theme_mod( 'show_footer_text' ) == '1' ){
			    echo get_theme_mod( 'footer_text_textbox', 'No footer text added as yet.' );
			} 
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>