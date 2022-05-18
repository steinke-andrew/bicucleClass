<?php

class bicycle {
	public int $wheelDiameter;
	public int $bikeGear;
	public string $brand;
	public int $speed;
	public int $numWheels;


	public function __construct() {
		$this->wheelDiameter = 28;
		$this->bikeGear = 1;
		$this->speed = 0;
		$this->brand = 'schwinn';
		$this->numWheels = 2;
	}

	public function pedalFaster() {
		$this->speed++;
	}

	public function slowDown() {
		if($this->speed > 0) {
			$this->speed--;
		}
	}

	public function brake() {
		$this->speed = 0;
	}

	public function getSpeed(): int {
		return $this->speed;
	}

	public function gearUp() {
		if($this->bikeGear < 4) {
			$this->bikeGear++;
		}
	}

	public function gearDown() {
		if($this->bikeGear > 1) {
			$this->bikeGear--;
		}
	}

}

$bike = new bicycle();
$bike->pedalFaster();
var_dump(($bike));