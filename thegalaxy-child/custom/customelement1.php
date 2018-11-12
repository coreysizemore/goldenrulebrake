<?php
	
	$items = get_field('youtube_videos');
	
	if ($items):
	
		shuffle($items);
	
		$count = count($items);
			
		echo '<div class="youtube_videos"><div class="container"><div class="row gutters"><div class="col_12">';
						
		foreach( $items as $video ):
				
			if($count == 1):
						        
				echo '<div class="video_1">';
						
			elseif($count == 2):
					
				echo '<div class="video_2">';
						
			elseif($count == 3):
					
				echo '<div class="video_3">';
						
			elseif($count == 4):
					
				echo '<div class="video_4">';
				
			elseif($count == 5):
					
				echo '<div class="video_5">';
						
			else :
					
				echo '<div class="video_1">';
						
			endif;
					
			echo '<div class="youtube_video_item">';
				
				echo $video['video_code'];
					
			echo '</div></div>';
						
		endforeach;
					
		echo '</div></div></div></div>';
	
	endif;
		
?>