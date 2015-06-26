<?php 
/*************
*     Main Loop
************/ 
?> 

			

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>"  <?php post_class('post-wrap'); ?>>

					 <?php if(is_single() || is_page()){ ?>		
					 		    	 
					 	 <h1 class="post-title"><?php the_title(); ?></h1>
					 	 
					 <?php } else { ?>
					 
					 	  <h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>	
					 	  
					 <?php } ?>	   
			      
					  <?php if( ! is_page()){ ?>	
				      <p class="meta">Posted on <a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php  the_time('F j, Y'); ?></a> by <?php the_author_posts_link(); ?> | Posted in <?php the_category(', ') ?> | Comments: <?php comments_popup_link(__('0', '1', '%')); ?></p>
				      <?php } ?>
				
				      <?php the_post_thumbnail(); ?>
				  
				      <div class="post-content">  
					  	<?php the_content(__('keep reading')); ?>
					 </div>
				  
					 <?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
				  
				  <?php if (! is_page()) {?>
					 
					  <p class="meta">Tags: <?php the_tags(' '); ?> </p>
				
				<?php } ?>  
					  
			   </div><!-- end .post-wrap -->

					  <?php endwhile; else: ?>
		
					  <p>Sorry, no posts matched your criteria.</p>
					  <?php endif; ?>
	
