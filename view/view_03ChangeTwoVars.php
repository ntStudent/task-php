<link rel="stylesheet" type="text/css" href="../css/style_3.css">
<form  method="post">
	<p>
		<label for="var_a">Введите переменную - а</label><br>
		<input id="var_a" type="text" name="a_var">
	</p>
	<p>
		<label for="var_b">Введите переменную - b </label><br>
		<input id="var_b" type="text" name="b_var">
	</p>
	
	<p>
		<input type="submit" name="" value="don">
	</p>
	
</form>



<p>
	<span>Вы ввели переменную а = <?=$eva1?></span><br>
	<span>Вы ввели переменную b = <?=$evb2?></span>
</p>

	<!-- <?=$eva?>
	<?=$evb?> -->
	<!-- <?=$ovab?> -->

<?=list($evb2, $eva1) = array($eva1, $evb2);?><br>
<span>Меняем значения переменных местами</span><br>
<span>Теперь</span><br>

<?='a = '. $eva1 . "<br>"?>
<?='b = '. $evb2?>
