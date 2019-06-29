<?php
include "dbb.php";
?>


<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8"/>
		<title>BAUST</title>
		
		<link rel="stylesheet" href="style.css">
		<style type="textarea/css">
	
}
</style>
	</head>
	<body>

		<div id="wrapper">
		
		
		
			<p>

	
			<span>
			<?php
$record = mysql_query("SELECT * FROM `r_table`");
while($data = mysql_fetch_array($record))
{
	?>
	<tr>
	
	
	<p><?php 
	echo $data['rules'];

	
	?>
	<td><a href="edit.php?serial=<?php echo $data['serial'];?>">edit</a></td>
	<td><a href="del4.php?serial=<?php echo $data['serial'];?>">del</a></td></p>
	
	
	<?php
}
?>

		
			
			</span>
			 </p>
		</div>
	
	</body>
</html>
</table>
<a href="in2.php">index page</a>







