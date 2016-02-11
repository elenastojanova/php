<?php

// $ime;
// $Prezime;
// $10 - ne moze da pocne so brojka 
// $_naselba;


// $broj = 10;
// function parnepar(){
// 	if (($broj % 2) == 0){
// 		return 0;
// 	} else {
// 		return 1;
// 	}
// }

// function parnepar($a) {
// 	return $a % 2;
// }

// echo parnepar(20);
//  echo "<br>";


// $a = 10;

// if ($a === 10){
// 	echo "a e 10";
// }  else {
// 	echo "a ne e 10";
// }

// echo "<br>";


// $b = 5;
// if ($b == 2){
// 	echo 2;
// } else if($b == 3){
// 	echo 3;
// } else if($b == 4){
// 	echo 4;
// } else if($b == 5){
// 	echo 5;
// } else {
// 	echo "Nepoznat broj";
// }

// $b = 1001;
// $c = 30;
// if($c < 10 || $b < 10000){
// 	echo "Vistina";
// }

// echo "<br>";

// function pogolempomal($a){
// 	if ($a < 10){
// 		echo "Pomalo";
// 	} else if ($a > 10){
// 		echo "Pogolemo";
// 	} else {
// 		echo "Ednakov";
// 	}
// }

// pogolempomal(23);

$den = 'nedela';

switch($den){
	case 'ponedelnik':
		echo 'Prv den od nedelata';
	break;
	case 'vtornik':
		echo 'Vtor den od nedelata';
	break;
	case 'sreda':
		echo 'Tret den od nedelata';
	break;
	case 'cetvrtok':
		echo 'Cetvrt den  od nedelata';
	break;
	case 'petok':
		echo 'Petti den od nedelata';
	break;
	case 'sabota':
		echo 'Shesti den od nedelata';
	break;
	case 'nedela':
		echo 'Sedmi den od nedelata';
	break;
	default:
		echo 'Nepoznat den';
	break;

}

echo "<br>";

function par_nepar_switch($a){
	$broj = $a % 2;
	switch ($broj){
		case 0:
			return 'Par';
		break;
		default:
			return 'nepar';
		break;
	}
}

echo par_nepar_switch(10);
echo "<br>";
echo par_nepar_switch(21);
echo "<br>";

function ovoshje($a){
	if (strlen($a) % 2 == 0){
		echo 'Ubavo ovosje';
	} else {
		echo 'Neubavo ovosje';
	}
}

echo ovoshje('banana');
echo "<br>";
echo ovoshje('jabolko');

echo "<br>";
function denovi($a){
	if($a == 'Ponedelnik'){
		echo 'Raboten den';
	} else if ($a == 'Vtornik') {
		echo 'raboten den';
	} else if ($a == 'Sreda') {
		echo 'raboten den';
	} else if ($a == 'cetvrtok') {
		echo 'raboten den';
	} else if ($a == 'Petok') {
		echo 'raboten den';
	} else if ($a == 'Sabota') {
		echo 'neraboten den';
	} else {
		echo 'neraboten den';
	}
}
 echo denovi('Sabota');
 echo "<br>";
 echo denovi('Ponedelnik');
  echo "<br>";



function days($b){
	switch($b){
		case 'ponedelnik':
			echo 'raboten';
		break;
		case 'vtornik':
			echo 'raboten';
		break;
		case 'sreda':
			echo 'raboten';
		break;
		case 'cetvrtok':
			echo 'raboten';
		break;
		case 'petok':
			echo 'raboten';
		break;
		case 'sabota':
			echo 'neraboten';
		break;
		case 'nedela':
			echo 'neraboten';
		break;
		default:
			echo 'Nepoznat den';
		break;

	}
}

days('nedela');
 echo "<br>";
 days('vtornik');

?>