<?php get_header(); ?>
	

	   	<section class="main-content">	
		
			<div class="primary-content">
				  
				  
				  	<?php get_template_part('loop'); ?>
				  				  
				 <div class="pagination-wrap clearfix"> 				  
				 	<span class="pagination-older"><?php next_posts_link(__('Older posts &raquo;')); ?></span>		  	
				 	<span class="pagination-newer"><?php previous_posts_link(__('&laquo; Newer posts')); ?></span> 
				 </div><!-- end .pagination-wrap -->	    			
		
		    </div><!-- end .primary-content -->
     
		      <div class="secondary-content">
		        <?php get_sidebar(); ?>
		      </div>
     
	   	</section> <!-- end .main-content -->   



<?php get_footer(); ?>