<?php
	include 'connect.php';
	session_start();
		if(isset($_POST['signin']))
		{
		$userid =   $_POST['uid'];
		$sname = $_POST['sname'];
		$pswrd = $_POST['pwd'];
		$phn = $_POST['phn'];
		//$mail = $_POST['mail'];
		$address = $_POST['add'];
		$sql = "INSERT INTO donor VALUES ('".$userid."','".$sname."','".$pswrd."','".$phn."','".$address."')";
		if( mysqli_query($connection, $sql)){
			echo "<script>alert('Sign_up completed.');</script>";	
			}
		else
		{
		echo "<script>alert('Something went wrong try again latter.');</script>";
		}
		}
?>