<?php
	include "func.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>This is oop calculator</title>
	</head>
	<body>

	
	
	
		<h3>This is OOP PHP use calculator:</h3>
		
		<form method="post" action="">
			<tr>
				<td>Enter The First Number:</td>
				<td><input type="number" name="num1"></td>
			</tr>
			<br><br>
			<tr>
				<td>Enter The Second Number:</td>
				<td><input type="number" name="num2"></td>
			</tr>
				<br><br>
			<tr>
				<td></td>
				<td><input type="submit" name="calculation" value="calculate"</td>
			</tr>
		</form>
		
		
		
		
			
	
	<?php
		if(isset($_POST['calculation'])){
			$numberOne = $_POST['num1'];
			$numberTwo = $_POST['num2'];
			
			if(empty($numberOne) or empty($numberOne)){
				echo "<span style='color:red;'>This Two field does not empty</span><br>";
			}else{
			
			$cal= new calculation;
			$cal->add($numberOne,$numberTwo);
			$cal->sub($numberOne,$numberTwo);
			$cal->mul($numberOne,$numberTwo);
			$cal->div($numberOne,$numberTwo);
			
		     }
		}
	?>
		
		
		
	</body>
</html>
		
		
		