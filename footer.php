		
	<footer id="footer">
		
		<?php if ( get_theme_mod('footer-ads','off') == 'on' ): ?>
		<div id="footer-ads">
			<?php dynamic_sidebar( 'footer-ads' ); ?>
		</div><!--/#footer-ads-->
		<?php endif; ?>
		
		<div id="footer-top" class="group">	
			<?php if ( !is_home() ): ?>
				<?php get_template_part('inc/highlight'); ?>
			<?php endif; ?>
		</div><!--/#footer-top-->
		
		<?php // footer widgets
			$total = 4;
			if ( get_theme_mod( 'footer-widgets','0' ) != '' ) {
				
				$total = get_theme_mod( 'footer-widgets' );
				if( $total == 1) $class = 'one-full';
				if( $total == 2) $class = 'one-half';
				if( $total == 3) $class = 'one-third';
				if( $total == 4) $class = 'one-fourth';
				}

				if ( ( is_active_sidebar( 'footer-1' ) ||
					   is_active_sidebar( 'footer-2' ) ||
					   is_active_sidebar( 'footer-3' ) ||
					   is_active_sidebar( 'footer-4' ) ) && $total > 0 ) 
		{ ?>		
		<div class="container dark" id="footer-widgets">			
			<div class="pad group">
				<?php $i = 0; while ( $i < $total ) { $i++; ?>
					<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
				
				<div class="footer-widget-<?php echo esc_attr( $i ); ?> grid <?php echo esc_attr( $class ); ?> <?php if ( $i == $total ) { echo 'last'; } ?>">
					<?php dynamic_sidebar( 'footer-' . $i ); ?>
				</div>
				
					<?php } ?>
				<?php } ?>
			</div><!--/.pad-->
		</div><!--/.container-->	
		<?php } ?>
			
		<?php if ( has_nav_menu('footer') ): ?>
			<div id="wrap-nav-footer" class="wrap-nav">
				<div class="container">
					<?php \Featureon\Nav::nav_menu(array('theme_location'=>'footer','menu_id' => 'nav-footer','fallback_cb'=> false)); ?>
				</div>
			</div>
		<?php endif; ?>
		
		<div id="footer-bottom">
			<div class="container">				
				<a id="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>			
				<div class="pad group">
					
					<div class="grid one-half">
						
						<?php if ( get_theme_mod('footer-logo') ): ?>
							<img id="footer-logo" src="<?php echo esc_url( get_theme_mod('footer-logo') ); ?>" alt="<?php echo esc_attr( get_bloginfo('name')); ?>">
						<?php endif; ?>
						
						<div id="copyright">
							<?php if ( get_theme_mod( 'copyright' ) ): ?>
								<p><?php echo esc_html( get_theme_mod( 'copyright' ) ); ?></p>
							<?php else: ?>
								<p><?php bloginfo(); ?> &copy; <?php echo esc_html( date_i18n( esc_html__( 'Y', 'featureon' ) ) ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'featureon' ); ?></p>
							<?php endif; ?>
						</div><!--/#copyright-->
						
						<?php if ( get_theme_mod( 'credit', 'on' ) == 'on' ): ?>
						<div id="credit">
							<p><?php esc_html_e('Powered by','featureon'); ?> <a href="http://wordpress.org" rel="nofollow">WordPress</a>. <?php esc_html_e('Theme by','featureon'); ?> <a href="https://agnarson.com" rel="nofollow">Alx</a>.</p>
						</div><!--/#credit-->
						<?php endif; ?>
						
					</div>
					
					<div class="grid one-half last">	
						<?php if ( get_theme_mod( 'footer-social', 'on' ) == 'on' ): ?>
							<?php featureon_social_links() ; ?>
						<?php endif; ?>
					</div>
				
				</div><!--/.pad-->
			</div><!--/.container-->
		</div><!--/#footer-bottom-->
		
	</footer><!--/#footer-->

</div><!--/#wrapper-->

<?php wp_footer(); ?>
</body>
</html>