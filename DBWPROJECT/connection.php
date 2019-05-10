<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$db="dbms_project";
$conn=mysqli_connect($url,$username,$password,$db);
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?>