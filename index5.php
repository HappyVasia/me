<?php

//6. Вашим заданием будет создание сокращенного
//варианта ФИО.
//Например, вводим: Иванов Иван Петрович,
//        а в результате должны получить: Иванов И. П.

$text = $_POST["text"];
echo $text;
echo "<br>";

$array = explode(",", $text);

foreach ($array as $value) {
    echo $value; echo "<br>";
    
}
$count = count($array);
echo $count;
$nulll = $text[5];
echo $nulll;
