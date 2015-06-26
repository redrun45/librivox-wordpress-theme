		<!-- BLOG -->
		<div class="secondary-content post-list-home">	
    		<header>
    			<h3 class="title"><?php _e( 'Latest News', 'librivox' ); ?></h3>
    			<a class="more-link-home" href="<?php bloginfo( 'url' ); ?>/category/blog"><?php _e( 'more news &raquo;', 'librivox'); ?></a>
    		</header>
    		
			  <ul>
				  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

				  <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					  <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					  <p class="meta">Posted on <a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php  the_time('F j, Y'); ?></a></p>		  
					 <?php the_excerpt(__('more &raquo;')); ?>
				  </li>
				  
				<?php endwhile; ?>
				
			</ul>
  
				<?php else: ?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

			<?php endif; ?>
			
		</div>