<!DOCTYPE html>
<html>
	<head>
		<title>Php</title>
		<link />
	</head>
	
	<body>
		<?php
			echo"Start php with prolay! <br>";
			ECHO"Start php with prolay! <br>";
			
			
			
			$name="prolay";
			echo $name. "<br>";
			
			$name1="prolay";
			echo $name1." mukherjee <br>";
			
			
			$five=5;
			$nine=9;
			  
			echo $five + $nine."<br>";
			
			function variable(){
				$a=10;
				echo"AGe is ".$a;
			}
			
			variable()."<br>";
			
			$var=10;
			function variable1(){
				
				echo "My name is  ".$var;
			}
			
			variable1();
			
			
			
			class sub{
				public $course = "php";
			}
			
			$learn = new sub();
			
			echo$learn->course;
			
			$a = 20;
			$b = 15;
			
			echo "a+b =",$a+$b,"<br>";
			echo "a-b =",$a-$b,"<br>";
			echo "a*b =",$a*$b,"<br>";
			echo "a/b =",$a/$b,"<br>";
 			
			
		?>
	</body>
</html>