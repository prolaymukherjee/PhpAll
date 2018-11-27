<!DOCTYPE html>
<html>
	<head>
		<title>This is try catch</title>
	</head>
	
	<body>
		<?php
			function checkNumber($num){
				if($num > 1){
				   throw new Exception("value must be 1 or below");	
				}
				return true;
			}
			
			try{
				checkNumber(2);
				
				echo"If you see this,the number is 1 below";
			}
			catch(Exception $obg){
				echo'message'.$obg->getMessage();
			}
		?>
	</body>
</html>