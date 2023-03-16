<?php
	// TODO: implement logout feature
	session_start();
	session_unset();
	session_destroy();
	header("Location: login.php");
    die;
?>