<?php

// 6. Вашим заданием будет создание сокращенного
// варианта ФИО.
// Например, вводим: Иванов Иван Петрович,
// а в результате должны получить: Иванов И. П.

$text = $_POST["text"];
$array = [];
$word  =  strtok($text, " ");
	while($word) {
		$array[] = $word;
		$word = strtok(" ");
	}
	
$new_array = array("a" => $array[0], "b" => $array[1],
	"c" => $array[2]);
extract($new_array);
//echo $a. " " . $b. " " .$c;

$new_b = trim($b);
$new_c = trim($c);

printf("%s %.2s.\t %.2s.", $a,$b,$c);
