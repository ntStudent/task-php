<link rel="stylesheet" type="text/css" href="../css/style_3.css">
<form  method="post">
	<p>
		<label for="var_a">Введите начало массива</label><br>
		<input id="var_a" type="text" name="begin_array">
	</p>
	<p>
		<label for="var_b">Введите конец массива</label><br>
		<input id="var_b" type="text" name="end_array">
	</p>
	<p>
		<label for="divNum">Введите число индекса массива</label><br>
		<input id="divNum" type="text" name="numVar">
	</p>
	
	<p>
		<input type="submit" name="" value="don">
	</p>
	
</form>



<p>
	<!-- // проверяем тип данных -->
	<span>объявляем переменную так: '$a = [ ];' её тип - <?=gettype($ova)?></span><br>
	<span>объявляем переменную так: '$b = array();' её тип - <?=gettype($ovb)?></span><br>
	<span>Вы ввели начало массимва = <?=$eva1?></span><br>
	<span>Вы ввели конец массива = <?=$evb2?></span><br>
	<span>Вы ввели число индекса массива = <?=$evb3?></span><br>

	<span>min = <?=$m?></span><br>
	<span>max = <?=$x?></span><br>
</p>

	<!-- <?=$eva?> -->
	
	

<p>
	<span>Массив чисел:</span><br>
 <pre><?=print_r($ct3)?></pre>
</p>








<!-- <span>Сумма - <?//=$ct3?></span><br>