<?php


interface Drivable
{
	
	function forward($n);
	
	function turnLeft();

	function turnRight();



}


abstract class Vehicle implements Drivable
{
	protected $name;
	protected $x,$y;
	protected $direction='N';
	
        protected static $direction2dx=array('N'=>0, 'S'=>0, 'W'=>-1, 'E'=>1);
	protected static $direction2dy=array('N'=>1, 'S'=>-1, 'W'=>0, 'E'=>0);
	
	protected static $directionLeft=array('N'=>'W', 'W'=>'S', 'S'=>'E', 'E'=>'N');
	protected static $directionRight=array('N'=>'E', 'E'=>'S', 'S'=>'W', 'W'=>'N');
	
	public function __construct($name, $x=0, $y=0)
	{
		$this->name=$name;
		$this->x=$x;
		$this->y=$y;
	
	}
	
	public function position()
	{
		echo $this->name.'->( '.$this->x.' , '.$this->y.' )';
		

	}
	
	public function forward($n)
	{
		$this->x+= n * Vehicle::$direction2dx[$this->direction];
		$this->y+= n * Vehicle::$direction2dy[$this->direction];
		
	
	}
	
	public function turnLeft()
	{
		$this->direction=Vehicle::$directionLeft[$this->direction];
	
	}
	
	public function turnRight()
	{
		
		$this->direction=Vehicle::$directionRight[$this->direction];
	
	}
	
	public function __toString()
	{
		return $this->name.'-> ('.$this->x.' , '.$this->y.' )';
	
	
	}

}


class Car extends Vehicle
{
	
	private $consumed=0;
	
	public function fuelConsumed()
	{
		return $this->consumed;
	
	}
	
	
	public function forward($n)
	{	
		$this->consumed+=$n/10.0;
		$this->x+= $n * Vehicle::$direction2dx[$this->direction];
		$this->y+= $n * Vehicle::$direction2dy[$this->direction];


	}



}


class Tram extends Vehicle{

	private $line;
	
	public function __construct($name,$line)
	{
		$this->line=$line;
		parent::__construct($name);			
		
	
	}
	
	public function lineNumber()
	{		
		return $this->line;
	
	}



}

$arr[0]=new Car("Mercedes");
$arr[1]=new Tram("Tram nb.One",1,1,0);
$arr[2]=new Car("Audi",2,0);

for($i=3;$i<8;++$i)
	$arr[$i]=new Tram("Tram nb.".$i,$i,$i,0);

for($i=8;$i<13;++$i)
	$arr[$i]=new Car("Audi #".$i,$i,0);


foreach($arr as $vehicle)
{
	$vehicle->forward(4);
	$vehicle->turnLeft();
	$vehicle->forward(10);
	$vehicle->turnRight();
	$vehicle->forward(15);
	$vehicle->turnRight();
	$vehicle->turnRight();
	$vehicle->turnRight();
	$vehicle->forward(20);
	




}



?>

<html>
<head>
	<meta charset="utf-8" />
	<title>Zadatak 4</title>
</head>
<body>
	
	<?php
		
		for($i=0;$i<13;++$i)
		{
			echo '<p>'.$arr[$i];
			if($arr[$i] instanceof Car)
				echo '<br/>Fuel consumed: '.$arr[$i]->fuelConsumed();
			
			else if($arr[$i] instanceof Tram)
				echo '<br/>Line: '.$arr[$i]->lineNumber();	
			
			
			
			
			echo '</p>';
		}
	
	?>





</body>
</html>












