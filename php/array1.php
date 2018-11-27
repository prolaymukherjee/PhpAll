<!DOCTYPE html>
<html>
	<head>
		<title>Another array example</title>
	</head>
	
	<body>
		<?php
		
			$number = array(1,5,10,15,20);
			sort($number);
			
			$arraylength = count($number);
			
			for($i=0;$i < $arraylength;$i++){
				echo $number[$i]."<br>";
			}
			
			echo"<br>";
			
			$subj=array(1,2,3,4);
			rsort($subj);
			
			
			$arraylength1 = count($subj);
			for($i = 0;$i<$arraylength1;$i++){
				echo $subj[$i]."<br>"
			}
			
 		?>
	</body>
</html>