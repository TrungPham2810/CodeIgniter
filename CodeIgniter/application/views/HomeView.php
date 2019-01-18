
	<div class="gallery">
		<ul>
		<?php 
			foreach($images as $img):
				echo "<li><img src=\"uploads/".$img['name']."\"/></li>";
			endforeach;
			echo "<pre>";
			debug_print_backtrace();
    var_dump(debug_backtrace());
		?>
		</ul>
	</div>
