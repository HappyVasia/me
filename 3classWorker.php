<?php
// Дополнить private методом checkAge, 
// который проверяет возраст 
// на корректность (от 1 до 100 лет). 
// С использованием метода setAge перед установкой
// нового возраста (если возраст не корректный, 
// он не должен меняться.

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