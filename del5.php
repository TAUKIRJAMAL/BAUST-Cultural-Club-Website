<?php
include "dbb.php";
$serial = $_GET['serial'];

$del = mysql_query("DELETE FROM `a_table`WHERE serial= '$serial'");

header("location:clubindex.php");

?>