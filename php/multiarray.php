<!DOCTYPE html>
<html>
	<head>
		<title>This is multi array example</title>
		<style type="text/css">
			table,th,td{
				border:2px solid;
				border-collapse:collapse;
				padding:2px;
			}
			table{
				width:100%;
			}
		</style>
	</head>
	
	<body>
		<?php
			$mobile = array(
			  array("samsung",95,53),
			  array("Nokia",85,50),
			  array("Oppo",75,45),
			  array("MI",98,58),
			);
			echo"<table>
					<tr>
						<th>Name</th>
						<th>Stock</th>
						<th>selles</th>
					</tr>"
						for($row=0;$row<4;$row++){
							echo"<tr>"
							for($col=0;$col < 3;$col++){
								echo"<td>".$mobile[$row][$col].</td>
							}
							echo"</tr>"
						}
					
			    echo"</table>";
		?>
	</body>
</html>