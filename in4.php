<html>
	<head>
	
		
		<style> 
		#userFied
		{
			width:400px;
			hight:50px;
			font-size: 200%;

			
	
}
</style>
	</head>

<form method ="POST" onsubmit='addNewLines();'>
<textarea id='Msg' style='display:none' name='rules' ></textarea>
<br>
<textarea id="userFied" placeholder="membership rules"></textarea>
<br>
<input type="submit"/>
</form>
<a href="clubindex.php">records</a>
<a href="clubindexs.php">posted</a>
<a href="admin.php">admin</a>

<br>
<script>
function addNewLines()
{
	text = document.getElementById('userFied').value;
	text = text.replace(/  /g,"[sp][sp]");
		text = text.replace(/\n/g,"[nl]");
		document.getElementById ('Msg').value = text;

		return false;
		
		
		
		}
</script>

<?php

include "dbb.php";

if (isset($_POST['rules']))
{

$text = $_POST['rules'];


$text = preg_replace("#\[sp]#","&nbsp;",$text);
	$text = preg_replace("#\[nl\]#","<br>\n",$text);
	echo $text;
}
	$insert = mysql_query("INSERT INTO `r_table`(`rules`)
VALUES ('$text')");
if(!$insert)
{
	echo mysql_error();
}
else
{
	echo "";
}




?>

