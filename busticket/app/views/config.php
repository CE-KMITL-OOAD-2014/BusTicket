<?php
$host="localhost";
$user="root";
$password="root";
$db_name="mydatabase";
$conn=mysql_connect($host,$user,$password);
$conn_db=mysql_select_db($db_name);
mysql_query("SET NAMES utf8");
if(!$conn_db){
	
	echo"No select database name {$db_name}";
}
?>