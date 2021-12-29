<?php
// функции 

// + 1.Создать функцию в PHP — getPlus10(), 
//которая будет принимать число и 
//распечатывать сумму этого числа и 10.

function getPlus10($chislo) {
	$new_chislo = $chislo + 10;
	echo $new_chislo.'<br>';
}
getPlus10(15);

// + 2. Изменить функцию из предыдущего задания: 
//она должна возвращать сумму,
//а не сразу выводить.

function getPlus10Another($chislo) {
	$new_chislo = $chislo + 10;
	return $new_chislo;
}
echo getPlus10Another(20).'<br>';

/* + 3. Напишите функцию pythagoras(), 
которая принимает значения двух катетов 
прямоугольного треугольника и 
возвращает размер гипотенузы этого прямоугольного 
треугольника. 
Примечание: может пригодиться встроенная 
PHP-функция pow().
 */

function pythagoras($katet1, $katet2) {
	$gipotenuza = (pow($katet1, 2) + pow($katet2, 2));
	$gipotenuza = round(sqrt($gipotenuza), 2);
	return $gipotenuza;
}
echo pythagoras(10, 1).'<br>';

//* + 4 Создать функцию, которая находит ипотечный платеж

function ipoteka($S, $p, $m) {
	//$x = mesyatsMoney;
	//$S = summaKredita;
	//$p = mesyatsStavka; // godovaya na 12
	//$m = srokMesyatsy;
	$x = ($S/$m) + ($S * $p);
	$x = round($x, 2);
	return $x;
}
echo ipoteka(10000, 0.02, 10).'<br>';

/* + 5. Создайте функцию col(), 
которая распечатает количество переданных аргументов.
Например: col(12,6,123) должна распечатать число 3. */

function col() {
	$kol = func_num_args();
	echo $kol.'<br>';
}
col(1, 2, 3, 4, 5, 6);

/* + 6. Создайте функцию, которая посчитает 
среднее значение всех целочисленных аргументов */

function sredneeInt() {
	$kol = func_num_args();
	$argumenty = func_get_args();
		for ($i = 0; $i < $kol; $i++) {
		if (is_int($argumenty[$i])) {
			$argumentyInt[] = $argumenty[$i];
		}
	}
	$summa = 0;
	for ($i = 0; $i < count($argumentyInt); $i++) {
		$summa += $argumentyInt[$i];
	}
	$itog = $summa/count($argumentyInt);
	return $itog; 
}
echo sredneeInt(1, 3.9, 4.8, 2, 2, 5, 3).'<br>';

/* + 7. Напишите функцию, которая принимает 
неограниченное количество числовых аргументов и 
строит столбчатую диаграмму. 
На каждому столбце указываются величины из аргументов. */

// КРАСОТА )) Я в восторге ))  

function diagram() {
	for ($i = 0; $i < func_num_args(); $i++) {
		$arg = func_get_arg($i);
			for ($j = 0; $j < $arg; $j++) {	
				printf("%s", '█');
			}
			echo "  $arg<br>";
	}
}
diagram(3, 1, 5, 9, 3, 4, 6, 8, 3, 4, 6, 4,
	9, 6, 8, 3, 5, 7, 4, 7).'<br>';

/* + 8. Напишите функцию op(), 
которая принимает три аргумента: 
$num1 и $num2 – числовые, 
$operator – символ, обозначающий операцию. 
Функция должна возвращать результат выполнения 
оператора $operator над $num1 и $num
 */

function op($num1, $num2, $operator) {
	switch ($operator) {
		case '+':
			return $otvet= $num1 + $num2;
			break;
		case '-':
			return $otvet= $num1 - $num2;
			break;
		case '*':
			return $otvet= $num1 * $num2;
			break;
		case '/':
			return $otvet= round($num1 / $num2, 2);
			break;
		default: 
			echo "Oops";
	}
}
echo op(6, 3, '/').'<br>';

/* 9. Создайте две функции add() и sub(), 
 которые принимают пару аргументов и 
 возвращают сумму и разницу соответственно. 
 Создайте функцию op2(), которая принимает
 два числовых аргумента $num1 и $num2,
 и третий строковый вызываемый аргумент (callable) */

// НЕ РЕШИЛА ((( 

function add($arg1, $arg2) {
	$summa = $arg1 + $arg2;
	return $summa;
}
//echo add(3, 2).'<br>'; 

function sub($arg1, $arg2) {
	$raznitsa = $arg1 - $arg2;
	return $raznitsa;
}
//echo (6 - 3).'<br>';

function dlyaVyzov() {
	$stringArg = "+";
	return $stringArg;
}
//echo dlyaVyzov().'<br>';
 
/* function op2($num1, $num2, 'dlyaVyzov') {
	$sum = $sum1 + $stringArg + $sum2;
	return $sum;
} */
//echo op2(1, 5).'<br>';
 

/* 10. + Создайте функцию, которая при помощи 
статических переменных будет выполнять 
основную работу только один раз */

function statich() {
	static $stat1 = "Hello";
	static $stat2 = " World";
	return "$stat1 $stat2";
}
echo statich();

?>