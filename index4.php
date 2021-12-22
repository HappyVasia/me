<?php

$array = [];
for($i = 0; $i < 10; $i++){
    array_push($array, rand(0, 100));
}
//foreach ($array as $value){
 //   echo $value; echo "<br>";
//}
$proizvedenie = 1;
for($i = 0; $i < count($array); $i++){
    if( ($array[$i] > 0) && ($i %2==0) ){
        $proizvedenie*=$array[$i];
        }
    }
    echo "<br>";
   // echo $proizvedenie;echo "<br>";echo "<br>";
    
    for($i = 0; $i < count($array); $i++){
        if( ($array[$i] > 0 ) && ($i%2!=0) ){
            echo $array[$i]; echo "<br>";
        }
    }