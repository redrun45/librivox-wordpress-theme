	<h3>Browse the catalog </h3>
	<!-- Sidebar MAIN MENU -->
	<nav class="main-menu-list-wrap ">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu','container' => false,  'menu_class' => 'main-menu-list' ) ); ?>
	</nav>	
	<ul class="sidebar-widget-wrap">
		
				<?php
					if (is_active_sidebar( 'primary')): 
					dynamic_sidebar( 'primary' ); 
					endif; 
				?>
	
	</ul>