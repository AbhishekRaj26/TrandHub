<?php
	session_start();
	session_destroy();
	$_SESSION = array();
	$home_url = '../account.html';
?>