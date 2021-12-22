<?php

//9.Дано натуральное число n.
//        Вычислить: 11 + 22 + .. + nn.
 //       Вывести на экран квадраты этих чисел,
//        а также сумму квадратов этих чисел.

$int = 5;
$int_str = (string)($int);
if(is_string($int_str))    {echo "string";}
$new_string = $int_str.$int_str;
echo $new_string;
$new_int = (integer)($new_string);
echo $new_int;echo "<br>";

$summa = $new_int;
while($new_int != 11){
    do {
        $a = $new_int - 11;
        echo $a; echo "<br>";
        $summa += $a;
        echo $summa; echo "<br>";
    }
}    

