<?php
	// $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url = 'http://localhost/php_task/';
	date_default_timezone_set('Asia/Kolkata'); // Set the timezone
	$con=mysqli_connect("localhost","root","","phptask");
	function redirect($url) {
	    header("Location: $url");
	    exit(); // Always call exit() after a redirect to stop further script execution
	}
?>