<?php

//8.Игральным картам присвоены следующие порядковые
//номера в зависимости от их достоинства: 
//    "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14.
//        Порядковые номера остальных карт
//        соответствуют их названиям
//        ("семерка", "восмерка" и т. д.). 
//        Вам нужно разработать программу, 
//        которая выводила достоинство карты
//        по заданному номеру, который будет 
//        вводит пользователь.

$text = $_POST["text"];
//echo $text;
echo "<br>";

switch ($text){
    case "6":  echo "шестёрка"; break;
    case "7":  echo "семёрка"; break;
    case "8":  echo "восьмёрка"; break;
    case "9":  echo "девятка"; break;
    case "10": echo "десятка"; break;
    case "11": echo "Валет"; break;
    case "12": echo "Дама"; break;
    case "13": case "Король"; break;
    case "14":  echo "Туз"; break;
    default:  echo " Такой карты нет!";  break;
}