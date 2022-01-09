<?php
// К задаче 3 разработать конструктор для инициализации
// имени возраста и зарплаты

class Worker 
	{	
		public $name;
		public $age;
		public $salary;
		
	public function __construct($name, $age, $salary)
	{
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}	
		
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
		if ($this->checkAge($age)){
		$this->age = $age;
		}
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
	
	private function checkAge($age)
	{
		return $age >= 1 && $age <= 100;
	}
	
	}

?>