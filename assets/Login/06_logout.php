<?php
	session_start();
	session_destroy();

	header('Location:04_form_login.php');
?>