<?php 
 
require_once '4classWorker.php';

$worker1 = new Worker('Толя', 109, 5000);
echo $worker1->getName()."\t";
echo $worker1->getAge()."\t";
echo $worker1->getSalary().'<br>';

$worker2 = new Worker('Потап', 30, 4000); 
echo $worker2->getName()."\t";
echo $worker2->getAge()."\t";
echo $worker2->getSalary().'<br>';

?>