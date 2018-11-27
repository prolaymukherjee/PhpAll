<!DOCTYPE html>
<html>
	<head>
		<title>This is session</title>
	</head>
	
	<body>
		<?php
			$_SESSION["userName"] = "prolay";
			$_SESSION["password"] = "2018";
			
			echo "The name of user is: ".$_SESSION["userName"]."<br>";
			echo "The password is: ".$_SESSION["password"]."<br>";
			
		?>
	</body>
</html>