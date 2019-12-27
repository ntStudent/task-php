<?php
// include_once("view/view.php");
include_once("model/function.php");
date_default_timezone_set('Asia/Yekaterinburg');

echo "#####################-1- <br>";
echo "<br>";
// error_reporting(E_ALL ^ E_NOTICE);



echo "#####################-2- <br>";
echo "<br>";

// без массива
// $ns = 4;
// $n = "3343";
// $hmc = 0;

// for ($i1 = 0; $i1 < strlen($n) ; $i1++) {
// 	if($ns == $n[$i1]){
// 		$hmc += 1;
// 	}
// }

// echo "число - " . $ns . " повторяется " . "$hmc " . "раз<br>";

echo "<br>";
echo "#####################-3- <br>";
echo "<br>";

// меняем значение двух переменных без пременения третьей
// $a = "aaa";
// $b = "bbb";

// echo '$a = ' . $a . "<br>" . '$b = ' . $b . "<br>";

// // list — Присваивает переменным из списка значения подобно массиву
// list($b, $a) = array($a, $b);
// var_dump('$a = '. $a, '$b = ' . $b);
echo "<br>";

echo "<br>";
echo "#####################-4- <br>";
echo "<br>";

// то же при помощи бинарных операций
// $a = "aaa";
// $b = "bbb";

// $a = $a^$b;
// $b = $b^$a;
// $a = $a^$b;
// echo '$a = ' . $a . "<br>" . '$b = ' . $b . "<br>";


echo "<br>";
echo "#####################-5- <br>";
echo "<br>";
// создаем массив
// $arr2 = range(1,50);
// $arr2 = [25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 40];
// $sum2 = 0;
// $c = count($arr2);
// перебираем массив и находим числа которые делятся на 5 без остатка
// for ($i = 0; $i < count($arr2); $i++) {
	// $sr = $arr2[$i2] % 5;
	// if($arr2[$i] % 5 == 0){
		// echo $arr2[$i] . "<br>";
		// $sum2 += $arr2[$i];
	// }
	// echo $sr . "<br>";

// }
// echo "<br>";
// echo $sum2;

echo "<br>";
echo "#####################-6- <br>";
echo "<br>";


$arr5 = range(20,30);

echo "<pre>";
print_r ($arr5);
echo "<pre>";

echo "<br>";
echo "#####################-7- <br>";
echo "<br>";

// объявляем массивы
$a = [];
$b = array();

// проверяем тип данных
echo gettype($a) . "<br>";
echo gettype($b);

// наполняем массив случайными числами
for ($i=0; $i < 7; $i++) {
	$a[] = rand(2, 100);
}
echo "<pre>";
print_r ($a);
echo "<pre>";

// находим минимум и максимум в массиве
$min = min($a);
$max = max($a);
echo "min = " . $min . "<br>";
echo "max = " . $max;

// меняем местами минимум и мкксимкм
foreach($a as $k => $v){
	// echo "[$k] -> $v <br>";
	if($v == $min){
		$a[$k] = $max;
	}
	if ($v == $max) {
		$a[$k] = $min;
	}
}

echo "<pre>";
print_r ($a);
echo "<pre>";

echo "<br>";
echo "#####################-8- <br>";
echo "<br>";

$a = [];
$b = array();
$min = 100000;
$max = 0;

// наполняем массив случайными числами
for ($i=0; $i < 7; $i++) {
	$a[] = rand(0, 100);
	// $min = $a[0];
	if ($a[$i] > $max) {
		$max = $a[$i];
	}
	// $min = $a[0];
	// echo $a[0];
	if ($a[$i] < $min) {
		$min = $a[$i];
	}
}
echo "<pre>";
print_r ($a);
echo "<pre>";
echo "max = сам вычислил - " . $max . "<br>";
echo "max = функция PHP - " . max($a) . "<br><br>";
echo "min = сам вычислил - " . $min . "<br>";
echo "min = футкция PHP - " . min($a) . "<br>";

echo "<br>";
echo "#####################-9- <br>";
echo "<br>";

for ($q=0; $q <= 8; $q++) {
	$arrr[] = rand(1, 100);
}
echo "<pre>";
print_r ($arrr);
echo "<pre>";

$mult = 1;
for($i = 0; $i < count($arrr); $i++){
	if($arrr[$i] % 2 == 0){
		// echo "11111-" . $arrr[$i] . "<br>" ;
		$odd[] = $arrr[$i];
		$mult *= $arrr[$i];
	}
	if($arrr[$i] % 2 != 0){
		echo $i . "->" . $arrr[$i] . "<br>" ;
	}
}
echo "<pre>";
print_r ($odd);
echo "<pre>";
echo $mult;

// for($i = 0; $i < count($arrr); $i++){
// 	echo $i;
	// if($arrr[$i] % 2 == 0){
	// 	echo $arrr[$i] . "<br>" ;
	// }
	// if($arrr[$i] % 2 != 0){
	// 	echo $i . "->" . $arrr[$i] . "<br>" ;
	// }
// }

echo "<br>";
echo "#####################-10- <br>";
echo "<br>";
// $famy = "";
// if(count($_POST) > 0){
// 	$famy = $_POST['fam'];
// }
// echo $famy;
echo $nameLong = "Пупкин Василий Петрович";
echo "<hr align=\"left\" width=\"300px\">";
$nameShort = preg_replace('/(\w+) (\w)\w+ (\w)\w+/iu', '$1 $2. $3.', $nameLong);

$nameShort1 = explode(" ", $nameLong);
echo "первый способ - " . $nameShort . "<br>" ;
mb_internal_encoding("UTF-8");
echo "второй способ - " . $nameShort1[0] . " " . substr($nameShort1[1], 0, 2) . ". " . substr($nameShort1[2], 0, 2) . "." .  "<br>" ;

echo "<br>";
echo "#####################-11- <br>";
echo "<br>";

$hmh =0;
$gr = 128;

if($gr < 30){
	$hmh = 0;
}
else{
	$hmh = $gr/30;
}

echo "Количество целых часов - " . (int)$hmh . ", в " . $gr . " градусах";

echo "<br>";
echo "<br>";
echo "#####################-12- <br>";
echo "<br>";
$time = date('H:i:s');



$nt = 4;
echo 'Введено руками - ' . $nt . "<br>";


echo "Ручной ввод - ";
is_houre($nt);

echo "<br>";

echo 'Время сейчас - ' . $time . "<br>";
$dt = date('i');

echo "По часам - ";
is_houre($dt);

echo "<br>";
echo "<br>";
echo "#####################-12- <br>";
echo "<br>";

$che = 2004;
echo $che . " - ";
if (($che % 4 == 0 && $che % 100 != 0) or $che % 400 == 0 or $che == 2000) {
	echo "Leap year";
}
else{
	echo "Not a leap year";
}

echo "<br>";
echo "<br>";
echo "#####################-13- <br>";
echo "<br>";

$nw = date('Y') -1;
for ($i = 0; $i <= 10; $i++){
	$nw++;
	$dt = date('d-m-Y', mktime(0, 0, 0, 12, 31, $nw));
	setlocale(LC_ALL, 'russian_RUSSIA.cp1251');
	echo $dt . strftime(" - %A", strtotime($dt)) . "<br>";
}

echo "<br>";
echo "<br>";
echo "#####################-14- <br>";
echo "<br>";

$arr = [];
$number = '51';
for ($i = 0; $i < $number; $i++){
		// $arr[] = $i;
		$arr[$i] = rand(35, 3874);
// 		echo "<pre>";
// print_r ($arr);
// echo "<pre>";
	}
echo "<pre>";
print_r ($arr);
echo "<pre>";

echo "<br>";
echo "<br>";
echo "#####################-15- <br>";
echo "<br>";

//список месяцев с названиями для замены
$_monthsList = array(".01." => "января", ".02." => "февраля",
".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня",
".07." => "июля", ".08." => "августа", ".09." => "сентября",
".10." => "октября", ".11." => "ноября", ".12." => "декабря");

//текущая дата
// $currentDate = date("d.m.Y");
//переменная $currentDate теперь хранит текущую дату в формате 22.07.2015

//но так как наша задача - вывод русской даты,
//заменяем число месяца на название:
$_mD = date(".m."); //для замены
// $currentDate = str_replace($_mD, "- ".$_monthsList[$_mD]."- ", $currentDate);
$currentDate = date("d $_monthsList[$_mD] Y");
//теперь в переменной $currentDate хранится дата в формате 22 июня 2015
echo $currentDate;

function rusDay(){
	//список месяцев с названиями для замены
$_monthsList = array(".01." => "января", ".02." => "февраля",
".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня",
".07." => "июля", ".08." => "августа", ".09." => "сентября",
".10." => "октября", ".11." => "ноября", ".12." => "декабря");

//текущая дата
// $currentDate = date("d.m.Y");
//переменная $currentDate теперь хранит текущую дату в формате 22.07.2015

//но так как наша задача - вывод русской даты,
//заменяем число месяца на название:
$_mD = date(".m."); //для замены
// $currentDate = str_replace($_mD, "- ".$_monthsList[$_mD]."- ", $currentDate);
$currentDate = date("d $_monthsList[$_mD] Y");
//теперь в переменной $currentDate хранится дата в формате 22 июня 2015
echo $currentDate;
}
rusDay();

?>
