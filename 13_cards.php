
<?php
error_reporting(E_ALL ^ E_NOTICE);

include_once("model/mvc.php");
// $anser = "";
if(count($_POST) > 0){
	$priceCard =($_POST['priceCard']);
	if ($priceCard < 11 && $priceCard > 5){
	$anser = "card price is - " . $priceCard;
	// echo $anser;
	}
	if ($priceCard > 14 or $priceCard == 0 or $priceCard<=5) {
		$anser = "Sorry no such card";
	}
}

switch ($priceCard) {
	case '11':
		$anser = "card price is - " . "Jack";
		break;
	case '12':
		$anser = "card price is - " . "Queen";
		break;
	case '13':
		$anser = "card price is - " . "King";
		break;
	case '14':
		$anser = "card price is - " . "Ace";
		break;
	// default:
	// 	# code...
	// 	break;
}

// $a = template('view/view_13Cards.php');
	$a = template('view/view_13Cards.php', [
	// 'priceCard' => $_POST['priceCard'],
	// 'name1212' => $priceCard1,
	'anser' => $anser
	// 'errors' => $errors
]);
// 	if ($priceCard == 11) {
// 		echo "card price is - " . "Jack";
// 	}
// 	if ($priceCard == 12) {
// 		echo "card price is - " . "Queen";
// 	}
// 	if ($priceCard == 13) {
// 		echo "card price is - " . "King";
// 	}
// 	if ($priceCard == 14) {
// 		echo "card price is - " . "Ace";
// 	}
// }


$html = template('view/view_main.php', [
	'title' => 'Карты',
	'content' => $a
	]);
	echo $html;




