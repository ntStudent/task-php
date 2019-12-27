<?php

include_once('model/mvc.php');
// с массивом
//вводим число
// $number = "593458";
error_reporting(E_ALL ^ E_NOTICE);

include_once("model/mvc.php");
// $anser = "";
if(count($_POST) > 0){
	$number =($_POST['number']);

// устанавливаем сумму
	$sum = 0;

	// массив
	$arr = [];

	// вводим число у которого нужно вычислить повторения
	$ns1 = ($_POST['digit']);

	// вводим число которое покажет количество повторений
	$hmc1 = 0;

	// создаем массив из числа
	for ($i = 0; $i < mb_strlen($number); $i++){
		$arr[] = $number[$i];

		// вычисляем сумму всех цифр числа
		$sum += $number[$i];

		// высчитываем количество повторений
		if($ns1 == $number[$i]){
			$hmc1 += 1;
		}
	}
	// делаем реверс массива
	$arr1 = array_reverse($arr);
	// $pr = print_r ($arr);

	// echo "<pre>";
	// print_r ($arr);
	// echo "<pre>";

	$c = "сумма всех цифр числа = " . $sum . "<br>" . "<br>";

	$c1 = "число = " . implode('', $arr) . "<br>";
	$c2 = "число наоборот = " . implode('', $arr1) . "<br>" . "<br>";
	$c3 = "число - " . $ns1 . " повторяется " . "$hmc1 " . "раз<br><br>";
}

$a = template('view/view_01Number.php', [
	'ct' => $c,
	'ct1' => $c1,
	'ct2' => $c2,
	'ct3' => $c3,
	'pra' =>  $arr,
	// 'priceCard' => $_POST['priceCard'],
	// 'name1212' => $priceCard1,
	'num' => $number
	// 'errors' => $errors
]);



$html = template('view/view_main.php', [
	'title' => 'Сумма чисел',
	'content' => $a
	]);
	echo $html;