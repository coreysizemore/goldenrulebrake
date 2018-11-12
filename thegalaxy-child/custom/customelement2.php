<?php

	if( have_rows('location') ):
	
		$location = get_field('location');
			
		echo '<div class="location_wrapper">';
						
		foreach( $location as $loc ):
					
			echo '<div class="location_item">';
				
				echo $loc['location_content'];
					
			echo '</div>';
						
		endforeach;
					
		echo '</div>';
				
	endif;
	
?>