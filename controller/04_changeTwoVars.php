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

	$a = $enterVarA;
	$b = $enterVarB;


	$a = $a^$b;
	$b = $b^$a;
	$a = $a^$b;
}

$allPage = template('../view/view_04ChangeTwoVars.php', [
	'eva' => $a,
	'evb' => $b,
	// 'ovab' => $endChange,
	'eva1' => $enterVarA,
	'evb2' => $enterVarB,
	// 'ct3' => $c3,
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