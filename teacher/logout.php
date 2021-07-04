<?php
	session_start();
	unset($_SESSION["teacher"]);
	unset($_SESSION["T_name"]);
	session_destroy();
	header("location: ../teacherlogin.php");
?>