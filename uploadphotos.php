<?php

function upload($fname, $ftmp, $ftype, $fsize){
	$types = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
	$size  = 1024 * 1024 * 10;
	if(in_array($ftype, $types) && $fsize < $size){
		$r = rand(1000000000, 9999999999);
		$upload_dir = 'uploads/';
		$file_name = $fname;
		$temp_location = $ftmp;
		$new_location = $upload_dir.$r.'_'.$file_name; // uploads/4987235423_image.jpg
		if(move_uploaded_file($temp_location, $new_location)){
			echo "Upload successfull for image: <b>$fname</b> <br/>";
		} else {
			echo "Upload failed by unknown reason for image: <b>$fname</b> <br/>";
		}
	} else {
		echo "File does not fit the criteria for image: <b>$fname</b> <br/>";
	}
}

if(isset($_FILES['slika'])){

	$num = count($_FILES['slika']['name']);

	for($i = 0; $i < $num; $i++){
		if($_FILES['slika']['error'][$i] == 0){
			upload($_FILES['slika']['name'][$i], $_FILES['slika']['tmp_name'][$i], $_FILES['slika']['type'][$i], $_FILES['slika']['size'][$i]);
		} else {
			echo "Can't upload <b>".$_FILES['slika']['name'][$i]."</b><br/>";
		}
	}
}
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="uploadphotos.php" method="post" enctype="multipart/form-data">
			<input type="file" name="slika[]" multiple/>
			<button type="submit">Upload file</button>
		</form>
	</body>
	<style>
	input {
		border: none;
		color: #fff;
		background:  #96c8cf;
		font-family: sans-serif;
		font-size: 12px;
		text-transform: uppercase;
	}
	button {
		color: #fff;
		font-size: 12px;
		font-family: sans-serif;
		font-weight: bold;
		text-transform: uppercase;
		padding: 5px 10px 5px 10px;
		background-color: #96c8cf;
		display: block;
		border:none;
		border-radius: 2px;
		display: inline;
	}


	</style>
</html>

