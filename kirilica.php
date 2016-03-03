<?php
 
 // $textkirilica="Ова треба да е латиница";
 // $textlatinica="Yvon;e";
	$textkirilica = "Сед а малесуада ерос, ут дицтум анте ШЃшѓчќЧЌ.";
	$textlatinica = "Sed a malesuada eros, ut dictum ante {}[];':";
 
 	$kirilica  = array('а','б','в','г','д','ѓ','e','ж','з','ѕ','и','ј','к','л','љ','м','н','њ','о','П','р','с','т','ќ','у', 
 		'ф','х','ц','ч','џ','ш','А','Б','В','Г','Д','Ѓ','Е','Ж','З','Ѕ','И','Ј','К','Л','Љ','М','Н','Њ','О','П','Р','С','Т','Ќ','У',
 		'Ф','Х','Ц','Ч','Џ','Ш');
 	$latinica = array('a','b','v','g','d',']','e','|','z','y','i','j','k','l','q','m','n','w','o','p','r','s','t','`','u',
 		'f' ,'h' ,'c' ,';','>' ,'[','A','B','V','G','D','{','E','|','Z','Y','I','J','K','L','Q','M','N','W','O','P','R','S','T', "'",'U',
 		'F' ,'H' ,'C' ,':','.','}' );
 	$textkirilica = str_replace($kirilica, $latinica, $textkirilica);
 	$textlatinica = str_replace($latinica, $kirilica, $textlatinica);
 
 echo("$textkirilica");
 echo "<br>";
 echo("$textlatinica");
 

 ?>