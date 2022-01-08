<?php
// Сделать класс Worker с private полями name, age, salary.
//Создать public методы setName, getName, setAge, 
// getAge, setSalary, getSalary
//Первый объект Иван, 25, 1000
//Второй объект - Вася, 26, 2000. 
//Вывести сумму зарплат Ивана и Васи. 
//Сумму возрастов. 


	class Worker 
	{
		private $name;
		private $age;
		private $salary;
		
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}
		
	public function getAge()
	{
		return $this->age;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	public function getSalary()
	{
		return $this->salary;
	}	
	
	}
	
?>