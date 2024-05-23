<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package topshop
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer <?php echo ( get_theme_mod( 'topshop-footer-switch-bottombar' ) ) ? sanitize_html_class( 'site-footer-bottom-bar-switch' ) : ''; ?>" role="contentinfo">
	
    <div class="site-footer-widgets">
        <div class="site-container">
            <ul>
                <?php dynamic_sidebar( 'topshop-site-footer' ); ?>
            </ul>
            <div class="clearboth"></div>
            
			<?php printf( __( '</div></div><div class="site-footer-bottom-bar"><div class="site-container"><div class="site-footer-bottom-bar-left">Theme: %1$s by %2$s', 'topshop' ), 'TopShop', '<a href="https://kairaweb.com/">Kaira</a></div><div class="site-footer-bottom-bar-right">' ); ?>
            
            <?php _e( 'Proudly powered by ', 'topshop' ); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'topshop' ) ); ?>"><?php printf( __( '%s', 'topshop' ), 'WordPress' ); ?></a>
            
	        </div>
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
</footer> <!-- .site-footer -->
</div>  <!-- #page -->
<?php if ( get_theme_mod( 'topshop-btt-button' ) ) : ?>
    <div class="scroll-to-top"><i class="fas fa-angle-up"></i></div> <!-- Scroll To Top Button -->
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>