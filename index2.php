<?php
// 3.
$summa = 0;
for($i = 20; $i <= 45; $i++){
    if($i%5==0){
        $summa+=$i;
      }
}
echo $summa;