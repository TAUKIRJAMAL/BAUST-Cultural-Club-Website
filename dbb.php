<?php
mysql_connect ("localhost","root","1234");
$db = mysql_select_db("n_pr");
if(!$db)
{
	echo "not yoooo";
}
else
{
	echo "";
}
?>