<?php
	session_start();
	unset($_SESSION["studentname"]);
	unset($_SESSION["usn"]);
	session_destroy();
	header("location: ../studentlogin.php");
?>