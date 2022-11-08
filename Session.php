<?php
	include('Configure.php');
	session_start();
	
	$user_check = $_SESSION['uname'];
	
	$result = mysqli_query($connect,"SELECT * from users where uname = '$user_check' ");
				   
	$row = mysqli_fetch_array($result);
	//$user_email = $row['register_id'];
	//$user_email = $_SESSION['user_id'];
	$login_session = $_SESSION['uname'];
				   
	if(!isset($_SESSION['uname'])){
		header("location:index.php");
				   }

?>