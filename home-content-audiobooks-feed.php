			<!-- AUDIO BOOK FEED -->
	
    	<div class="audio-book-feed" id="secondary-content">
    	
    	    <header>
    		    <h3 class="title"><?php _e( 'Latest Audiobook Releases', 'librivox' ); ?></h3>
    			<a class="more-link-home" href="https://librivox.org/search/title"><?php _e( 'more audiobooks &raquo;', 'librivox'); ?></a>
    		</header>

            <ul class="browse-list">

    		<?php
			 $url = LIBRIVOX_LATEST_RELEASES;

			 $json = @file_get_contents($url);
			 $items = json_decode($json, TRUE);

             if (!empty($items))
             {
                
                //var_dump($items);
               // echo format_nongrouped_results($items);
                echo format_results($items);
             }   
			

			?>

            </ul>

    	</div>