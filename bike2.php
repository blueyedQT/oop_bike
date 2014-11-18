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
		echo '<br>The price is: $'.$this->price.'<br>
		The max speed is: '.$this->max_speed. '<br>
		The current mileage is: '.$this->miles.' miles.<br><br>';
	}

	public function drive() {
		$this->miles += 10;
		echo 'Driving...<br>';
		return $this;
	}

	public function reverse() {
		$this->miles -= 5;
		if($this->miles<0) {
			$this->miles = 0;
		}
		echo 'Reversing<br>';
		return $this;
	}
}

echo '<h3>Bike1</h3>';
$bike1 = New bike(123, 22);
$bike1->drive()->drive()->drive()->reverse()->displayInfo();

echo '<h3>Bike2</h3>';
$bike2 = New bike(100, 12);
$bike2->drive()->drive()->reverse()->reverse()->displayInfo();

echo '<h3>Bike3</h3>';
$bike3 = New bike(50, 22);
$bike3->reverse()->reverse()->reverse()->displayInfo();

?>