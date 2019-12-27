<?php

include_once('../model/mvc.php');

error_reporting(E_ALL ^ E_NOTICE);






// $a = "aaa";
// $b = "bbb";

// echo '$a = ' . $a . "<br>" . '$b = ' . $b . "<br>";

// // list — Присваивает переменным из списка значения подобно массиву

// var_dump('$a = '. $a, '$b = ' . $b);








if(count($_POST) > 0){
	$enterVarA =($_POST['a_var']);
	$enterVarB = ($_POST['b_var']);
	$numD = ($_POST['numVar']);

	// $a = $enterVarA;
	// $b = $enterVarB;

	// создаем массив
	$arr2 = range($enterVarA, $enterVarB);
	$sum2 = 0;
	$d = [];

	for ($i = 0; $i < sizeof($arr2); $i++) {
	// $sr = $arr2[$i2] % 5;
		if($arr2[$i] % $numD == 0){
			$d[] = $arr2[$i];
			$sum2 += $arr2[$i];
		}

	}
}

$allPage = template('../view/view_05DivWithNull.php', [
	// 'eva' => $a,
	// 'evb' => $b,
	'ovab' => $d,
	'eva1' => $enterVarA,
	'evb2' => $enterVarB,
	'evb3' => $numD,
	'ct3' => $sum2,
	// 'pra' =>  $arr,
	// 'priceCard' => $_POST['priceCard'],
	// 'name1212' => $priceCard1,
	// 'num' => $n
	// 'errors' => $errors
]);



$html = template('../view/view_main.php', [
	'title' => 'Сумма чисел',
	'content' => $allPage
	]);
	echo $html;


// // создаем массив
// $arr2 = range(20,35);
// // $arr2 = [25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 40];
// $sum2 = 0;
// // $c = count($arr2);
// // перебираем массив и находим числа которые делятся на 5 без остатка
// for ($i = 0; $i < count($arr2); $i++) {
// 	// $sr = $arr2[$i2] % 5;
// 	if($arr2[$i] % 5 == 0){
// 		echo $arr2[$i] . "<br>";
// 		$sum2 += $arr2[$i];
// 	}
// 	// echo $sr . "<br>";

// }
// echo "<br>";
// echo $sum2;