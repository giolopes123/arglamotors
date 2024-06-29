<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header("location:hvac-master/loginBootstrap.php");
	}

	header("location:hvac-master");
?>