<?php
function is_houre($n){
	$ex = "";
	if ($n % 5==0 or $n % 10 == 4 or $n % 10 == 9){
	$ex = "Green";
    }
    else{
    	$ex = "Red";
    }
    echo $ex . "<br>";
}