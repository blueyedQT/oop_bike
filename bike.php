<?php

class bike{
	public $price;
	public $max_speed;
	public $miles = 0;

	public function __construct($price, $max_speed) {
		$this->price = $price;
		$this->max_speed = $max_speed.' mph';
	}

	public function displayInfo() {
		return 'The price is: $'.$this->price.'<br>
		The max speed is: '.$this->max_speed. '<br>
		The current mileage is: '.$this->miles.' miles.<br><br>';
	}

	public function drive() {
		$this->miles += 10;
		return 'Driving...';
	}
	public function reverse() {
		$this->miles -= 5;
		if($this->miles<0) {
			$this->miles = 0;
		}
		return 'Reversing';
	}
}

echo '<h3>Bike1</h3>';
$bike1 = New bike(123, 22);
echo $bike1->drive().'<br>';
echo $bike1->drive().'<br>';
echo $bike1->drive().'<br>';
echo $bike1->reverse().'<br><br>';
echo $bike1->displayInfo();

echo '<h3>Bike2</h3>';
$bike2 = New bike(100, 12);
echo $bike2->drive().'<br>';
echo $bike2->drive().'<br>';
echo $bike2->reverse().'<br>';
echo $bike2->reverse().'<br><br>';
echo $bike2->displayInfo();

echo '<h3>Bike3</h3>';
$bike3 = New bike(50, 22);
echo $bike3->reverse().'<br>';
echo $bike3->reverse().'<br>';
echo $bike3->reverse().'<br><br>';
echo $bike3->displayInfo();

?>