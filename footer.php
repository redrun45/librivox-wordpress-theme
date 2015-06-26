<?php if (is_front_page()){
	 get_template_part( 'content', 'statistics' ); 
} ?>	 

	<footer class="footer-wrap" id="footer">
			<div class="footer">
				<a class="license" href="#"><img src="<?php bloginfo('template_directory'); ?>/images/public-domain-license.gif" alt="public-domain-license" width="88" height="31" /></a>

				<?php
					if (is_active_sidebar( 'footer')): 
					dynamic_sidebar( 'footer' ); 
					endif; 
				?>

			</div><!-- end .footer-wrap -->	
		</footer>
        <?php wp_footer(); ?>
  </body>
</html>