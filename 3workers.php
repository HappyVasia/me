<?php

require_once '3classWorker.php';

$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(50);
echo $worker1->getName()."\t";
echo $worker1->getAge().'<br>';

$worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(104);
echo $worker2->getName()."\t";
echo $worker2->getAge().'<br>';

$worker3 = new Worker();
$worker3->setName('Пётр');
$worker3->setAge(100);
echo $worker3->getName()."\t";
echo $worker3->getAge().'<br>';

$worker4 = new Worker();
$worker4->setName('Федя');
$worker4->setAge(1);
echo $worker4->getName()."\t";
echo $worker4->getAge().'<br>';

$worker5 = new Worker();
$worker5->setName('Пупкин');
$worker5->setAge(105);
echo $worker5->getName()."\t";
echo $worker5->getAge().'<br>';

?>