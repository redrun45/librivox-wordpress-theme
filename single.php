<?php get_header(); ?>
  
  <section class="main-content">	
		

			<div class="primary-content">
		
		
				<?php get_template_part('loop'); ?>
		    
		    
			    <div class="pagination-wrap clearfix">
			      <span class="pagination-older"><?php previous_post_link('%link &raquo;'); ?></span>
			      <span class="pagination-newer"><?php next_post_link('&laquo; %link'); ?></span>
				</div>
				
			<?php comments_template(); ?>
		
	
				
		   </div><!-- end .primary-content -->
		     
		   <div class="secondary-content">
		        <?php get_sidebar(); ?>
		   </div>
     
  </section> <!-- end .main-content -->		
 


<?php  get_footer(); ?>