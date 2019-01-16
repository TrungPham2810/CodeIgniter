
	<div class="gallery">
		<ul>
		<?php 
			foreach($images as $img):
				echo "<li><img src=\"uploads/".$img['name']."\"/></li>";
			endforeach;
		?>
		</ul>
	</div>
