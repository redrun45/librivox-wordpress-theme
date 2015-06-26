<?php get_header(); ?>
   	<div class="main-content">
	   	<div  class="primary-content">
			<div id="content" class="error-page">
			 	<h2><span>Error 404</span> <br /> What you are looking for is no longer here</h2>
			 	<p><strong>You can try</strong></p>
				<dl>
					<dt></dt>
				    	<dd> Going <a href="<?php echo home_url(); ?>">HOME</a> 
				 		or doing a Search.</dd>
				 </dl>
			
			 
			     <form id="searchform" method="get" action="<?php echo home_url();  ?>">
				    <div>
					    <input type="text" name="s" id="s" size="25" />
					    <input type="submit" value="<?php _e('Search'); ?>" id="error-search" />
				    </div>
				 </form>
			
			 
			</div> <!-- end #content -->
	
	     </div><!-- end .primary-content -->
	     
	   <div class="secondary-content">
	        <?php get_sidebar(); ?>
	   </div>
     
	</div> <!-- end .main-content -->
<?php get_footer(); ?>