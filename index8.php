<?php
// 9.Дано натуральное число n.
//   Вычислить: 11 + 22 + .. + nn.
//   Вывести на экран квадраты этих чисел,
//   а также сумму квадратов этих чисел.

$int = 5;
$int_str = (string)($int);
$new_string = $int_str.$int_str;
$new_int = (integer)($new_string);

	for ($new_int; $new_int !== 0; ($new_int -= 11)) {
		$summa[] = pow($new_int, 2);
	}
	foreach ($summa as $value) {
		echo $value.'<br/>';
	}
	echo array_sum($summa);
