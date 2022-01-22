<?php 
	if (isset($_POST['fun'])) {
		session_start();
		unset($_SESSION['username']);
		unset($_SESSION['id']);
		exit("ok");
	}
 ?>