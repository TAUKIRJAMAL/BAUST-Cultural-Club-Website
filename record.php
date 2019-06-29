<?php
include "dbb.php";
?>


<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8"/>
		<title>CSS Display Property</title>
		
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
$record = mysql_query("SELECT * FROM `pr_table`");
while($data = mysql_fetch_array($record))
{
	?>
	<tr>
	
	
	<p><?php 
	echo $data['president'];

	
	?>

	<td><a href="del.php?serial=<?php echo $data['serial'];?>">del</a></td></p>
	
	
	<?php
}
?>

		
			
			</span>
			 </p>
		</div>
	
	</body>
</html>








