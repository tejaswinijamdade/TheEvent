<?php

	session_start();
	if ($_SESSION['']) {

		header('location:/theevent/TheEvent/studlog.html');

	}
	
	$con=mysqli_connect('localhost','root','','event');



	$username=$_POST['username'];
	$password=$_POST['password'];
	


	$query="SELECT * FROM `studentinfo` WHERE `username`=`$username`AND `password`=`$password`";
	$run=mysqli_query($con,$query);

	if($run==true)
	{
		echo "<script>alert('Successfully Login');</script>";
	}
	else {
		
		echo "<script>alert('username or password not Match'); window.open('studlog.html''_self');     </script>";
	}



	

?>