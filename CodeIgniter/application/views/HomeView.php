<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		ul {
			list-style: none;
			display: flex;
			flex-wrap: wrap;
		}
	</style>
</head>
<body>
	<div class="gallery">
		<ul>
		<?php 
			foreach($images as $img):
				echo "<li><img src=\"uploads/".$img['name']."\"/></li>";
			endforeach;
		?>
		</ul>
	</div>
</body>
</html>
