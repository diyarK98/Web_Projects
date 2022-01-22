<?php 
	include "config.php";
	session_start();
	if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
			$success = mysqli_query($conn  , "SELECT * FROM `employee` WHERE `username` = '".$_POST['username']."' AND `password` = '".$_POST['password']."';");
			if(mysqli_num_rows($success) == 1){
		    while($row = mysqli_fetch_assoc($success)){
		        $_SESSION['username'] = $row['username'];
		        $_SESSION['role'] = $row['role'];
		    }
				exit("success");
			}else{
    			exit("Login failed!");
			}
	}else{
		exit("Please fill all required filds");
	}
 ?>