<?php

// print_r ($_POST);

$username = $_POST['username'];
$password = $_POST['password'];

if(strlen(trim($_POST['username'])) > 0 && strlen(trim($_POST['password'])) > 0 ){

	if ($username == 'admin' && $password == 'admin'){
		echo "Hello admin";
	} else {
		echo "Nemate privilegii za logiranje.";
	}
} else {
	echo "No username or password";
}

?>