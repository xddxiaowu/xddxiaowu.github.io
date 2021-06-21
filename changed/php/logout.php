<?php
	ob_start();
	if($_GET['action']=="logout"){
		session_start();
		setcookie("email","",time()-60);
		session_unset();
		session_destroy();
		header("location:../homepage.php");
	}

?>