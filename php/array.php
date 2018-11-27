<!DOCTYPE html>
<html>
	<head>
		<title>This is aray example</title>
	</head>
	
	<body>
		<?php
			$subject= array("html","css","boootsrap","js","php");
			echo "I learn ".$subject[0].",".$subject[1].",".$subject[2];
			echo "<br>";
			
			
			
			$number = array("1","2","3","4","5");
			$arraykength = count($number);
			
			for($i = 0;$i<$arraykength;$i++){
				echo $number[$i];
				echo "<br>";
			}
			
		?>
	</body>
</html>