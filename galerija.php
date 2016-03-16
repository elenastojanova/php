<html>
<head>
	<title>Galerija</title>
</head>
	<body>
	<h1> Galerija </h1>
	<div id = "galerija">
	<div class = "center">
		<?php

		$dir = 'uploads/';
		$uploads = scandir($dir);
		$images = array_diff(scandir($dir), array('..', '.'));
		// print_r($images);
		?>

		<ul class = "sliki">
		<?php
		foreach($images as $img){ 
				echo "<li class =\"slika\"> <img src=".$dir.$img." > </li>";
			} 
		?>
		</ul>
	</div>
</div>
<style>
*{
	box-sizing: border-box ;
}
	h1 {
	font-size: 30px;
	font-family: sans-serif;
	font-weight: bold;
	color: #96c8cf;
	text-align: center;
	margin-top: 20px;
	}


	body {
  background: #fff;
	}
 
	li {
  border: 3px solid #fff;  
  float: left;
  height: 400px;
  width: 500px;
  margin: 20px;
  overflow: hidden;
  
  -webkit-box-shadow: 3px 3px 3px #111;
          box-shadow: px 3px 3px #111;  
	}

	.galerija{
		width: 100%;
		height: auto;
			
	}
	.center{
		width: 1100px;
		margin: 0 auto;
	}
	

	
	 ul {
	margin: 0;
	float: left;
	padding: 0.5em;
	}

	 img {
	width: 100%;	
	height: 400px;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all .8s ease;
	}

	img:hover {
	-webkit-filter: grayscale(100%);
	}



</style>

</body>
</html>