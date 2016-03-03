<?php


print_r($_POST);

// if(strlen(trim($_POST['username'])) > 0 && strlen(trim($_POST['lastname'])) > 0 && strlen(trim($_POST['yearofbirth'])) > 0 && strlen(trim($_POST['email'])) > 0
// 	&& strlen(trim($_POST['pwd1'])) >0 && strlen(trim($_POST['pwd2'])) >0) {

// }

$err = 0;

if(!isset($_POST['username']) && strlen(trim($_POST['username'])) == 0 { $err++;}
if(!isset($_POST['lastname']) && strlen(trim($_POST['lastname'])) == 0 { $err++;}
if(!isset($_POST['yearofbirth']) && strlen(trim($_POST['yearofbirth'])) >0 { $err++;}
if(!isset($_POST['email']) && strlen(trim($_POST['email'])) == 0 { $err++;}
if(!isset($_POST['pwd1']) && strlen(trim($_POST['pwd1']))  ==  { $err++;}
if(!isset($_POST['pwd2']) && strlen(trim($_POST['pwd2'])) == 0 { $err++;}

if($err == 0 && trim($_POST['pwd1']) == trim($_POST['pwd2'])){
	echo "Uspesno";
} else {
	echo "Podatocite ne se pravilno vneseni";
}

?>