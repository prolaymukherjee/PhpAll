<!DOCTYPE html>
<html>
	<head>
		<title>This is form example</title>
	</head>
	<body>
		<?php
			$name = $email =$gender = $message= "";
			
			
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$name = verify_input($_POST["name"]);
				$email = verify_input($_POST["email"]);
				
				if(isset($_POST["gender"])){
					$gender = verify_input($_POST["gender"]);
				}
				$message = verify_input($_POST["message"]);
			}
			
			function verify_input($date){
				$date=trim($date);
				$date= stripslashes($date);
				$date= htmlspecialchars($date);
				return $date;
			}
		?>
		
		
		<h3>This is PHP Form Validation Example</h3>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			name:<input type="text" name="name">
			<br><br>
			email:<input type="email" name="email">
			<br><br>
			gender:<input type="radio" name="gender" value="male">MALE
                   <input type="radio" name="gender" value="female">FEMALE
				 <br><br>  
		     message:<br>
			 <textarea name="messege" rows="5" cols="40"></textarea>
			 <br><br> 
			 <input type="submit" name="submit" value="Submit">
		</form>
		
		
		
		<?php
			echo"<h2> This is The Input Value:</h2>";
			echo  $name;
			echo "<br>";
			echo  $email;
			echo "<br>";
			echo  $gender;
			echo "<br>";
			echo  $message;
		?>
		
	</body>
</html>