<?php 
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "donatiodb";
$connection=mysqli_connect("$db_host","$db_username","$db_pass") or die("cannot connect to database");
$db=mysqli_select_db("$db_name",$connection) or die("No database");
?>