<?php
$connection = mysql_connect("localhost","root","");
if($connection){

	mysql_select_db("newsportal") or die("DB not selected");
}else{
	echo "Databse not connected.";
}

?>