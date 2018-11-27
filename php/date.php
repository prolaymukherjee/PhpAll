<!DOCTYPE html>
<html>
	<head>
		<title>This is time and date</title>
	</head>
	
	<body>
		<?php
			echo"Today date is ".date("d/m/y")."<br>";
			echo"Today date is ".date("d.m.y")."<br>";
			echo"Today date is ".date("d-m-y")."<br>";
			date_default_timezone_set("Asia/Dhaka");
			echo"Today time is ".date("h:i:sa")."<br>";
			
			
			
		?>
	</body>
</html>