<?php

// this function calculates the factorial of a given number
function calculateFactorial($number){
	$total = 1;
	for ($i = 1; $i <= $number; $i++){
		$total *= $i;
	}
	return $total;
}



?>