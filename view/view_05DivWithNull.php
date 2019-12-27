<link rel="stylesheet" type="text/css" href="../css/style_3.css">
<form  method="post">
	<p>
		<label for="var_a">Введите начало массива</label><br>
		<input id="var_a" type="text" name="a_var">
	</p>
	<p>
		<label for="var_b">Введите конец массива</label><br>
		<input id="var_b" type="text" name="b_var">
	</p>
	<p>
		<label for="divNum">Введите число деления</label><br>
		<input id="divNum" type="text" name="numVar">
	</p>
	
	<p>
		<input type="submit" name="" value="don">
	</p>
	
</form>



<p>
	<span>Вы ввели начало массимва = <?=$eva1?></span><br>
	<span>Вы ввели конец массива = <?=$evb2?></span><br>
	<span>Вы ввели число деления = <?=$evb3?></span><br>
</p>

	<!-- <?=$eva?> -->
	
	


<span>Массив чисел: <pre><?=print_r($ovab)?></pre></span><br>
<span>Сумма - <?=$ct3?></span><br>

<!-- <?php//='a = '. $eva . "<br>"?>
<?php//='b = '. $evb?> -->
