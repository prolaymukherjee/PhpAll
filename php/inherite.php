<!DOCTYPE html>
<html>
	<html>
		<head>
			<title>This is inherite</title>
		</head>
		
		<body>
			<?php
				class Grettting{
					private $name;
					
					public function __construct($name){
						$this->name = $name;
					}
					public function getHello(){
						echo"Hello ".$this->name .".";
					}
				}
				
				class Hello extends Grettting{
					 private $message = "How's your day!";
					 
					  public function welcomeMsg(){
		               echo $this->getHello() . $this->message;
	 }
				}
				$hello = new Hello("Prolay");
				$hello->welcomeMsg();
			?>
		</body>
	</html>
</html>