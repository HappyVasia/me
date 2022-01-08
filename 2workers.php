<?php
// Сделать класс Worker с private полями name, age, salary.
//Создать public методы setName, getName, setAge, 
// getAge, setSalary, getSalary
//Первый объект Иван, 25, 1000
//Второй объект - Вася, 26, 2000. 
//Вывести сумму зарплат Ивана и Васи. 
//Сумму возрастов. 

require_once '2classWorker.php';

$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);
echo $worker1->getName()."\t";
echo $worker1->getAge()."\t";
echo $worker1->getSalary().'<br>';

$worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);
echo $worker2->getName()."\t";
echo $worker2->getAge()."\t";
echo $worker2->getSalary().'<br>';

$commonSalary = $worker1->getSalary() + $worker2->getSalary();
echo $commonSalary.'<br>';

$commonYears = $worker1->getAge() + $worker2->getAge();
echo $commonYears;

?>
