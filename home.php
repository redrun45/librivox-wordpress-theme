<?php get_header(); ?>
	
	
	<section class="main-content-home">	
	
		<?php get_template_part( 'home-content', 'main' );  ?>
	</section>
			
	<section class="main-content">	
		<?php get_template_part( 'home-content', 'nav' );  ?>
		
		<?php get_template_part( 'home-content', 'audiobooks-feed' );  ?>
	
		<?php get_template_part( 'home-content', 'blog' );  ?>	
		
	</section> <!-- end .main-content -->

  <?php get_footer(); ?>