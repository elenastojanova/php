<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Answer</title>
	</head>
	<body>
	<p>The answer is:

	<?php

		$value1 = $_POST['value1'];
		$value2= $_POST['value2'];

		if(isset($value1) && isset($value2)){

		if ($_POST['operation'] == '+'){
			echo $value1 + $value2;
		} elseif ($_POST['operation'] == '-'){
			echo $value1 - $value2;
		} elseif ($_POST['operation'] == '*') {
			echo $value1 * $value2;

		} else {
			if ($value2 == 0){
			echo "You can't divide by zero!";
		}
			else {
			echo $value1 / $value2;
		 
		}
	}
}
	?>
	</p>
	</body>
</html>
