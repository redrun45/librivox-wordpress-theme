<?php  
		 $args = array( 
			'post_type' => 'homepage_content', 
			'posts_per_page' => 1 );
		 $my_query = new WP_Query( $args );
		 while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		 		 

		<div class="homepage-main-wrap" id="main-content">
		
			<div class="block-wrap clearfix">
		
				<div class="homepage-main-block">
					<h2 class="first-title"><?php the_title(); ?></h2>
					<?php if (get_field('sub_header') ) { ?> 				    
	 				    	<p><span><?php the_field('sub_header'); ?></span></p>				    
	  				    <?php } ?>	 
				</div> <!-- end .homepage-main-block -->
					 	

			 	<?php /** BOX */ ?>	 	
			 	<div class="bottom-boxes">
			 	 <?php if(get_field('box_repeater')): ?>
 
			 	 	<?php while(has_sub_field('box_repeater')): ?>  			
			 	 		<div class="<?php the_sub_field('box_class'); ?> block">
				

										    
	 				    	<h3><?php the_sub_field('box_header'); ?></h3>				    
	  				    
							

	 				    	<?php the_sub_field('box_text'); ?>

	 				    
				    
	 				    	<a class="cta-btn" href="<?php the_sub_field('box_url'); ?>"><?php the_sub_field('box_button'); ?></a>				    

	 				  </div>  		
	  				 
	  				<?php endwhile; ?>
 
	  				 <?php endif; ?>   				    
			 	</div><!-- end .bottom-boxes -->
			</div><!-- end .block-wrap --> 
			       
	     </div> <!-- .end .homepage-main-wrap -->
	     

<?php endwhile; ?>	
<?php wp_reset_postdata(); ?>
