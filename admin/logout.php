<?php
	include './navbar.php';
	session_destroy();

	redirect($url.'admin');
?>