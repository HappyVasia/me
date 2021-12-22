<?php

//4. Ваше задание — создать массив, 
//наполнить его случайными значениями 
//(можно использовать функцию rand),
// найти максимальное и минимальное 
// значение массива и поменять их местами.

$array = [];
for($i = 0; $i < 10; $i++){
    array_push($array, rand(1, 10));
}
//print_r($array);
foreach ($array as $value){
    echo $value; echo "<br>";
}

$max = max($array);
$min = min($array); echo "<br>";
echo $max; echo "<br>";
echo $min; echo"<br>";
$max_key = array_search($max, $array);
$min_key = array_search($min, $array);
echo "<br>";
echo $max_key; echo "<br>";
echo $min_key;
echo "<br>";echo "<br>";
//array_swap($array, $max_key, $min_key);
$memory = $min[$min_key];
$array[$min_key] = $array[$max_key];
$array[$max_key] = $memory;


foreach ($array as $value){
    echo $value; echo "<br>";
}

