<!DOCTYPE html>
<html>
	<head>
		<title>This is class base php</title>
	</head>
	<body>
		<?php
			
			class person{
				public $name="Arafath sheikh";
				public $age;
				
				public function GetName(){
					echo "person name is: ".$this->name."<br/>";
				}
				
				public function GetAge($value){
					echo "person age is: ".$this->age=$value;
				}
			}
			
			$personOne = new person;
			
			$personOne->GetName();
		
			$personOne->GetAge("24");
			
			
		?>
	</body>
</html>