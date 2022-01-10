<?php
// Сделать класс "равнобочная трапеция".
// члены класса - координаты четырёх точек. 
// Конструктор.
// методы - явл. ли фигура равнобочной трапецией. 
// вычисление и вывод - длина сторон, периметр, площадь.
//  вне класса - дано N - трапеций, 
// найти кол-во трапеций, у которых площадь 
// больше средней площади. 

class RavnobochnayaTrapetsia
	{
		public $x1;
		public $y1;
		public $x2;
		public $y2;
		public $x3;
		public $y3;
		public $x4;
		public $y4;
		
	public function __construct($x1, $y1, $x2, $y2,
								$x3, $y3, $x4, $y4)
	{
		$this->x1 = $x1;
		$this->y1 = $y1;
		$this->x2 = $x2;
		$this->y2 = $y2;
		$this->x3 = $x3;
		$this->y3 = $y3;
		$this->x4 = $x4;
		$this->y4 = $y4;
	}	
	
	public function ravnobochnaya()
	{
		
	}	
	
	public function dlinaStoron()
	{
$a = sqrt(abs($this->x4 - $this->x1)+abs($this->y4 - $this->y1));
$b = sqrt(abs($this->x3 - $this->x2)+abs($this->y3 - $this->y2));
$c = sqrt(abs($this->x2 - $this->x1)+abs($this->y2 - $this->y1));
$d = sqrt(abs($this->x4 - $this->x3)+abs($this->y4 - $this->y3));	
$array = [$a, $b, $c, $d];
return $array; 

	}	
	
	public function perimetr()
	{
		
	}	
	
	public function ploschad()
	{
		
$a = sqrt(abs($this->x4 - $this->x1)+abs($this->y4 - $this->y1));
$b = sqrt(abs($this->x3 - $this->x2)+abs($this->y3 - $this->y2));
$c = sqrt(abs($this->x2 - $this->x1)+abs($this->y2 - $this->y1));
$d = sqrt(abs($this->x4 - $this->x3)+abs($this->y4 - $this->y3));			

/* $this->dlinaStoron();
$a = $array[0];
$b = $array[1];
$c = $array[2];
$d = $array[3];
  */
echo "Сторона a = $a <br> Сторона b = $b <br> 
	Строна c = $c <br> Сторона d = $d <br>";
$ploschad = ( ($a+$b)/4 )* sqrt( (4*pow($c,2))-pow(($a-$b),2));
		echo "Площадь данной трапеции равна $ploschad";
	
	}	
	
	}

$trapetsia1 = new RavnobochnayaTrapetsia(1, 7, 5, 5, 4, 1, 1, 1);	
//echo $trapetsia1->dlinaStoron();

$trapetsia1->ploschad();

// вот как перекинуть значения сторон из метода dlinaStoron()
// в методы ploschad() и perimetr()


?>
