<!DOCTYPE html>
<html>
	<head>
		<title>This is function site excerise.</title>
	</head>
	
	<body>
		<?php
		  function hello(){
			  echo "hellow Hamja";
		  }
		  
		  hello()."<br>";
		  
		  
		  function member($n){
			  echo  "$n <br>";
		  }
		  
		  
		  member("prolay");
		  
		  
		  function calculate($num1,$num2){
			  $total = $num1 + $num2;
			  return $total;
		  }
		  
		  echo "11+9 = ".calculate(11,9)."<br>"
		  
		  
		?>
	</body>
</html>