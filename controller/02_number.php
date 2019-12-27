<?php

include_once('../model/mvc.php');
// с массивом
//вводим число
// $number = "593458";
error_reporting(E_ALL ^ E_NOTICE);

include_once("../model/mvc.php");
// $anser = "";
if(count($_POST) > 0){
	$n =($_POST['number']);

// устанавливаем сумму
	$sum = 0;

	// // массив
	// $arr = [];

	// вводим число у которого нужно вычислить повторения
	$ns = ($_POST['digit']);

	// вводим число которое покажет количество повторений
	$hmc = 0;

	// создаем массив из числа
	

		// вычисляем сумму всех цифр числа
		

		// высчитываем количество повторений
		// if($ns1 == $number[$i]){
		// 	$hmc1 += 1;
		// }
	



	// без массива


// $hmc = 0;

	for ($i = 0; $i < strlen($n) ; $i++) {
		if($ns == $n[$i]){
			$hmc += 1;
		}
		$sum += $n[$i];
	}

	// $sum += $n[$i];

	// echo "число - " . $ns . " повторяется " . "$hmc " . "раз<br>";
		// делаем реверс массива
		// $nr = strrev($n);
		// $pr = print_r ($arr);

		// echo "<pre>";
		// print_r ($arr);
		// echo "<pre>";

		$c = "сумма всех цифр числа = " . $sum . "<br>" . "<br>";

		$c1 = "число = " . $n . "<br>";
		$c2 = "число наоборот = " . strrev($n) . "<br>" . "<br>";
		$c3 = "цифра - " . $ns . " повторяется " . "$hmc " . "раз<br><br>";
}

$a = template('../view/view_02Number.php', [
	'ct' => $c,
	'ct1' => $c1,
	'ct2' => $c2,
	'ct3' => $c3,
	// 'pra' =>  $arr,
	// 'priceCard' => $_POST['priceCard'],
	// 'name1212' => $priceCard1,
	'num' => $n
	// 'errors' => $errors
]);



$html = template('../view/view_main.php', [
	'title' => 'Сумма чисел',
	'content' => $a
	]);
	echo $html;