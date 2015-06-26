<?php

  /**
  *@desc A page. See single.php is for a blog post layout.
  */

  get_header();


  ?>
 	 <section class="main-content">	
					
			<div  class="primary-content">		   
				<?php get_template_part('loop'); ?>			 
		     </div><!-- end .primary-content -->
		     
     
		   <div class="secondary-content">
		        <?php get_sidebar(); ?>
		   </div>
		   
     
 	 </section> <!-- end .main-content -->

<?php  get_footer(); ?>