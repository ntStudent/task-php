<?php
include_once('../model/mvc.php');

error_reporting(E_ALL ^ E_NOTICE);

if(count($_POST) > 0){

	// объявляем массивы
	$a = [];
	$b = array();

	 // echo "объявляем переменную так: '$a = [];' её тип - " . gettype($a) . "<br>";

	

	$beginEnterVar =($_POST['begin_array']);
	$endEnterVar = ($_POST['end_array']);
	$numD = ($_POST['numVar']);

	// // создаем массив и наполняем массив случайными числами
	for ($i=0; $i < $numD; $i++) {
		$a1[] = rand($beginEnterVar, $endEnterVar);
	}

	// находим минимум и максимум в массиве
	$min = min($a1);
	$max = max($a1);
	}

$allPage = template('../view/view_06Array.php', [
	'm' => $min,
	'x' => $max,
	'ova' => $a,
	'ovb' => $b,
	'eva1' => $beginEnterVar,
	'evb2' => $endEnterVar,
	'evb3' => $numD,
	'ct3' => $a1,
]);



$html = template('../view/view_main.php', [
	'title' => 'Операции с массивами',
	'content' => $allPage
	]);
	echo $html;



###############################################################






// объявляем массивы
// $a = [];
// $b = array();

// // проверяем тип данных
// echo "объявляем переменную так: '$a = [];' её тип - " . gettype($a) . "<br>";
// echo "объявляем переменную так: '$b = array();' её тип - " . gettype($b);

// // наполняем массив случайными числами
// for ($i=0; $i < 7; $i++) {
// 	$a[] = rand(2, 100);
// }
// echo "<pre>";
// print_r ($a);
// echo "<pre>";

// // находим минимум и максимум в массиве
// $min = min($a);
// $max = max($a);
// echo "min = " . $min . "<br>";
// echo "max = " . $max;
###############################################################




// меняем местами минимум и мкксимкм
// foreach($a as $k => $v){
// 	// echo "[$k] -> $v <br>";
// 	if($v == $min){
// 		$a[$k] = $max;
// 	}
// 	if ($v == $max) {
// 		$a[$k] = $min;
// 	}
// }

// echo "<pre>";
// print_r ($a);
// echo "<pre>";

// echo "<br>";
// echo "#####################-8- <br>";
// echo "<br>";

// $a = [];
// $b = array();
// $min = 100000;
// $max = 0;

// // наполняем массив случайными числами
// for ($i=0; $i < 7; $i++) {
// 	$a[] = rand(0, 100);
// 	// $min = $a[0];
// 	if ($a[$i] > $max) {
// 		$max = $a[$i];
// 	}
// 	// $min = $a[0];
// 	// echo $a[0];
// 	if ($a[$i] < $min) {
// 		$min = $a[$i];
// 	}
// }
// echo "<pre>";
// print_r ($a);
// echo "<pre>";
// echo "max = сам вычислил - " . $max . "<br>";
// echo "max = функция PHP - " . max($a) . "<br><br>";
// echo "min = сам вычислил - " . $min . "<br>";
// echo "min = футкция PHP - " . min($a) . "<br>";

// echo "<br>";
// echo "#####################-9- <br>";
// echo "<br>";

// for ($q=0; $q <= 8; $q++) {
// 	$arrr[] = rand(1, 100);
// }
// echo "<pre>";
// print_r ($arrr);
// echo "<pre>";

// $mult = 1;
// for($i = 0; $i < count($arrr); $i++){
// 	if($arrr[$i] % 2 == 0){
// 		// echo "11111-" . $arrr[$i] . "<br>" ;
// 		$odd[] = $arrr[$i];
// 		$mult *= $arrr[$i];
// 	}
// 	if($arrr[$i] % 2 != 0){
// 		echo $i . "->" . $arrr[$i] . "<br>" ;
// 	}
// }
// echo "<pre>";
// print_r ($odd);
// echo "<pre>";
// echo $mult;