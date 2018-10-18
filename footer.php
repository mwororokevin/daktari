</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid">
		<div class="container">
			<div class="row">
				<div class="footer-nav col-md-12">
					<?php wp_nav_menu( array( 'daktari' => 'secondary' )); ?>
				</div>
			</div>
			<div class="row">
				<div class="theme-info col-md-12">
					<div class="theme-author-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'daktari' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( '', 'daktari' ), 'WordPress' );
							// Proudly powered by %s
							?>
						</a>
						<!-- <span class="sep"> | </span> -->
							<?php
							echo("&copy ");
							echo date("Y");
							echo(" - ");
							echo(" Mauel Dental Lab. All Rights Reserved.");
							?>
					</div>
				</div>	
			</div>	
			<div class="row">
				<div class="theme-info col-md-12">
					<div class="theme-author-info">
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( ' Theme: %1$s Designed & Developed by %2$s', 'daktari' ), 'daktari', '<a href="http://mwororokevin.com" target="_blank">mwororokevin.com</a>' );
						?>
					</div>
				</div>
			</div>		
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>