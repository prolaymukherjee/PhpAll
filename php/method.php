<!DOCTYPE html>
<html>
	<head>
		<title>oop Method </title>
	</head>
	<body>
		<?php
			class Truck{
				public function fuel($gallon){
					$this->fuelInTank +=$gallon;
					return $this;
				}
				public function totalRide($miles){
					$gallons = $miles/60;
					$this->fuelInTank -=($gallons);
                    return $this;					
				}
			}
			$truck = new Truck();
			$fuelInTank = $truck->fuel(10)->totalRide(50)->fuelInTank;
			echo "Fuel left:".$fuelInTank. "gallon.";
		?>
	</body>
</html>