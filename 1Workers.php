<?php
/* вывод от classWorker
 Сделать класс Worker с public полями name, age, salary.
Создать объект этого класса, затем установить поля в 
(не в __construct, а для объекта) - имя Иван, возраст 25,
зарплата 1000.  
Второй объект - Вася, 26, 2000. 
Вывести сумму зарплат Ивана и Васи. 
Сумму возрастов. */ 

include_once "1classWorker.php";

$worker1 = new Worker;
$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2 = new Worker;
$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;


$salary1 = $worker1->salary;
$salary2 = $worker2->salary;
$commonSalary = $salary1 + $salary2;
echo $commonSalary.'<br>';
echo $worker1->age + $worker2->age;

?>
