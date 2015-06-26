<?php get_header(); ?>

   	<section class="main-content">	
   	
			<div  class="primary-content">
			 	<div class="content-headers">
			  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			   <?php /* If this is a category archive */ if (is_category()) { ?>
			    <h1 class="page-title"> <?php single_cat_title(); ?></h1>
			   <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			    <h1 class="page-title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
			   <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			    <h1 class="page-title">a <?php the_time('F jS, Y'); ?></h1>
			   <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			    <h1 class="page-title"> <?php the_time('F, Y'); ?></h1>
			   <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			    <h1 class="page-title"><?php the_time('Y'); ?></h1>
			   <?php /* If this is an author archive */ } elseif (is_author()) { ?>
			    <h1 class="page-title">Author Archive</h1>
			   <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			    <h1 class="page-title">Blog Archives</h1>
			   <?php } ?>
			</div> <!-- end.content-headers-->
			
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