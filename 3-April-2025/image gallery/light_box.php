<?php
	require_once('require/database_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Light Box Gallery</title>
	<style type="text/css">

		*{
			box-sizing: border-box;
		}

		h1{
			background-color: lightpink;
			width: 600px;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);
		}

		.row{
			display: flex;
			clear: both;
			margin-top: 10px;
		}

		.col-4{
			float: left;
			width: 33.33%;
			margin-left: 10px;
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);
			border-radius: 8px;
		}

		.col-4 > img{
			width: 100%;
			height: 100%;
			border-radius: inherit;
			cursor: pointer;
		}

		#lightBox{
			width: 600px;
			height: 400px;
			position: absolute;
			top: 25%;
			left: 25%;
			display: none;
		}

		#lightBox > img{
			height: 100%;
			width: 100%;
			border-radius: 8px;
		}

		#lightBox > button {
			position: absolute;
			right: 0;
			top: -2px;
			padding: 5px 10px;
			font-size: 18px;
			font-weight: 900;
			color: crimson;
			cursor: pointer;
			border:none;
			border-radius: 8px;
			background-color: lightpink;
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);
		}

	</style>
</head>
<body>
	<center>
		<h1>LightBox Image Gallery In JS</h1>
		<?php

		$sql = "SELECT path FROM file";
		$result = mysqli_query($database_connection, $sql);

		$count = 0;
		echo '<div class="row">';

		while($row = mysqli_fetch_assoc($result)) {
			$imagePath = $row['path'];

			echo '<div class="col-4">';
			echo '<img src="' . $imagePath . '" alt="No Image" onclick="showImage(this)"/>';
			echo '</div>';

			$count++;
			
			if ($count % 3 == 0) {
				echo '</div><div class="row">';
			}
		}

		if ($count % 3 !== 0) {
			echo '</div>';
		}
		?>


		<div id="lightBox">
			<img src="" alt="Image"/>
			<button onclick="hideImage()">X</button>
		</div>

		<script type="text/javascript">
			
			var lightBox 	= document.getElementById('lightBox');
			var lightBoxImg = document.querySelector('#lightBox > img'); 
			var rows 		= document.querySelectorAll('.row'); 

			function showImage($obj){

				
				lightBox.style.display = 'block';
				lightBoxImg.src = $obj.src;


				showHideRows(0.3, 'none');
			}

			function hideImage(){

				lightBox.style.display = 'none';

				showHideRows(1,'all');
			}


			function showHideRows($opacity,$pointerEvents){

				for(var i = 0; i < rows.length; i++){

					rows[i].style.opacity = $opacity;
					rows[i].style.pointerEvents = $pointerEvents;
				}
			}

			window.onkeyup = function(){
				
				if(event.keyCode == 27){
					
					hideImage();
				}
			}

		</script>

	</center>
</body>
</html>